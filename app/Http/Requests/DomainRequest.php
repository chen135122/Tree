<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomainRequest extends FormRequest
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
            'name' => 'required|unique:domains,name',
            'description' => 'required|min:10'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => '区域名字不能留空',
            'name.unique' => '区域的名字已经存在',
            'description.required' => '区域描述不能留空',
            'description.min' => '区域描述不能少于10个字',
        ];
    }
}
