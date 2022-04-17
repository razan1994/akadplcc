<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;

    protected $table = 'course_sections';

    protected $fillable = [
        'course_id',
        'title_ar',
        'title_en',
        'video',
        'text_ar',
        'text_en',
        'section_image'
    ];

}
