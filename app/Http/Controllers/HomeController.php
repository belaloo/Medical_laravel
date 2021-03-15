<?php

namespace App\Http\Controllers;


use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    public function Doctors(){
        $Doctors = User::whereRoleId(2)->inRandomOrder()->paginate(10);
        return view('website.doctors.ViewAllDoctors',['doctors'=>$Doctors]);
    }
    public function Majors(){
        $Doctors = User::whereRoleId(2)->inRandomOrder()->paginate(10);
        return view('website.doctors.ViewAllDoctors',['doctors'=>$Doctors]);
    }
    public function ViewMajors($id){
        $TheMajor = Major::find($id);
        if($TheMajor){
            $Doctors = $TheMajor->Doctors()->get();
            return view('website.majors.AllDoctors',['doctors'=>$Doctors]);

        }else{
            abort(404,'not Found');
            return false;
        }
    }

    public function ViewDoctor($id){
        $TheDoctor = User::find($id);
        if($TheDoctor){
            return view('website.doctors.ViewDoctor',['doctor'=>$TheDoctor]);
        }else{
            abort(404,'not Found');
            return false;
        }

    }
}
