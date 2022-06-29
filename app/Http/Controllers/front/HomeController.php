<?php

namespace App\Http\Controllers\front;

use App\Cats;
use App\Http\Controllers\Controller;
use App\Students;
use App\Test;
use App\Trainers;
use Illuminate\Http\Request;
use App\Courses;

class HomeController extends Controller
{
    public function index()
    {
        $date['courses']=Courses::select('id','name','small_desc','desc','img','duration')
            ->orderby('id','desc')
            ->take(3)
            ->get();

        $date['cats']=Cats::select('id','name')->first();
        $date['courses_count']=Courses::count();
        $date['trainers_count']=Trainers::count();
        $date['students_count']=Students::count();

        $date['tests']=Test::select('id','img','desc','name','status')->get();


        $date['trainers']=Trainers::select('id','name','img','spec','desc')->paginate(4);

        return view('front.index')->with($date);
    }

}
