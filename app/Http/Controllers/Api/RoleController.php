<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends ApiController
{
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);

        // 要显示的菜单
        $roles = Role::latest()->paginate($limit);

        return $this->setExtendField('count', $roles->total())
                    ->setData($roles->all())
                    ->toJson();
    }
}
