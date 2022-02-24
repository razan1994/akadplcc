<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadiologyCenterReview extends Model
{
    use HasFactory;

    protected $table = 'radiology_center_reviews';

    protected $fillable =[
        'radiology_center_id',
        'patient_id',
        'rating_value',
        'rating_message'
    ];


}
