<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function AddDoctor  (Request $request){
        if($request->isMethod('post')){
            if($request->has('TheLogo')){
                $logo = time() . '.' . $request->TheLogo->extension();
                $request->TheLogo->move(('images').'/' . date('d-m-Y'), $logo);
                $request['image'] = '/images/'.date('d-m-Y').'/' . $logo;
                $request['role_id'] = 2;
                $request['password'] = Hash::make($request['password']);
                User::create($request->all());
                return redirect()->back()->with('message',' ');
            }else{
                $majors = Major::all();
                return view('admin.Doctors.AddDoctor',['majors'=>$majors]);
            }
        }else{
            $majors = Major::all();
            return view('admin.Doctors.AddDoctor',['majors'=>$majors]);
        }
    }

    public function AddClinic  (Request $request){
        if($request->isMethod('post')){
                Clinic::create($request->all());
                return redirect()->back()->with('message',' ');
        }else{
            return view('admin.Clinic.AddClinic');
        }
    }
}
/*
if($request->isMethod('post')){

}else{

}*/
