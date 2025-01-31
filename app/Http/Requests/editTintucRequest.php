<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editTintucRequest extends FormRequest
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
            'img' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'img.image' => 'hình ảnh ko hợp lệ'
        ];
    }
}
