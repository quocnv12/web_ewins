<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function list()
    {
      
        $array['product']=DB::table('product')
                        ->select('product.*')
                        ->get();
        return view('admins.page.product.list',$array);
    }

    public function add()
    {
        return view('admins.page.product.add');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $this->validate($request,
            [
                'name' => 'required|min:5',
                'link' => 'required|min:10',
                'image' => 'required',
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'link.required' => 'Link là trường bắt buộc',
                'image.required' => 'Ảnh là trường bắt buộc',
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('assets/img_product/',$name);
        }
      
        DB::table('product')->insert([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $name,
        ]);

        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $array['product']=DB::table('product')->find($id);
        return view('admins.page.product.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required|min:5',
                'link' => 'required|min:10',
                'image' => 'required',
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'link.required' => 'Link là trường bắt buộc',
                'image.required' => 'Ảnh là trường bắt buộc',
            ]
        );
        $img_old=DB::table('product')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_product/'.$img_old)&&($img_old !='')){
                unlink('assets/img_product/'.$img_old);
            }
            $file->move('assets/img_product/',$name);
        }
        else{
            $name=$img_old;
        }


        DB::table('product')->where('id',$id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $name,
        ]);

        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('product')->find($id)->image;
        if(file_exists('assets/img_product/'.$img_old)&&($img_old !='')){
            unlink('assets/img_product/'.$img_old);
        }
        DB::table('product')->where('id',$id)->delete();
        return redirect()->route('product.list');
    }
    public function show()
    {
        $product=DB::table('product')->paginate(9);
        return view('admins.page.product.list',compact('product'));
    }
}
