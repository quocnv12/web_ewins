<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\{news,elearning,subelearning,service,cate_service};

use DB;

class ServiceController extends Controller
{
    // Chuyển trang danh sách dịch vụ
    public function list()
    {
        $array['service']=DB::table('service')
                        ->join('cate_service','cate_service.id','=','service.cate_id')
                        ->select('service.*','cate_service.name as cate_name')
                        ->get();
        return view('admins.page.service.list',$array);
    }

    // Chuyển trang thêm dịch vụ
    public function add()
    {
        $array['cate_service']=DB::table('cate_service')->get();
        return view('admins.page.service.add',$array);
    }

    // Thêm dịch vụ
    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'content' => 'required',
                'cate_id' => 'required',
            ],
            [
                'name.required' => 'Tên dịch vụ là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
                'cate_id.required' => 'Loại dịch vụ là trường bắt buộc'
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;

            $file->move('assets/img_service/',$name_file);
        }
        DB::table('service')->insert([
            'name' => $request->name,
            'image' => $name_file,
            'content' => $request->content,
            'cate_id' => $request->cate_id,
            'slug' => str_slug($request->name),
            'status' => $request->status,
        ]);

        return redirect()->route('service.list');
    }

    public function edit($id)
    {
        $array['service']=DB::table('service')->find($id);
        $cate_service['cate_service']=DB::table('cate_service')->get();
        return view('admins.page.service.edit',$array,$cate_service);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'content' => 'required',
                'cate_id' => 'required',
            ],
            [
                'name.required' => 'Tên dịch vụ là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
                'cate_id.required' => 'Loại dịch vụ là trường bắt buộc'
            ]
        );

        $img_old=DB::table('service')->find($id)->image;

        if(!empty($_FILES['image']['name'])){
                $file = $_FILES['image'];
                $name_file = time().'-'.$file['name'];
            if(file_exists('assets/img_service/'.$img_old)&&($img_old !='')){
                unlink('assets/img_service/'.$img_old);
            }
            move_uploaded_file($file['tmp_name'], 'assets/img_service/'.$name_file);
        }
        else{
            $name_file=$img_old;
        }

        if(empty($request->status)){
            $status=0;
        }
        else{
            $status=1;
        }

        DB::table('service')->where('id',$id)->update([
            'name' => $request->name,
            'image' => $name_file,
            'content' => $request->content,
            'cate_id' => $request->cate_id,
            'slug' => str_slug($request->name),
            'status' => 0,
        ]);

        return redirect()->route('service.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('service')->find($id)->image;
        if(file_exists('assets/img_service/'.$img_old)&&($img_old !='')){
            unlink('assets/img_service/'.$img_old);
        }
        DB::table('service')->where('id',$id)->delete();
        return redirect()->route('service.list');
    }
    public function show($slug)
    {
        $array['service_detail']=DB::table('service')
                        ->select('service.*')
                        ->where('service.slug',$slug)
                        ->first();
        $array['service']=DB::table('service')
        ->join('cate_service','cate_service.id','=','service.cate_id')
        ->select('service.*')
        ->where('cate_service.slug',$slug)->first();
        // $array['talentwins']=talentwins::all();
        // $array['cate_new']=cate_new::all();
        // $array['infocompany']=inforcompany::all();
        // $array['product']=product::all();
        // $array['cate_service']=cate_service::all();
        $array['news']=news::all();
        // dd($array);
        return view('pages.dichvuchitiet',$array);
    }
}
