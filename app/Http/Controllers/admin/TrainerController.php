<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trainers;
use Illuminate\Support\Facades\Storage;
use Image;

class TrainerController extends Controller
{

    public function index()
    {
        $data['trainers']=Trainers::select('id','name','spec','desc','img','phone')->paginate(20);
        return view('admin.trainers.index')->with($data);
    }

    public function create(){
        return view('admin.trainers.create');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:100',
            'phone'=>'required|string|max:100',
            'spec'=>'required|string|max:100',
            'desc'=>'required|string|max:200',
            'img'=>'required|image|mimes:jpg,jpeg,png',
        ]);

        $new_name=$data['img']->hashName();
        Image::make($data['img'])->resize(249,202)->save(public_path('uploads/trainers/'.$new_name));
        $data['img']=$new_name;

//        $string=implode(",",[$data]);

//
//        $trainer=new Trainers();
//        $trainer->name = ['en' => $request->name, 'ar' => $request->name_ar];
//        $trainer->phone = ['en' => $request->phone,'ar' => $request->phone_ar];
//        $trainer->spec = ['en' => $request->spec, 'ar' => $request->spec_ar];
//        $trainer->desc = ['en' => $request->desc, 'ar' => $request->desc_ar];
//        $trainer->img =$request->img;
//        dd(  $trainer);

        Trainers::create([
            'name' => ['en' => $request->name, 'ar' => $request->name_ar],
          'phone' => $request->phone,
          'spec' => ['en' => $request->spec, 'ar' => $request->spec_ar],
          'desc' => ['en' => $request->desc, 'ar' => $request->desc_ar],
          'img' =>$request->img,
        ]);

//        $trainer->save();
        toastr()->success(trans('main_trans.Success'));
        return redirect(route('admin.trainer'));
    }

    public function edit($id){
        $data['trainer']=Trainers::findOrFail($id);
        return view('admin.trainers.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:100',
            'phone'=>'required|string|max:100',
            'spec'=>'required|string|max:100',
            'desc'=>'required|string|max:200',
            'img'=>'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $old_name=Trainers::findOrFail($request->id)->img;

        if ($request->hasFile('img')){
            Storage::disk('uploads')->delete('trainers/'.$old_name);
            $new_name=$data['img']->hashName();
            Image::make($data['img'])->resize(249,202)->save(public_path('uploads/trainers/'.$new_name));
            $data['img']=$new_name;


        }
        else{
            $data['img']=$old_name;
        }

        Trainers::findOrFail($request->id)->update($data);
        toastr()->success(trans('main_trans.Update'));


        return redirect(route('admin.trainer'));
    }


    public function delete($id){

        $old_name=Trainers::findOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/'.$old_name);


        Trainers::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));
        return redirect(route('admin.trainer'));

    }


}
