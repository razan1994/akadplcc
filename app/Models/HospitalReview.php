<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalReview extends Model
{
    use HasFactory;

    protected $table = 'hospital_reviews';

    protected $fillable =[
        'hospital_id',
        'patient_id',
        'rating_value',
        'rating_message'
    ];


}
