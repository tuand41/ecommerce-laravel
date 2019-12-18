<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'email'=>'unique:vp_users,email,'.$this->segment(4).',id',
            'password' => 'same:repassword|min:5|max:15',
            'repassword'=>'same:password|min:5|max:15',
            'name'=> 'required|min:3|max:25',
        ];
    }
    public function messages()
    {
        # code...
        return [
            'emaild.unique'=>'Tên email đã có người sử dụng.',
            'emaild.required' => 'Email là trường bắt buộc.',
            'emaild.email' => 'Email không đúng định dạng.',
            'password.required' => 'Mật khẩu là trường bắt buộc.',
            'password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự.',
            'password.max'=>'mật khẩu ko quá 15 ký tự.',
            'password.same' => 'Mật khẩu không giống nhau',
            'repassword.same'=>'Mật khẩu không giống nhau',
            'repassword.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự.',
            'repassword.max'=>'mật khẩu ko quá 15 ký tự.',
            'name.required'=>'Họ tên là trường bắt buộc.',
            'name.min' => 'Họ tên phải chứa ít nhất 3 ký tự.',
            'name.max'=>'Họ tên ko quá 25 ký tự.',
        ];
    }
}
