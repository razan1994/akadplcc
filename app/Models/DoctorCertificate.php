<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCertificate extends Model
{
    use HasFactory;

    protected $table = 'doctor_certificates';

    protected $fillable = [
        'doctor_id',
        'name_ar',
        'name_en',
        'institution_name_ar',
        'institution_name_en'
    ];
    
}
