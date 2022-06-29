<?php

namespace App\Http\Controllers\front;

use App\Blog;
use App\Cats;
use App\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data['blogs']=Blog::paginate(6);
        $data['courses']=Courses::paginate(3);
        $data['latest_blog']=Blog::paginate(4);
        $data['courses']=Courses::paginate(3);
//        $data['letest_courses']=Blog::paginate(3);
        $data['letest_courses']=Courses::paginate(3);
        $data['cats']=Cats::select('id','name')->first();

        return view('front.blog.blog')->with($data);
    }

    public function show($id)
    {
        $data['blogs'] = Courses::findOrFail($id);
        $data['blog_desc'] = Blog::findOrFail($id)->get();

        return view('front.blog.blog_desc')->with($data);
    }

}
