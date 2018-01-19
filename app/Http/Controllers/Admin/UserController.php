<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\Field;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = 'zh';
        // 要显示的菜单
        $roles_field = Field::where('table_name', 'users')->get();

        $fields = [];
        foreach ($roles_field as $field) {
            $fields[] = [
                'id' => $field->id,
                'field_name' => $field->field_name,
                'title' => json_decode($field->json_data)->$language,
                'checked' => $field->users()->where('id', Auth::id())->exists()
            ];
        }

        return view('admin.users.index', compact('fields'));
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(UserRequest $request)
    {
        $user = $this->createUser($request->all());

        // 发送注册邮件
        $this->created($user);

        return back()->withErrors(['name' => '注册成功']);
    }



    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }


    public function update(UserRequest $request, User $user)
    {
        $data = $request->only(['name', 'email']);
        // 如果存在密码
        if (! is_null($request->input('password'))) {
            $data['password'] = bcrypt($request->input('password'));
        }

        $user->update($data);

        return back()->withErrors(['name' => '修改成功']);
    }


    public function destroy(User $user)
    {
        // 先移除当前用户所有角色
        $user->roles()->detach();
        if ($user->delete()) {
            return ['msg' => '删除成功', 'code' => 200];
        } else {
            return ['msg' => '删除失败', 'code' => 401];
        }
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function created($user)
    {
        // 发送邮件
    }
}
