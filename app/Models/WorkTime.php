<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    use HasFactory;
    protected $fillable = ['date','from','to','max_appointments','doctor_id','clinic_id'];

    public function Clinc(){
        return $this->belongsTo(Clinic::class,'clinic_id');
    }

    public function Doctor(){
        return $this->belongsTo(User::class,'doctor_id');
    }
}
