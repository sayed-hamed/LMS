<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function accredntial(){
        return view('front.partner.accredntial');
    }

    public function client(){
        return view('front.partner.client');
    }
}
