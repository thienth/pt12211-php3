<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCategoryRequest extends FormRequest
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
            "name" => "required|min:6"
        ];
    }

    public function messages(){
        return [
            "name.required" => "Anh chuỵ làm ơn điền dữ liệu vào đây",
            "name.min" => "Tên danh mục của anh chuỵ phải có ít nhất 6 ký tự"
        ];
    }
}
