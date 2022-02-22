<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorConsultant extends Model
{
    use HasFactory;

    protected $table = 'doctor_consultants';

    protected $fillable = [
        'doctor_id',
        'name_ar',
        'name_en',
        'consultant_fees',
    ];



    // ==============================================================================================
    // ==================================== Relations ===============================================
    // ==============================================================================================
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

}
