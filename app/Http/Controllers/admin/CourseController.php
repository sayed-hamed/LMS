<?php

namespace App\Http\Controllers\admin;

use App\Cats;
use App\Http\Controllers\Controller;
use App\Courses;
use App\Trainers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class CourseController extends Controller
{

    public function index()
    {
        $data['courses']=Courses::select('id','name','phone','lang','duration','small_desc','desc','img','price','level','course_type','aim_course','start_date','end_date')->paginate(50);

        return view('admin.courses.index')->with($data);
    }

    public function create(){
        $data['cats']=Cats::select('id','name')->get();
        $data['trainers']=Trainers::select('id','name')->get();
        $data['courses_type']=Courses::select('id','course_type')->get();
        return view('admin.courses.create')->with($data);
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'nullable|string|max:1000',
            'small_desc'=>'nullable|string|max:200',
            'desc'=>'nullable|string',
            'level'=>'nullable|string',
            'price'=>'nullable|string',
            'duration'=>'nullable|string',
            'cat_id'=>'nullable|exists:cats,id',
            'trainer_id'=>'nullable|exists:trainers,id',
            'course_type'=>'nullable|string',
            'aim_course'=>'nullable|string',
            'start_date'=>'nullable|string',
            'end_date'=>'nullable|string',
            'phone'=>'nullable|string|max:50',
            'lang'=>'nullable|string',
            'img'=>'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $new_name=$data['img']->hashName();
        Image::make($data['img'])->resize(1200,600)->save(public_path('uploads/courses/'.$new_name));
        $data['img']=$new_name;

        Courses::create([
            'name' => ['en' => $request->name, 'ar' => $request->name_ar],
            'small_desc' => ['en' => $request->small_desc, 'ar' => $request->small_desc_ar],
            'desc' => ['en' => $request->desc, 'ar' => $request->desc_ar],
            'level' => ['en' => $request->level, 'ar' => $request->level_ar],
            'price' => $request->price,
            'duration' => $request->duration,
            'cat_id' => $request->cat_id,
            'trainer_id' => $request->trainer_id,
            'phone' => $request->phone,
            'course_type' => ['en' => $request->course_type, 'ar' => $request->course_type_ar],
            'aim_course' => ['en' => $request->aim_course, 'ar' => $request->aim_course_ar],
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'lang' => ['en' => $request->lang, 'ar' => $request->lang_ar],
            'img' =>$request->img,
        ]);
        toastr()->success(trans('main_trans.Success'));

        return redirect(route('admin.course'));
    }

    public function edit($id){
        $data['course']=Courses::findOrFail($id);
        $data['cats']=Cats::select('id','name')->get();
        $data['trainers']=Trainers::select('id','name')->get();
        $data['courses_type']=Courses::select('id','course_type')->get();


        return view('admin.courses.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'name'=>'nullable|string|max:100',
            'small_desc'=>'nullable|string',
            'desc'=>'nullable|string',
            'level'=>'nullable|string',
            'price'=>'nullable|string',
            'duration'=>'nullable|string',
            'cat_id'=>'nullable|exists:cats,id',
            'trainer_id'=>'nullable|exists:trainers,id',
            'course_type'=>'nullable|string',
            'aim_course'=>'nullable|string',
            'start_date'=>'nullable|string',
            'end_date'=>'nullable|string',
            'phone'=>'nullable|string|max:50',
            'lang'=>'nullable|string',
            'img'=>'nullable|image|mimes:jpg,jpeg,png',
        ]);



        $old_name=Courses::findOrFail($request->id)->img;

        if ($request->hasFile('img')){
            Storage::disk('uploads')->delete('courses/'.$old_name);
            $new_name=$data['img']->hashName();
            Image::make($data['img'])->resize(1200,600)->save(public_path('uploads/courses/'.$new_name));
            $data['img']=$new_name;


        }
        else{
            $data['img']=$old_name;
        }

        Courses::findOrFail($request->id)->update($data);

        toastr()->success(trans('main_trans.Update'));

        return redirect(route('admin.course'));
    }


    public function delete($id){

        $old_name=Courses::findOrFail($id)->img;
        Storage::disk('uploads')->delete('courses/'.$old_name);


        Courses::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));

        return redirect(route('admin.course'));

    }

}
