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
        $rules = [
            'name' => 'required|unique:roles,name',
        ];

        // 修改
        if (request()->isMethod('PUT')) {
            $rules['name'] .= ',' . request()->route('role')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => '角色的名字不能为空',
            'name.unique' => '角色的名字已经存在',
        ];
    }
}
