<?php

namespace App\Http\Controllers\front;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $data['galleries']=Gallery::select('title','spec','img')->paginate(6);
        return view('front.gallery.gallery')->with($data);
    }
}
