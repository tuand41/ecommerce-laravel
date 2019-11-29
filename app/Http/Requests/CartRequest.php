<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'name' => 'min:5|max:40',
            
            'address' => 'min:5|max:40',
            'ghichu' => 'max:40'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Họ và tên phải trên 5 từ',
            'name.max' => 'Họ và tên phải dưới 40 từ',
            'sdt.numeric' => 'Định dạng điện thoại ko đúng',                      
            'address.min' => 'Địa chỉ phải trên 5 từ ',
            'address.max' => 'Địa chỉ phải trên 40 từ ',
            'ghichu.max' => 'Ghi chú ko quá 40 từ'
        ];
    }
}
