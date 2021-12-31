<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpeciality extends Model
{
    use HasFactory;

    protected $table = 'doctor_specialities';

    protected $fillable = [
        'name_ar',
        'name_en',
        'updated_by'
    ];



    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================
    public function user(){
        return $this->belongsTo(User::class , 'updated_by');
    }


}
