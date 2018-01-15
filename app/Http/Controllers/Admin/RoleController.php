<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->get();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();

        return view('admin.roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $roleData = $request->only(['name']);

        $role = Role::create($roleData);
        // 赋予角色权限
        $role->permissions()->attach($request->input('permission_id'));

        return back()->withErrors(['name' => '创建角色成功']);
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->only('name'));
        // 赋予角色权限
        $role->permissions()->sync($request->input('permission_id'));

        return back()->withErrors(['name' => '修改角色成功']);
    }

    public function destroy(Role $role)
    {
        if ($role->delete()) {
            return ['msg' => '删除成功', 'code' => 200];
        } else {
            return ['msg' => '删除失败', 'code' => 401];
        }
    }
}
