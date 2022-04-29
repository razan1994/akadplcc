<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExperience extends Model
{
    use HasFactory;

    protected $table = 'student_experiences';

    protected $fillable = [
        'student_id',
        'company_name',
        'job_title',
        'experience',
        'from_date',
        'to_date',
        'untill_now'
    ];

}

