<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpeciality extends Model
{
    use HasFactory;

    protected $table = 'doctor_specialities';

    protected $fillable = [
        'id',
        'name_ar',
        'name_en',
        'updated_by',
        'alias_name_en',
        'alias_name_ar'
    ];



    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================
    public function user(){
        return $this->belongsTo(User::class , 'updated_by');
    }



    public function doctors(){
        return $this->hasMany(DoctorSpecialityRelation::class , 'speciality_id');
    }



    public function doctorsRandomTwelve(){
        return $this->doctors()->inRandomOrder()->take(12);
    }





}
