<?php

namespace App\Http\Controllers\frontend;
use App\models\{adviser,banner,elearning,subelearning,inforcompany,product,cate_new};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $data['adviser']=adviser::all();
        $data['banner']=banner::all();
        $data['elearning']=elearning::all();
        $data['subelearnings']=subelearning::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        $data['cate_new']=cate_new::all();
         return view('pages.home',$data);
    }
}
