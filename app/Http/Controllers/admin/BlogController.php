<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    public function index()
    {
        $data['blogs']=Blog::select('id','name','desc','img')->paginate(15);
        return view('admin.blog.index')->with($data);
    }

    public function create(){
        $data['blogs']=Blog::select('id','name','desc','img')->get();
        return view('admin.blog.create')->with($data);
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'desc'=>'required|string',
            'img'=>'required|image|mimes:jpg,jpeg,png',
        ]);

        $new_name=$data['img']->hashName();
        Image::make($data['img'])->resize(1200,600)->save(public_path('uploads/blogs/'.$new_name));
        $data['img']=$new_name;

        Blog::create([

            'name' => ['en' => $request->name, 'ar' => $request->name_ar],
            'desc' => ['en' => $request->desc, 'ar' => $request->desc_ar],
            'img' =>$request->img,

        ]);
        toastr()->success(trans('main_trans.Success'));

        return redirect(route('admin.blog'));
    }

    public function edit($id){
        $data['b']=Blog::findOrFail($id);

//        dd( $data['b']);



        return view('admin.blog.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:100',
            'desc'=>'required|string|',
            'img'=>'nullable|image|mimes:jpg,jpeg,png',
        ]);



        $old_name=Blog::findOrFail($request->id)->img;

        if ($request->hasFile('img')){
            Storage::disk('uploads')->delete('blogs/'.$old_name);
            $new_name=$data['img']->hashName();
            Image::make($data['img'])->resize(1200,600)->save(public_path('uploads/blogs/'.$new_name));
            $data['img']=$new_name;


        }
        else{
            $data['img']=$old_name;
        }

        Blog::findOrFail($request->id)->update($data);

        toastr()->success(trans('main_trans.Update'));

        return redirect(route('admin.blog'));
    }


    public function delete($id){

        $old_name=Blog::findOrFail($id)->img;
        Storage::disk('uploads')->delete('blogs/'.$old_name);

//        dd($id);
        Blog::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));

        return redirect(route('admin.blog'));

    }

}
