<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Massege;

class MessageController extends Controller
{

    public function index()
    {
        $data['messages'] = Massege::select('name', 'email', 'phone', 'subject', 'website', 'massege')->latest()->get();

        return view('admin.contact.index')->with($data);
    }

    public function delete($id)
    {


        Massege::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));
        return redirect(route('admin.trainer'));

    }
}
