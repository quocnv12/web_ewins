<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|min:5',
            'email'=>'required|email',
            'password'=>'required|min:5|confirmed',
            
            'phone'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tài khoản !',
            'name.min'=>'Tài khoản không được nhỏ hơn 5 kí tự !',
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Email không đúng định dạng !',
            'password.required'=>'Bạn chưa nhập mật khẩu !',
            'password.min'=>'Mật khẩu không được nhỏ hơn 5 kí tự !',
            'password.confirmed'=>'Mật khẩu chưa trùng nhau !',
            'reset.required'=>'Bạn chưa nhập lại mật khẩu !',
            'password_confirmation'=>'Nhập lại mật khẩu !',
            'phone.numeric'=>'Số điện thoại phải là kiểu số !',
            'phone.required'=>'Điện thoại không được để trống !',
        
        ];
    }
}
