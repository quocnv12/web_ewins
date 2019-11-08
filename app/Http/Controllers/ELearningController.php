<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ELearningController extends Controller
{
    public function list()
    {
        $array['e_learning']=DB::table('e_learning')->get();
        return view('admins.page.e_learning.list',$array);
    }

    public function add()
    {
        return view('admins.page.e_learning.add');
    }

    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'icon' => 'required',
                'status' =>'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'status.required' => 'Trạng thái là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'icon.required' => 'Ảnh là trường bắt buộc',
            ]
        );

        if ($request->hasFile('icon')) {
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;

            $file->move('assets/img_e_learning/',$name_file);
        }
        DB::table('e_learning')->insert([
            'title' => $request->title,
            'icon' => $name_file,
            'status' => $request->status,
        ]);

        return redirect()->route('e_learning.list');
    }

    public function edit($id)
    {
        $array['e_learning']=DB::table('e_learning')->find($id);
        return view('admins.page.e_learning.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'title' => 'required',
            'status' => 'required',
        ],
        [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'status.required' => 'Trạng thái là trường bắt buộc',
        ]
        );
        $img_old=DB::table('e_learning')->find($id)->icon;

        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;
            if(file_exists('assets/img_e_learning/'.$img_old)&&($img_old !='')){
                unlink('assets/img_e_learning/'.$img_old);
            }
            $file->move('assets/img_e_learning/',$name_file);
        }
        else{
            $name_file=$img_old;
        }

        DB::table('e_learning')->where('id',$id)->update([
            'title' => $request->title,
            'icon' => $name_file,
            'status' => $request->status,
        ]);

        return redirect()->route('e_learning.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('e_learning')->find($id)->icon;
        if(file_exists('assets/img_e_learning/'.$img_old)&&($img_old !='')){
            unlink('assets/img_e_learning/'.$img_old);
        }
        DB::table('e_learning')->where('id',$id)->delete();
        return redirect()->route('e_learning.list');
    }

   
}
