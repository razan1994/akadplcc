<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    use HasFactory;

    protected $table = 'student_information';

    protected $fillable = [
        'student_id',
        'job_title',
        'over_view',
        'phone',
        'email',
        'link',
        'address'
    ];

}
