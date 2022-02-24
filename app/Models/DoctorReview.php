<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorReview extends Model
{
    use HasFactory;

    protected $table = 'doctor_reviews';

    protected $fillable =[
        'doctor_id',
        'patient_id',
        'rating_value',
        'rating_message'
    ];

}
