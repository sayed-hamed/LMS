<?php

namespace App\Http\Controllers\admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class GalleryController extends Controller
{
    public function index()
    {
        $data['galleries']=Gallery::select('id','title','spec','img')->paginate(8);

        return view('admin.gallery.index')->with($data);
    }

    public function create(){
        $data['galleries']=Gallery::select('id','title')->get();
        return view('admin.gallery.create')->with($data);
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'required|string|max:1000',
            'spec'=>'required|string',
            'img'=>'required|image|mimes:jpg,jpeg,png',
        ]);

        $new_name=$data['img']->hashName();
        Image::make($data['img'])->resize(370,220)->save(public_path('uploads/gallery/'.$new_name));
        $data['img']=$new_name;

        Gallery::create([
            'title' => ['en' => $request->title, 'ar' => $request->title_ar],
            'spec' => ['en' => $request->spec, 'ar' => $request->spec_ar],
            'img' =>$request->img,
        ]);

        toastr()->success(trans('main_trans.Success'));

        return redirect(route('admin.gallery'));
    }

    public function edit($id){
        $data['galleries']=Gallery::findOrFail($id);


        return view('admin.gallery.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'title'=>'required|string|max:1000',
            'spec'=>'required|string',
            'img'=>'nullable|image|mimes:jpg,jpeg,png',
        ]);



        $old_name=Gallery::findOrFail($request->id)->img;

        if ($request->hasFile('img')){
            Storage::disk('uploads')->delete('gallery/'.$old_name);
            $new_name=$data['img']->hashName();
            Image::make($data['img'])->resize(370,220)->save(public_path('uploads/gallery/'.$new_name));
            $data['img']=$new_name;


        }
        else{
            $data['img']=$old_name;
        }

        Gallery::findOrFail($request->id)->update($data);

        toastr()->success(trans('main_trans.Update'));


        return redirect(route('admin.gallery'));
    }


    public function delete($id){

        $old_name=Gallery::findOrFail($id)->img;
        Storage::disk('uploads')->delete('gallery/'.$old_name);


        Gallery::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));
        return redirect(route('admin.gallery'));

    }
}
