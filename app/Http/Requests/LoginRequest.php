<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'password'=>'required|min:5'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tài khoản !',
            'name.min'=>'Tài khoản không được nhỏ hơn 5 kí tự !',
            'password.required'=>'Bạn chưa nhập mật khẩu !',
            'password.min'=>'Mật khẩu không được nhỏ hơn 5 kí tự !'
        ];
    }
}
