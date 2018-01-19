<?php

namespace App\Http\Requests;

use App\Models\Domain;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

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
        $rules = [
            'name' => 'required|unique:domains,name',
            'description' => 'required'
        ];

        // 修改
        if (request()->isMethod('PUT')) {
            $rules['name'] .= ',' . $this->route('domain')->id;
        }

        return $rules;
    }


    public function messages()
    {
        return [
            'name.required' => '区域名字不能留空',
            'name.unique' => '区域的名字已经存在',
            'description.required' => '区域描述不能留空',
        ];
    }
}
