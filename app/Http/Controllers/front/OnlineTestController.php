<?php

namespace App\Http\Controllers\front;

use App\ExamUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineTestController extends Controller
{
    public function index(){
        return view('front.online_test.online');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:191',
            'email'=>'required|email',
            'phone'=>'required|string|max:100',
            's_phone'=>'nullable|string|max:191',
            'company'=>'required|string|max:191',
            'position'=>'required|string|max:1000',
        ]);

        ExamUser::create($data);
        return view('front.exam.exam');

    }





}
