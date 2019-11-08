<?php

namespace App\Http\Controllers\frontend;
use App\models\{inforcompany,product,cate_new};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function list()
    {
        $array['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.lienhe',$data);
    }
}
