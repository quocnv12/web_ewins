<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\{news,cate_new};
use DB;

class NewController extends Controller
{
    public function list()
    {
        
        $array['new']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->join('cate_new','cate_new.id','=','cate_new.id')
                        ->select('new.*','admin.name as name','cate_new.name as cate_name')
                        ->get();
        return view('admins.page.new.list',$array);
    }

    public function add()
    {
        $data['catenew']=cate_new::all();
        // dd($data);
        return view('admins.page.new.add',$data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'summary' => 'required|min:10',
                'content' => 'required|min:20',
                'image' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
                'image.required' => 'Ảnh là trường bắt buộc',
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('assets/img_new/',$name);
        }
      
        DB::table('new')->insert([
         
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'image' => $name,
            'slug' => str_slug($request->title),
            'status' => $request->stauts,
            'id_admin' => $request->namehdd ,
            'cate_new'=>$request->name
            
            
        ]);

        return redirect()->route('new.list');
    }

    public function edit($id)
    {
        $array['new']=DB::table('new')->find($id);
        return view('admins.page.new.edit',$array);
    }

    public function detail($slug)
    {
        $array['new_detail']=DB::table('new')->where('slug',$slug)->first();
        $array['new']=DB::table('new')
                        ->select('new.*')
                        ->take(5)
                        ->get();
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        $array['talentwins']=DB::table('talent_wins')
                        ->select('talent_wins.*')
                        ->get();
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['infocompany']=DB::table('infor_company')
                        ->select('infor_company.*')
                        ->get();
        $array['product']=DB::table('product')
                        ->select('product.*')
                        ->get();
        return view('pages.tintucchitiet',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'summary' => 'required|min:10',
                'content' => 'required|min:20',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );
        $img_old=DB::table('new')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_new/'.$img_old)&&($img_old !='')){
                unlink('assets/img_new/'.$img_old);
            }
            $file->move('assets/img_new/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('new')->where('id',$id)->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'image' => $name,
            'slug' => str_slug($request->title),
            'id_admin' => 1,
            'status' => $request->status,
        ]);

        return redirect()->route('new.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('new')->find($id)->image;
        if(file_exists('assets/img_new/'.$img_old)&&($img_old !='')){
            unlink('assets/img_new/'.$img_old);
        }
        DB::table('new')->where('id',$id)->delete();
        return redirect()->route('new.list');
    }
    
    public function show()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['nhansu']=DB::table('new')
                        ->join('cate_new','cate_new.id','=','new.cate_new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','cate_new.name as cate_name','admin.name as ad_name')
                        ->where('new.cate_new',1)
                        ->where('new.status','=',1)
                        ->get();
        $array['phattrien']=DB::table('new')
                        ->join('cate_new','cate_new.id','=','new.cate_new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','cate_new.name as cate_name','admin.name as ad_name')
                        ->where('new.cate_new',2)
                        ->where('new.status','=',1)
                        ->get();
        $array['doanhnghiep']=DB::table('new')
                        ->join('cate_new','cate_new.id','=','new.cate_new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','cate_new.name as cate_name','admin.name as ad_name')
                        ->where('new.cate_new',3)
                        ->where('new.status','=',1)
                        ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        $array['infocompany']=DB::table('infor_company')
                        ->select('infor_company.*')
                        ->get();
        $array['product']=DB::table('product')
                        ->select('product.*')
                        ->get();
        $array['talentwins']=DB::table('talent_wins')
                        ->select('talent_wins.*')
                        ->get();
        $array['support']=DB::table('support')
                        ->select('support.*')
                        ->get();
        return view('pages.tinTuc',$array);
    }
}
