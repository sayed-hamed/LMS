<?php

namespace App\Http\Controllers\admin;

use App\Carchange;
use App\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function index()
    {
        $data['careers']=Carchange::select('id','teacher_type')->get();
        return view('admin.career.index')->with($data);
    }

    public function create(){
        return view('admin.career.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'teacher_type' => 'required|string',
        ]);

        Carchange::create([
            'teacher_type' => ['en' => $request->teacher_type, 'ar' => $request->teacher_type_ar],

        ]);

        toastr()->success(trans('main_trans.Success'));
        return redirect(route('admin.career'));

    }

    public function edit($id){
        $data['cat']=Carchange::findOrFail($id);
        return view('admin.career.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'teacher_type'=>'required|string',
        ]);

        Carchange::findOrFail($request->id)->update($data);
        toastr()->success(trans('main_trans.Update'));


        return redirect(route('admin.career'));
    }


    public function delete($id){

//        dd($id);
        Carchange::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));

        return redirect(route('admin.career'));

    }

}
