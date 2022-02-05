<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpecialityRelation extends Model
{
    use HasFactory;

    protected $table = 'doctor_speciality_relations';

    protected $fillable = [
        'doctor_id',
        'speciality_id',
    ];


    // Doctor tAble Relation
    public function doctor(){
        return $this->belongsTo(Doctor::class , 'doctor_id');
    }

    // sub Speciality tAble Relation
    public function speciality(){
        return $this->belongsTo(DoctorSpeciality::class , 'speciality_id');
    }

}

