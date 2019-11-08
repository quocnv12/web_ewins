<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BannerController extends Controller
{
    public function list()
    {
        $array['banner']=DB::table('banner')
                        ->select('banner.*')
                        ->get();
        return view('admins.page.banner.list',$array);
    }

    public function add()
    {
        return view('admins.page.banner.add');
    }

    public function insert(Request $request)
    {
        $this->validate($request,
        [
            'image' => 'required',
            'title' => 'required',
            'link' => 'required',
            'status' => 'required',
            'content' => 'required',
        ],
        [
            'image.required' => 'Ảnh là trường bắt buộc',
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'link.required' => 'Link là trường bắt buộc',
            'status.required' => 'Trạng thái là trường bắt buộc',
            'content.required' => 'Nội dung là trường bắt buộc',

        ]);
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;
            $file->move('assets/img_banner/',$name_file);
        }
        DB::table('banner')->insert([
            'image' => $name_file,
            'title' => $request->title,
            'link' => $request->link,
            'status' => $request->status,
            'content' => $request->content,
        ]);

        return redirect()->route('banner.list')->with('thongbao','Thêm banner thành công');
    }

    public function edit($id)
    {
        $array['banner']=DB::table('banner')->find($id);
        return view('admins.page.banner.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $img_old=DB::table('banner')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;
            if(file_exists('assets/img_banner/'.$img_old)&&($img_old !='')){
                unlink('assets/img_banner/'.$img_old);
            }
            $file->move('assets/img_banner/',$name_file);
        }
        else{
            $name_file=$img_old;
        }


        DB::table('banner')->where('id',$id)->update([
            'image' => $name_file,
            'title' => $request->title,
            'link' => $request->link,
            'status' => $request->status,
            'content' => $request->content,
        ]);

        return redirect()->route('banner.list')->with('thongbao','Sửa banner thành công');
    }

    public function delete($id)
    {
        $img_old=DB::table('banner')->find($id)->image;
        if(file_exists('assets/img_banner/'.$img_old)&&($img_old !='')){
            unlink('assets/img_banner/'.$img_old);
        }
        DB::table('banner')->where('id',$id)->delete();
        return redirect()->route('banner.list');
    }
}
