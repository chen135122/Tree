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
