<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDynastiesRequest extends FormRequest
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
            'dynasty_name' => 'required|string|min:1|max:100',
            'dynasty_start_year' => 'required|string|min:1|max:100',
            'dynasty_end_year' => 'required|string|min:1|max:100',

        ];
    }

    public function messages()
    {
        return [
            "dynasty_name.required" => "朝代名稱 為必填",
            "dynasty_name.min" => "朝代名稱 至少需1個字元",
            "dynasty_start_year.required" => "朝代 為必填",
            "dynasty_start_year.min" => "朝代 至少需1個字元",
            "dynasty_end_year.required" => "朝代 為必填",
            "dynasty_end_year.min" => "朝代 至少需1個字元",
        ];
    }    
}