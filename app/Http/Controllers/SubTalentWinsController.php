<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\{inforcompany,product,elearning,subelearning,cate_new,talentwins,service,support,cate_service};

use DB;

class SubTalentWinsController extends Controller
{
    // Chuyển trang danh sách dịch vụ
    public function list()
    {
        $array['sub_talentwins']=DB::table('sub_talentwins')
                        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
                        ->select('sub_talentwins.*','talent_wins.title as cate_name')
                        ->get();
        return view('admins.page.sub_talentwins.list',$array);
    }

    // Chuyển trang thêm dịch vụ
    public function add()
    {
        $array['talentwins']=DB::table('talent_wins')->get();
        return view('admins.page.sub_talentwins.add',$array);
    }

    // Thêm dịch vụ
    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'summary' => 'required',
                'status' => 'required',
                'content' => 'required',
                'cate_id' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
                'summary.required' => 'Nội dung tóm tắt là trường bắt buộc',
                'status.required' => 'Trạng thái là trường bắt buộc',
                'cate_id.required' => 'Loại tin là trường bắt buộc'
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;

            $file->move('assets/img_talentwins/',$name_file);
        }
        DB::table('sub_talentwins')->insert([
            'title' => $request->title,
            'image' => $name_file,
            'content' => $request->content,
            'summary' => $request->summary,
            'cate_id' => $request->cate_id,
            'slug' => str_slug($request->title),
            'status' => $request->status,
            'id_admin' => 1,
        ]);

        return redirect()->route('sub_talentwins.list');
    }

    public function edit($id)
    {
        $array['sub_talentwins']=DB::table('sub_talentwins')->find($id);
        $array['talentwins']=DB::table('talent_wins')->get();
        return view('admins.page.sub_talentwins.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'title' => 'required',
            'summary' => 'required',
            'status' => 'required',
            'content' => 'required',
            'cate_id' => 'required',
        ],
        [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'content.required' => 'Nội dung là trường bắt buộc',
            'summary.required' => 'Nội dung tóm tắt là trường bắt buộc',
            'status.required' => 'Trạng thái là trường bắt buộc',
            'cate_id.required' => 'Loại tin là trường bắt buộc'
        ]
        );

        $img_old=DB::table('sub_talentwins')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_talentwins/'.$img_old)&&($img_old !='')){
                unlink('assets/img_talentwins/'.$img_old);
            }
            $file->move('assets/img_talentwins/',$name);
        }
        else{
            $name=$img_old;
        }


        DB::table('sub_talentwins')->where('id',$id)->update([
            'title' => $request->title,
            'image' => $name,
            'content' => $request->content,
            'summary' => $request->summary,
            'cate_id' => $request->cate_id,
            'slug' => str_slug($request->title),
            'status' => $request->status,
            'id_admin' => 1,
        ]);

        return redirect()->route('sub_talentwins.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('sub_talentwins')->find($id)->image;
        if(file_exists('assets/img_talentwins/'.$img_old)&&($img_old !='')){
            unlink('assets/img_talentwins/'.$img_old);
        }
        DB::table('sub_talentwins')->where('id',$id)->delete();
        return redirect()->route('sub_talentwins.list');
    }

}
