<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSpeciality extends Model
{
    use HasFactory;

    protected $table = 'sub_specialities';

    protected $fillable = [
        'speciality_id',
        'name_ar',
        'name_en',
        'updated_by',
        'alias_name_en',
        'alias_name_ar'
    ];



    // Doctor tAble Relation
    public function speciality(){
        return $this->belongsTo(DoctorSpeciality::class , 'speciality_id');
    }


    // Doctor Sub Speciality tAble Relation
    public function DocotorSubSpecialities(){
        return $this->hasMany(DoctorSubSpeciality::class , 'sub_speciality_id');
    }
}
