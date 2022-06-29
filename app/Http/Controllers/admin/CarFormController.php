<?php

namespace App\Http\Controllers\admin;

use App\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarFormController extends Controller
{
    public function index(){
        $data['carrs']=Career::select('name', 'email', 'phone', 'company', 'job_title', 'edu_level','file')->latest()->get();
        return view('admin.carr.index')->with($data);
    }
}
