<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyReview extends Model
{
    use HasFactory;

    protected $table = 'pharmacy_reviews';

    protected $fillable =[
        'pharmacy_id',
        'patient_id',
        'rating_value',
        'rating_message'
    ];


}
