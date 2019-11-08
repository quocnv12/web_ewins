<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\admin;
use App\Http\Requests\RegisterRequest;
use App\models\role;

class ExamplesController extends Controller
{

    //thông tin acconut
    public function GetProfile()
    
    {
        // $data['admins']=admin::get();
        $data['role']=role::get();
        return view('pages.examples.profile',$data);
    }

    


    // hiển thị danh sách thành viên
    public function GetList()
    {
        $data['admins']=admin::paginate(4);
        $data['role']=role::get();
        return view('pages.examples.listuser',$data);
    }
    

    //thêm thành viên
    public function GetRegister()
    {
        return view('pages.examples.register');
    }


    public function PostRegister(RegisterRequest $request)
    {
        $admin=new admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request->password);
        $admin->phone=$request->phone;
        $admin->level=$request->level;
        $admin->save();
        return redirect('admin/list')->with('thongbao','Đã thêm thành viên thành công');
    }



    //xóa thành viên
    public function DelUser($id)
    {
      admin::destroy($id);
      return redirect('admin/list')->with('thongbao','Xóa thành công');
    }


}
