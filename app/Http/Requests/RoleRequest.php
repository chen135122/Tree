<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'permission_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '角色的名字不能为空',
            'permission_id.required' => '至少赋予角色一个权限'
        ];
    }
}
