<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDanhmucRequest extends FormRequest
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
            'name'=>'unique:danhmucsp,ten_danhmuc,'.$this->segment(4).',id_danhmuc'
        ];
    }

    public function messages()
    {
        # code...
        return [
            'name.unique'=>'Tên danh mục bị trùng'
        ]; 
    }
}
