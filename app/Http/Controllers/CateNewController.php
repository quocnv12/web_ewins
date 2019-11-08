<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class CateNewController extends Controller
{
    public function list()
    { 
        $array['cate_new']=DB::table('cate_new')->get();
        return view('admins.page.new.cate_new',$array);
    }

    public function add()
    {
        return view('admins.page.new.cate_new');
    }

    public function insert(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:3',
        ],
        [
            'name.required' => 'Tên là trường bắt buộc',
            'name.min' => 'Ít nhất 3 ký tự',
        ]
        );

        DB::table('cate_new')->insert([
            'name' =>$request->name,
        ]);
        return redirect()->route('cate_new.list');
    }

    public function edit(Request $request)
    {
        $id=$request->id;
        // dd($id);
        $edit_cate=DB::table('cate_new')->find($id);
        return $edit_cate->name;
    }

    public function update(Request $request)
    {   
        $this->validate($request,
        [
            'name' => 'required|min:3',
        ],
        [
            'name.required' => 'Tên là trường bắt buộc',
            'name.min' => 'Ít nhất 3 ký tự',
        ]
        );
        DB::table('cate_new')->where('id',$request->cate_id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route('cate_new.list');
    }

    public function delete($id)
    {
        DB::table('cate_new')->where('id',$id)->delete();
        return redirect()->route('cate_new.list');
    }
}
