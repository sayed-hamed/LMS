<?php

namespace App\Http\Controllers\front;

use App\Cats;
use App\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data['cats']=Cats::findOrfail($id);
        $data['lacourses']=Courses::select('id','name','price','img')->latest()->take(3)->get();
        $data['letest_courses']=Courses::where('cat_id',$id)->paginate(6);
//        dd( $data['cats']);
        return view('front.courses.cat')->with($data);
    }

    public function show($id,$c_id)
    {
        $data['courses']=Courses::findOrFail($c_id);
        $data['letest_courses']=Courses::findOrFail($c_id)->latest()->take(3)->get();

        $data['cats']=Cats::select('id','name')->first();





        return view('front.courses.show')->with($data);
    }
}
