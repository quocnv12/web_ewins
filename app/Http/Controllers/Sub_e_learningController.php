<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class Sub_e_learningController extends Controller
{
    public function list()
    {
        $array['sub_e_learning']=DB::table('sub_e_learning')
                                ->join('e_learning','e_learning.id','=','sub_e_learning.cate_id')
                                ->select('sub_e_learning.*','e_learning.title as cate_name')
                                ->get();
        return view('admins.page.sub_e_learning.list',$array);
    }

    public function add()
    {
        $array['e_learning']=DB::table('e_learning')
                                ->select('e_learning.*')
                                ->get();
        return view('admins.page.sub_e_learning.add',$array);
    }

    public function insert(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:5',
            ],
            [
                'name.required' => 'Tên danh mục là trường bắt buộc',
                'name.min' => 'Tên danh mục có ít nhất 5 ký tự',
            ]
        );
        DB::table('sub_e_learning')->insert([
            'name' =>$request->name,
            'cate_id' => $request->cate_id,
        ]);

        return redirect()->route('sub_e_learning.list');
    }

    public function edit($id)
    {
        $array['e_learning']=DB::table('e_learning')
                                ->select('e_learning.*')
                                ->get();
        $array['sub_e_learning']=DB::table('sub_e_learning')->find($id);
        return view('admins.page.sub_e_learning.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
        [
            'name' => 'required|min:5',
        ],
        [
            'name.required' => 'Tên danh mục là trường bắt buộc',
            'name.min' => 'Tên danh mục có ít nhất 5 ký tự',
        ]
    );

        DB::table('sub_e_learning')->where('id',$id)->update([
            'name' =>$request->name,
            'cate_id' => $request->cate_id,
        ]);

        return redirect()->route('sub_e_learning.list');
    }

    public function delete($id)
    {
        DB::table('sub_e_learning')->where('id',$id)->delete();
        return redirect()->route('sub_e_learning.list');
    }
}
