<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function GetLogin()
    {
        return view('login.login');
    }

    public function PostLogin(LoginRequest $request)
    {
        $name=$request->name;
        $password=$request->password;
        if( Auth::attempt(['name' => $name, 'password' => $password]))
                {
                    return redirect('admin');
                }
            else
                {
                    return  redirect()->back()->with("thongbao","Tài khoản hoặc mật khẩu không chính xác !")->withInput();
                }
    }

    public function GetLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    


}
