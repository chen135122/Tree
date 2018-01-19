<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ];

        // 修改
        if (request()->isMethod('PUT')) {
            $rules['name'] .= ',' . $this->route('user')->id;
            $rules['email'] .= ',' . $this->route('user')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => '用户的名字不能为空',
            'name.unique' => '用户的名字已经存在',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱不符合规范',
            'email.unique' => '邮箱已经存在',
            'password.required' => '密码不能为空',
            'password.min' => '密码不能少于六位',
        ];
    }
}
