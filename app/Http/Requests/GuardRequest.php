<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardRequest extends FormRequest
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
            'description' => 'required|min:10'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => '区域名字不能留空',
            'description.required' => '区域描述不能留空',
            'description.min' => '区域描述不能少于10个字',
        ];
    }
}
