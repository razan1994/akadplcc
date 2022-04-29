<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducation extends Model
{
    use HasFactory;

    protected $table = 'student_education';

    protected $fillable = [
        'student_id',
        'institution_name',
        'section',
        'degree',
        'from_date',
        'to_date'
    ];

}
