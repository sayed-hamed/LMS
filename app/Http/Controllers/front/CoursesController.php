<?php

namespace App\Http\Controllers\front;

use App\Cats;
use App\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){

        $data['courses']=Courses::paginate(6);
        $data['lacourses']=Courses::paginate(3);
        $data['cats']=Cats::select('id','name')->first();


        return view('front.courses.courses')->with($data);
    }
}
