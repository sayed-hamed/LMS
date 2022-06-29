<?php

namespace App\Http\Controllers\admin;

use App\Courses;
use App\Http\Controllers\Controller;
use App\Students;
use App\Trainers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $data['students']=Students::select('id','name','spec','email')->get();
        return view('admin.students.index')->with($data);
    }

    public function create(){
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'spec'=>'nullable|string',
        ]);


//        $student=new Students();
//
//        $student->name=['en' => $request->name, 'ar' => $request->name_ar];
//        $student->spec=['en' => $request->spec, 'ar' => $request->spec_ar];
//        $student->email=$request->email;
//        $student->save();

        Students::create([
            'name' => ['en' => $request->name, 'ar' => $request->name_ar],
            'email' => $request->email,
            'spec' => ['en' => $request->spec, 'ar' => $request->spec_ar],
        ]);

        toastr()->success(trans('main_trans.Success'));

        return redirect(route('admin.student'));
    }

    public function edit($id){
        $data['student']=Students::findOrFail($id);
        return view('admin.students.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|string|max:100',
            'spec'=>'nullable|string|max:100',
        ]);


        Students::findOrFail($request->id)->update($data);
        toastr()->success(trans('main_trans.Update'));


        return redirect(route('admin.student'));
    }


    public function delete($id)
    {

        Students::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));

        return redirect(route('admin.student'));

    }

    public function showcourses($id){

        $data['courses']=Students::findOrFail($id)->courses;

        return view('admin.students.showcourses')->with($data);

    }
}
