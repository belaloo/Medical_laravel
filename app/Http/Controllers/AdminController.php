<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.Index');
    }

    public function AddMajor (Request $request){
        if($request->isMethod('post')){
            Major::create($request->all());
            return redirect()->back()->with('message',' ');
        }else{
            return view('admin.Major.AddNew');
        }
    }
}
/*
if($request->isMethod('post')){

}else{

}*/
