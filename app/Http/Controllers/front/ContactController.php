<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $data['settings']=Setting::first();
//        dd($data['settings']);

        return view('front.contact.index')->with($data);
    }
}
