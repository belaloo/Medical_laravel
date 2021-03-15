<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Major;
use App\Models\User;
use App\Models\WorkTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function index()
    {
        return view('home');
    }

    public function Doctors(){
        $Doctors = User::whereRoleId(2)->inRandomOrder()->get();
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
        $doctorX = User::find($id);
        if($doctorX){
            $doctor = WorkTime::whereDoctorId($doctorX->id)->get();
            $sat = $sun = $mon = $thu = $win = $thurth = $frei = [];
            foreach ($doctor as $times){
                if($times->date == 'Saturday'){array_push($sat,$times);}
                elseif($times->date == 'Sunday'){array_push($sun,$times);}
                elseif($times->date == 'Monday'){array_push($mon,$times);}
                elseif($times->date == 'Thursday'){array_push($thu,$times);}
                elseif($times->date == 'Wednesday'){array_push($win,$times);}
                elseif($times->date == 'Thursday'){array_push($thurth,$times);}
                elseif($times->date == 'Friday'){array_push($frei,$times);}
            }

            return view('website.doctors.ViewDoctor',['doctor'=>$doctorX,'dates'=>$doctor,
                'sat'=>$sat,'sun'=>$sun,'mon'=>$mon,'thu' => $thu,'win' => $win,'thurth' => $thurth,'fri' => $frei
            ]);
        }else{
            abort(404,'not Found');
            return false;
        }

    }


    public function Booking(Request $request,$id){
        $WorkTime = WorkTime::find($id);
        if(isset($WorkTime)){
            if($request->isMethod('post')){
                $request['work_times_id'] = $id;
                $create = Appointment::create($request->all());
                return  redirect()->back();
            }else{
                return view('website.booking',['doctor'=>$WorkTime]);
            }

        }else{

        }

    }

/*    public function doctor_detail($id){
        $doctor = Doctor::find($id);
        if(isset($doctor)){
            $dates = DoctorTime::where('doctor_id',$id)->get();
            $sat = $sun = $mon = $thu = $win = $thurth = $frei = [];
            foreach ($dates as $times){
                if($times->dateName == 'السبت'){array_push($sat,$times);}
                elseif($times->dateName == 'الأحد'){array_push($sun,$times);}
                elseif($times->dateName == 'الاثنين'){array_push($mon,$times);}
                elseif($times->dateName == 'الثلاثاء'){array_push($thu,$times);}
                elseif($times->dateName == 'الاربعاء'){array_push($win,$times);}
                elseif($times->dateName == 'الخميس'){array_push($thurth,$times);}
                elseif($times->dateName == 'الجمعة'){array_push($frei,$times);}
            }

            return view('website.DoctorDetail',['doctors'=>$doctor,'dates'=>$dates,
                'sat'=>$sat,'sun'=>$sun,'mon'=>$mon,'thu' => $thu,'win' => $win,'thurth' => $thurth,'fri' => $frei
            ]);

        }else{
            return view('website.404');
        }

    }*/



}
