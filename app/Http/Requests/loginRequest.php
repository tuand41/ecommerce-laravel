<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'email'=>'email|required|email',
            'password' => 'required|min:5|max:15',            
        ];
    }

    public function messages()
    {
        # code...
        return [            
            'email.required' => 'Bạn phải nhập Email.',
            'email.email' => 'Email không đúng định dạng.',
            'password.required' => 'Bạn phải nhập Mật khẩu.',
            'password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự.',
            'password.max'=>'mật khẩu ko quá 15 ký tự.',
        ]; 
    }
}
