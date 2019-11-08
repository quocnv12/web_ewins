<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\{inforcompany,product,elearning,subelearning,cate_new,talentwins,service,support,cate_service};

use DB;

class Cate_serviceController extends Controller
{
    // Chuyển trang danh sách loại dịch vụ
    public function list()
    {
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        return view('admins.page.cate_service.list',$array);
    }
    // Chuyển đến trang thêm loại dịch vụ
    public function add()
    {
        $array['cate_service']=DB::table('cate_service')->get();
        return view('admins.page.cate_service.add',$array);
    }
    // Thêm loại dịch vụ
    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'title.required' => 'Tên loại dịch vụ là trường bắt buộc'
            ]
        );

        DB::table('cate_service')->insert([
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('cate_service.list');
    }

    // chuyển trang sửa loại dịch vụ
    public function edit($id)
    {
        $array['cate_service']=DB::table('cate_service')->find($id);
        return view('admins.page.cate_service.edit',$array);
    }

    // Sửa loại dịch vụ
    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ],
            [
                'title.required' => 'Tên loại dịch vụ là trường bắt buộc'
            ]
        );

        DB::table('cate_service')->where('id',$id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('cate_service.list');
    }

    public function delete($id)
    {
        DB::table('cate_service')->where('id',$id)->delete();
        return redirect()->route('cate_service.list');
    }

    public function show($slug)
    {
        $array['service']=DB::table('service')
                            ->join('cate_service','cate_service.id','=','service.cate_id')
                            ->select('service.*','cate_service.slug as cate_slug')
                            ->where('cate_service.slug',$slug)
                            ->get();
        $array['talentwins']=talentwins::all();
        $array['cate_new']=cate_new::all();
        $array['cate_service']=cate_service::all();
        $array['infocompany']=inforcompany::all();
        $array['product']=product::all();
        $array['support']=support::all();
        return view('pages.dichvu',$array);
    }
}
