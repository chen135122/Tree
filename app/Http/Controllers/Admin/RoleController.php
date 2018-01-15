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
        $roles = Role::latest()->with('guard')->get();

        dd($roles);
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::where('guard_name', 'admin')->get();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $roleData = $request->only(['name', 'guard_name']);

        $role = Role::create($roleData);

        array_map(function($item) use ($role){
            $role->givePermissionTo($item['name']);
        }, $request->input('permission'));

        return back()->with('status', '创建角色成功');
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->only(['name', 'guard_name']));
        $role->syncPermissions($request->input('permission'));
        return back()->with('status', '修改角色成功');
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
