<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{inforcompany,product,elearning,cate_service,cateprizenew,subelearning,cate_new,talentwins,service,support,introduce,prize,cateprize};

use DB;

class HomeController extends Controller

{
    public function home()
    {
        
        return view('admins.dashboard');
    }



    public function index()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['banner']=DB::table('banner')
                        ->select('banner.*')
                        ->where('status','=',1)
                        ->get();
        $array['talentwins']=DB::table('talent_wins')
                        ->select('talent_wins.*')
                        ->get();
        $array['cate_service']=DB::table('cate_service')
                        ->select('cate_service.*')
                        ->get();
        $array['subelearnings']=DB::table('sub_e_learning')
                        ->select('sub_e_learning.*')
                        ->get();
        $array['elearnings']=DB::table('e_learning')
                        ->select('e_learning.*')
                        ->where('status','=',1)
                        ->get();
        $array['infocompany']=DB::table('infor_company')
                        ->select('infor_company.*')
                        ->get();
        $array['product']=DB::table('product')->paginate(9);
        $array['new1']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['new2']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(3)
                        ->take(3)
                        ->get();
         $array['new3']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(6)
                        ->take(3)
                        ->get();
        $array['new4']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->where('new.status','=',1)
                        ->skip(9)
                        ->take(3)
                        ->get();
                       
                        $array['talentwins']=talentwins::all();
                        $array['elearning']=elearning::all();
                        $array['subelearnings']=subelearning::all();
                        $array['service']=service::all();
                        $array['introduce']=introduce::all();       
        return view('pages.home',$array);
    }
    public function menu()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        return view('master-layout',$array);
    }



    public function list()
    {
        
        $data['service']=service::all();
        
        return view('pages.lienhe',$data);
    }


    public function talenwin()
    {
       
        $data['service']=service::all();
        
        return view('pages.talentwins',$data);
    }



    public function trainghiem()
    {
       
        $data['service']=service::all();
       
        return view('pages.traiNghiem',$data);
    }

    public function about()
    {
        $data['cateprizenew']=cateprizenew::all();
        $data['prize']=prize::all();
        $data['cateprize']=cateprize::all();
        $data['introduce']=introduce::all();        
        return view('pages.gioithieu',$data);
    }

    public function news()
    {
        
        $data['service']=service::all();
        
        return view('pages.tinTuc',$data);
    }


    public function service()
    {
       
        $data['service']=service::all();
       
       
        return view('pages.dichvu',$data);
    }


    public function newchitiet()
    {
        
        $data['service']=service::all();
       
        return view('pages.tintucchitiet',$data);
    }

    public function talenchitiet()
    {
        
        $data['service']=service::all();
       
        return view('pages.talentchitiet',$data);
    }

    public function product()
    {
       
        $service=service::all();
        $product=DB::table('product')->paginate(9);
        return view('pages.traiNghiem',compact('product','service'));
    }



}
