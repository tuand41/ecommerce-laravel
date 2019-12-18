<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dangkiRequest extends FormRequest
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
            'emaildk'=>'unique:vp_users,email|required|email',
            'passwordk' => 'required|same:repasswordk|min:5|max:15',
            'repasswordk'=>'required|same:passwordk|min:5|max:15',
            'name'=> 'required|min:3|max:25',
        ];
    }

    public function messages()
    {
        # code...
        return [
            'emaildk.unique'=>'Tên email đã có người sử dụng.',
            'emaildk.required' => 'Email là trường bắt buộc.',
            'emaildk.email' => 'Email không đúng định dạng.',
            'passwordk.required' => 'Mật khẩu là trường bắt buộc.',
            'passwordk.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự.',
            'passwordk.max'=>'mật khẩu ko quá 15 ký tự.',
            'passwordk.same'=>'Mật khẩu không giống nhau',
            'repasswordk.same'=>'Mật khẩu không giống nhau',
            'name.required'=>'Họ tên là trường bắt buộc.',
            'name.min' => 'Họ tên phải chứa ít nhất 3 ký tự.',
            'name.max'=>'Họ tên ko quá 25 ký tự.',
        ]; 
    }
}
