<?php

namespace App\Http\Controllers\front;

use App\Admin;
use App\Carchange;
use App\Career;
use App\Http\Controllers\Controller;
use App\Jobs\SendCareer;
use App\Mail\career_mail;
use App\Notifications\CareerTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use  Image;
use Illuminate\Support\Facades\Mail;
use Toastr;
use Illuminate\Support\Facades\Storage;
use App\Notifications\NewCareer;

class CareerController extends Controller
{
    public function index(){
        $data['teachers']=Carchange::select('id','teacher_type')->get();

        return view('front.career.career')->with($data);
    }


    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string|max:150',
            'company'=>'required|string',
            'phone'=>'required|string',
            'file' => 'required|mimes:pdf,xlx,csv,jpg,png,jpeg',
            'job_title'=>'required|string',
            'edu_level'=>'required|string',
        ]);

        $data->attach($request->file('file')->getRealPath(), [
            'as' => $request->file('file')->getClientOriginalName(),
            'mime' => $request->file('file')->getMimeType()
        ]);



        $admin_mail='Careers@edu-tec.net';


        Mail::to($admin_mail)->send(new career_mail($data));





        session()->flash('Add','Added Successfully');
        return redirect()->back();



    }




}
