<?php

namespace App\Http\Controllers\Admin;

use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $language = 'zh';
        // 要显示的菜单
        $roles_field = Field::where('table_name', 'permissions')->get();

        $fields = [];
        foreach ($roles_field as $field) {
            $fields[] = [
                'id' => $field->id,
                'field_name' => $field->field_name,
                'title' => json_decode($field->json_data)->$language,
                'checked' => $field->users()->where('id', Auth::id())->exists()
            ];
        }

        return view('admin.permissions.index', compact('fields'));
    }

    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $this->validate($request, [
           'name' => 'required|unique:permissions,name'
        ], [
            'name.required' => '权限名不能为空',
            'name.unique' => '权限名已经存在'
        ]);

        $data = $request->only(['name', 'description']);
        $permission->update($data);

        return back()->withErrors(['name' => '修改成功']);
    }
}
