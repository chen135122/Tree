<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;

class UserController extends ApiController
{
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);

        // 要显示的菜单
        $query = (new User())->newQuery()->latest();

        // 是否有查询
        if ($request->has('wd')) {
            $wd = $request->input('wd');
            $query->where('name', 'like', "%{$wd}%")
                ->orWhere('id', 'like', "%{$wd}%")
                ->orWhere('email', 'like', "%{$wd}%");
        }

        $users = $query->paginate($limit);

        return $this->setExtendField('count', $users->total())
            ->setData($users->all())
            ->toJson();
    }

    /**
     * 用户分配角色页面获取的数据，需加上 LAY_CHECKED 字段
     */
    public function roleAssignUsersIndex(Request $request)
    {
        $role_id = $request->input('role_id');

        // 要显示的菜单
        $query = (new User())->newQuery();

        if ($request->has('wd')) {
            $wd = $request->input('wd');
            $query->where('name', 'like', "%{$wd}%")
                ->orWhere('id', 'like', "%{$wd}%")
                ->orWhere('email', 'like', "%{$wd}%");
        }
        $users = $query->latest()->get();

        foreach ($users as $user) {
            // 加上 checker 状态
            $user->LAY_CHECKED = $user->roles()->where('id', $role_id)->exists();
        }


        return $this->setExtendField('count', $users->count())
            ->setData($users->all())
            ->toJson();
    }

    /**
     * 授予用户角色
     */
    public function assignRole(Request $request)
    {
        // 获取所有用户
        $users = $request->input('users');
        $users_id = collect($users)->pluck('id');
        // 生成一个数组值都是App\Models\User
        $user_models = array_fill(0, count($users_id), ['model_type' => 'App\Models\User']);
        // 两个数组合并 方便调用 sync 一次性导入
        $data = $users_id->combine($user_models);

        // 获取当前角色 ID
        $role = Role::find($request->input('role_id'));
        // 同步数据角色
        $role->users()->sync($data->all());

        return $this->toJson();
    }
}
