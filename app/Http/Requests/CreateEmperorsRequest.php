<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmperorsRequest extends FormRequest
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

            'emperor_name' => 'required|string|min:2|max:191',
            'dynasty_id' => 'required',
            'emperor_life' => 'required',
            'emperor_start_year' => 'required',
            'emperor_end_year' => 'required',
            ];
    }
    public function messages()
    {
        return [
            "emperor_name.required" => "皇帝名稱 為必填",
            "emperor_name.min" => "皇帝名稱 至少需2個字元",
            "dynasty_id.required" => "朝代編號 為必填",
            "emperor_life.required" => "皇帝壽命 為必填",
            "emperor_start_year.required" => "皇帝起始年 為必填",
            "emperor_end_year.required" => "皇帝結束年 為必填",
        ];
    }
}