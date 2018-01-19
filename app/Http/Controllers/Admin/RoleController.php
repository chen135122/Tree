<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use App\Models\Field;
use App\Models\FieldIndex;
use App\Models\TableHeader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $language = 'zh';
        // 要显示的菜单
        $roles_field = Field::where('table_name', 'roles')->get();

        $fields = [];
        foreach ($roles_field as $field) {
            $fields[] = [
                'id' => $field->id,
                'field_name' => $field->field_name,
                'title' => json_decode($field->json_data)->$language,
                'checked' => $field->users()->where('id', Auth::id())->exists()
            ];
        }

        return view('admin.roles.index', compact('fields'));
    }


    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(RoleRequest $request)
    {
        $roleData = $request->only(['name', 'description']);

        $role = Role::create($roleData);

        return back()->withErrors(['name' => '创建角色成功']);
    }


    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->only(['name', 'description']));

        return back()->withErrors(['name' => '修改角色成功']);
    }

    public function destroy(Role $role)
    {
        // 先移除当前角色的所有权限
        $role->permissions()->detach();
        if ($role->delete()) {
            return ['msg' => '删除成功', 'code' => 200];
        } else {
            return ['msg' => '删除失败', 'code' => 401];
        }
    }


    public function assign()
    {

        return view('admin.roles.assign');
    }

}
