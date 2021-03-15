<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Major;
use App\Models\User;
use App\Models\WorkTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function DoctorTimes(Request $request){
        $users = Auth::user();
        if($request->isMethod('post')){
            $request['doctor_id'] = $users->id;
            $find = WorkTime::whereDoctorId($users->id)->whereClinicId($request['clinic_id'])->first();
            if(isset($find)){
                // update time
                $find->date = $request['dateName'];
                $find->from = $request['FromTime'];
                $find->to = $request['ToTime'];
                $find->save();
                return  redirect()->back();

            }else{
                $request['date'] = $request['dateName'];
                $request['from'] = $request['FromTime'];
                $request['to'] = $request['ToTime'];
                // new
                WorkTime::create($request->all());
                return  redirect()->back();
            }
        }else{
            $Clins = Clinic::all();
            $Times = WorkTime::whereDoctorId($users->id)->get();
            return view('admin.Times',['clinics'=>$Clins]);
        }

    }
}
/*
if($request->isMethod('post')){

}else{

}
*/
