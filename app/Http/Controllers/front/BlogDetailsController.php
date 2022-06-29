<?php

namespace App\Http\Controllers\front;

use App\Blog;
use App\Cats;
use App\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index($id)
    {
        $data['blogs']=Blog::select('id','name','desc','img')->where('id',$id)->first();
        $data['latest_blog']=Blog::paginate(4);
        $data['courses']=Courses::paginate(3);
//        $data['letest_courses']=Blog::paginate(3);
        $data['letest_courses']=Courses::paginate(3);
        $data['cats']=Cats::select('id','name')->first();

        return view('front.blog.blog_desc')->with($data);
    }




    }
