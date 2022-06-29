<?php

namespace App\Http\Controllers\front;

use App\Cats;
use App\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        $data['letest_courses']=Courses::select('id','name','price','img')->latest()->take(3)->get();
        $data['cats']=Cats::select('id','name')->first();
        return view('front.general_courses.general_course')->with($data);
    }

    public function conversation(){
        $data['letest_courses']=Courses::select('id','name','price','img')->latest()->take(3)->get();
        $data['cats']=Cats::select('id','name')->first();
        return view('front.general_courses.conversation')->with($data);
    }
}
