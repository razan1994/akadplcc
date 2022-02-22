<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorReservation extends Model
{
    use HasFactory;

    protected $table = 'doctor_reservations';
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'name',
        'phone',
        'age',
        'time'
    ];



    public function doctor(){
        return $this->belongsTo(Doctor::class , 'doctor_id');
    }


}
