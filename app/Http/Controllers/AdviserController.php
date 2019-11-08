<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdviserController extends Controller
{
    // danh sách cố vấn
    public function list(){
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->get();
        return view('admins.page.adviser.list',$array);
    }

    // chuyển trang thêm cố vấn
    public function add()
    {
        return view('admins.page.adviser.add');
    }

    // Thêm cố vấn
    public function insert(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'image' => 'required|image',
                'position' => 'required',
                'information' => 'required'
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'image.required' => 'Ảnh là trường bắt buộc',
                'image.image' => 'Bắt buộc phải là ảnh',
                'position.required' => ' Chức vụ là trường bắt buộc',
                'information.integer' => ' Thông tin là trường bắt buộc'
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
    
            $file->move('assets/img_adviser/',$name);
        }

        DB::table('adviser')->insert([
            'name' => $request->name,
            'image' => $name,
            'position' => $request->position,
            'information' => $request->information
        ]);
        return redirect()->route('adviser.list');
    }

    // xóa cố vấn
    public function delete($id)
    {
        $img_old=DB::table('adviser')->find($id)->image;
        if(file_exists('assets/img_adviser/'.$img_old)&&($img_old !='')){
            unlink('assets/img_adviser/'.$img_old);
        }
        DB::table('adviser')->where('id',$id)->delete();
        return redirect()->route('adviser.list');
    }

    public function edit($id)
    {
        $array['adviser']=DB::table('adviser')->find($id);
        return view('admins.page.adviser.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'position' => 'required',
            'information' => 'required'
        ],
        [
            'name.required' => 'Tên đề là trường bắt buộc',
            'position.required' => ' Chức vụ là trường bắt buộc',
            'information.integer' => ' Thông tin là trường bắt buộc'
        ]
        );
        
        $img_old=DB::table('adviser')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_adviser/'.$img_old)&&($img_old !='')){
                unlink('assets/img_adviser/'.$img_old);
            }
            $file->move('assets/img_adviser/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('adviser')->where('id',$id)->update([
            'name' => $request->name,
            'image' => $name,
            'position' => $request->position,
            'information' => $request->information
        ]);

        return redirect()->route('adviser.list');
    }
}
