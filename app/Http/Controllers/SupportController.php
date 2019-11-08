<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SupportController extends Controller
{
    public function list()
    {
        $array['support']=DB::table('support')->get();
        return view('admins.page.support.list',$array);
    }

    public function add()
    {
        return view('admins.page.support.add');
    }

    public function store(Request $request)
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
        DB::table('support')->insert([
            'title' =>$request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'slug' => str_slug($request->title),
            'status' => 0,
        ]);

        return redirect()->route('support.list');
    }

    public function edit($id)
    {
        $array['support']=DB::table('support')->find($id);
        return view('admins.page.support.edit',$array);
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

        DB::table('support')->where('id',$id)->update([
            'title' =>$request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'slug' => str_slug($request->title),
            'status' => 0,
        ]);

        return redirect()->route('support.list');
    }

    public function delete($id)
    {
        DB::table('support')->where('id',$id)->delete();
        return redirect()->route('support.list');
    }
}
