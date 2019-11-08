<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ContactController extends Controller
{
    // danh sách liên hệ
    public function list(){


        
        $array['contact']=DB::table('contact')
                        ->select('contact.*')
                        ->get();
        return view('admins.page.contact.list',$array);
    }

    // Chuyển trang liên hệ
    public function add(Request $request){
        return view('pages.lienhe');
    }

    // Tạo liên hệ
    public function insert(Request $request){
        
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:10|max:10,integer',
                'name_city' => 'required',
                'address_city' => 'required',
                'content' => 'required'
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email phải đúng định dạng',
                'phone.required' => ' Số điện thoại là trường bắt buộc',
                'phone.integer' => ' Số điện thoại phải là số nguyên',
                'phone.min:10' => ' Số điện thoại phải gồm 10 số',
                'name_city.required' => 'Tên công ty là trường bắt buộc',
                'address_city.required' => 'Địa chỉ công ty là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
            ]
        );
        DB::table('contact')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'name_city' => $request->name_city,
            'address_city' => $request->address_city,
            'content' => $request->content,
            'status' => 0
        ]);
        return redirect()->route('lienhe');
    }

    // Xóa liên hệ
    public function delete($id)
    {
        DB::table('contact')->where('id',$id)->delete();
        return redirect()->route('contact.list');
    }

    // Sửa liên hệ thành đã xem
    public function see(Request $request,$id,$status){
        DB::table('contact')->where('id',$id)->update([
            'status' => $status
        ]);

        return redirect()->route('contact.list');
    }

    // Sửa liên hệ thành đã phản hồi
    public function feedback(Requset $request,$id,$status){
        DB::table('contact')->where('id',$id)->update([
            'status' => 2
        ]);

        return redirect()->route('contact.list');
    }
}
