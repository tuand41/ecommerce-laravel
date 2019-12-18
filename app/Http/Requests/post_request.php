<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class post_request extends FormRequest
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
            'img' => 'image',
            'name'=>'required|min:20'
        ];
    }

    public function messages()
    {
        return [
            'img.image' => 'hình ảnh ko hợp lệ',
            'img.required' => 'Bạn phải thêm hình ảnh',
            'name.required'=> 'Bạn phải nhập tiêu đê',
            'name.min'=> 'Tên phải tối thiểu 20 từ',
        ];
    }
}
