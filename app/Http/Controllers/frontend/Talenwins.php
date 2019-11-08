<?php

namespace App\Http\Controllers\frontend;
use App\models\{inforcompany,product,cate_new};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Talenwins extends Controller
{
    public function talenwin()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.talentwins',$data);
    }



    public function trainghiem()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.traiNghiem',$data);
    }

    public function about()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.gioithieu',$data);
    }

    public function news()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tinTuc',$data);
    }


    public function service()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.dichvu',$data);
    }


    public function newchitiet()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tintucchitiet',$data);
    }

    public function new()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tinTuc',$data);
    }

    public function talenchitiet()
    {
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.talentchitiet',$data);
    }

}
