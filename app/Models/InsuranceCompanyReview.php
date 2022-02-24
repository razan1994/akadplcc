<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompanyReview extends Model
{
    use HasFactory;

    protected $table = 'insurance_company_reviews';

    protected $fillable =[
        'insurance_company_id',
        'patient_id',
        'rating_value',
        'rating_message'
    ];


}
