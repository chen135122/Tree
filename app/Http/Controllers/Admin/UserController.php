<?php

namespace App\Http\Controllers\Admin;

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
        //
    }


    public function store(Request $request)
    {
        //
    }



    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
