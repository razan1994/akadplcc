<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabReview extends Model
{
    use HasFactory;

    protected $table = 'lab_reviews';

    protected $fillable =[
        'lab_id',
        'patient_id',
        'rating_value',
        'rating_message'
    ];


}
