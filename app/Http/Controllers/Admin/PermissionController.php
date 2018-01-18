<?php

namespace App\Http\Controllers\Admin;

use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
}
