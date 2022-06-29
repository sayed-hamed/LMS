<?php

namespace App\Http\Controllers\front;

use App\Blog;
use App\Cats;
use App\Courses;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        $data['events']=Event::paginate(6);
        $data['courses']=Courses::paginate(3);
        $data['letest_courses']=Blog::paginate(3);
        $data['letest_courses']=Courses::paginate(3);
        $data['cats']=Cats::select('id','name')->first();
        return view('front.events.event')->with($data);
    }



    public function show($id)
    {
        $data['events']=Event::all()->where('id',$id)->first();
        $data['letest_courses']=Blog::paginate(3);
        $data['letest_courses']=Courses::paginate(3);
        $data['cats']=Cats::select('id','name')->first();


        return view('front.events.event_desc')->with($data);
    }




}
