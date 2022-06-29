<?php

namespace App\Http\Controllers\admin;

use App\Cats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $data['cats']=Cats::select('id','name')->get();
        return view('admin.cats.index')->with($data);
    }

    public function create(){
        return view('admin.cats.create');
    }

    public function store(Request $request)
    {

        try {

            $data = $request->validate([
                'name' => 'required|string',
            ]);

            $cats=new Cats();

            $cats->name = ['en' => $request->name, 'ar' => $request->name_ar];

            $cats->save();


            toastr()->success(trans('main_trans.Success'));
            return redirect(route('admin.cat'));

        }

        catch (\Exception $e){

            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);

        }


    }

    public function edit($id){
        $data['cat']=Cats::findOrFail($id);
        return view('admin.cats.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:100',
        ]);

        Cats::findOrFail($request->id)->update($data);
        toastr()->success(trans('main_trans.Update'));


        return redirect(route('admin.cat'));
    }


    public function delete($id){
        Cats::findOrFail($id)->delete();
        toastr()->success(trans('main_trans.Delete1'));

        return redirect(route('admin.cat'));

    }
}
