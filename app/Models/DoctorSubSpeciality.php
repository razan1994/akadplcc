<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSubSpeciality extends Model
{
    use HasFactory;

    protected $table = 'doctor_sub_specialities';

    protected $fillable = [
        'doctor_id',
        'sub_speciality_id',
    ];


    // Doctor tAble Relation
    public function doctor(){
        return $this->belongsTo(Doctor::class , 'doctor_id');
    }

    // sub Speciality tAble Relation
    public function subSpeciality(){
        return $this->belongsTo(SubSpeciality::class , 'sub_speciality_id');
    }

}

