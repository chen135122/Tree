<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use Illuminate\Http\Request;

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
                ->orWhere('description', 'like', "%{$wd}%");
        }

        $users = $query->paginate($limit);

        return $this->setExtendField('count', $users->total())
            ->setData($users->all())
            ->toJson();
    }
}
