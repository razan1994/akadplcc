<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchStudent extends Model
{
    use HasFactory;

    protected $table = 'research_student';
    protected $fillable = ['research_id', 'student_id'];
}
