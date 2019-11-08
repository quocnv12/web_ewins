<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\models\{inforcompany,product,elearning,subelearning,cate_new,talentwins,service,support,cate_service,sub_talentwins};

class TalentWinsController extends Controller
{
    public function list()
    {
        $array['talent_wins']=DB::table('talent_wins')->get();
        return view('admins.page.talent_wins.list',$array);
    }

    public function add()
    {
        return view('admins.page.talent_wins.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
            ]
        );
        DB::table('talent_wins')->insert([
            'title' =>$request->title,
            'slug' => str_slug($request->title),
        ]);

        return redirect()->route('talent_wins.list');
    }

    public function edit($id)
    {
        $array['talent_wins']=DB::table('talent_wins')->find($id);
        return view('admins.page.talent_wins.edit',$array);
    }

    public function update(Request $request,$id)
    {
        if(empty($request->status)){
            $status=0;
        }
        else{
            $status=1;
        }

        $this->validate($request,
        [
            'title' => 'required|min:5',
        ],
        [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
        ]
    );

        DB::table('talent_wins')->where('id',$id)->update([
            'title' =>$request->title,
            'slug' => str_slug($request->title),
        ]);

        return redirect()->route('talent_wins.list');
    }

    public function delete($id)
    {
        DB::table('talent_wins')->where('id',$id)->delete();
        return redirect()->route('talent_wins.list');
    }

    public function show($slug)
    {
        $array['support']=support::all();
        $array['service']=service::all();
        $array['cate_new']=cate_new::all();
        $array['infocompany']=inforcompany::all();
        $array['product']=product::all();
        $array['cate_service']=cate_service::all();
        $array['talentwins']=talentwins::all();
        $array['technology']=DB::table('sub_talentwins')
        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
        ->join('admin','admin.id','=','sub_talentwins.id_admin')
        ->select('sub_talentwins.*','admin.name as name')
        ->where('talent_wins.title','Talent Wins Technology')
        ->where('sub_talentwins.status',1)
        ->get();
        $array['solution']=DB::table('sub_talentwins')
        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
        ->join('admin','admin.id','=','sub_talentwins.id_admin')
        ->select('sub_talentwins.*','admin.name as name')
        ->where('talent_wins.title','Talent Wins Solution')
        ->where('sub_talentwins.status',1)
        ->get();
        $array['academy']=DB::table('sub_talentwins')
        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
        ->join('admin','admin.id','=','sub_talentwins.id_admin')
        ->select('sub_talentwins.*','admin.name as name')
        ->where('talent_wins.title','Talent Wins Academy')
        ->where('sub_talentwins.status',1)
        ->get();
        return view('pages.talentwins',$array);
    }

    public function detail($slug)
    {
        $array['support']=support::all();
        $array['service']=service::all();
        $array['cate_new']=cate_new::all();
        $array['infocompany']=inforcompany::all();
        $array['product']=product::all();
        $array['cate_service']=cate_service::all();
        $array['talentwins']=talentwins::all();
        $array['sub_talentwins']=sub_talentwins::all();
        $array['talentwins_detail']=DB::table('sub_talentwins')->where('slug',$slug)->first();
        $array['technology']=DB::table('sub_talentwins')
        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
        ->join('admin','admin.id','=','sub_talentwins.id_admin')
        ->select('sub_talentwins.*','admin.name as name')
        ->where('talent_wins.slug',$slug)
        ->get();
        $array['solution']=DB::table('sub_talentwins')
        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
        ->join('admin','admin.id','=','sub_talentwins.id_admin')
        ->select('sub_talentwins.*','admin.name as name')
        ->where('talent_wins.slug',$slug)
        ->get();
        $array['academy']=DB::table('sub_talentwins')
        ->join('talent_wins','talent_wins.id','=','sub_talentwins.cate_id')
        ->join('admin','admin.id','=','sub_talentwins.id_admin')
        ->select('sub_talentwins.*','admin.name as name')
        ->where('talent_wins.slug',$slug)
        ->get();
        return view('pages.talentchitiet',$array);
    }
}
