<?php

namespace App\Http\Controllers\front;

use App\Career;
use App\Courses;
use App\Http\Controllers\Controller;
use App\Mail\contactmail;
use App\Massege;
use App\Notifications\CareerTest;
use App\Notifications\ContactTest;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MassegeController extends Controller
{

    public function massege(Request $request){

        $data=$request->validate([
            'name'=>'required|string|max:191',
            'email'=>'required|email',
            'phone'=>'required|string|max:100',
            'website'=>'nullable|string|max:191',
            'subject'=>'nullable|string|max:191',
            'message'=>'required|string|max:1000',
        ]);

        Massege::create($data);

//        Mail::to('elsayedroza@yahoo.com')->send(new contactmail($data));
        $std=Massege::first();

//        $EnrollmentData=[
//            'body'=>'you data has been send successfully and we will contact you As fast as possible',
//            'EnrollmentText'=>'Go to our Website',
//            'url'=>url('/'),
//            'thank you'=>'thank you',
//        ];
//
//        Notification::send($std,new ContactTest($EnrollmentData));



        $admin_mail='info@edu-tec.net';

        Mail::to($admin_mail)->send(new contactmail($data));
//        $admin_mail=Admin::chunk(50,function ($data){

//                dispatch(new SendCareer($data));
//
//        });


            session()->flash('success','information send successfully check your mail');
        return back();
    }

}
