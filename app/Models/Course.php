<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en',
        'teacher_ar',
        'teacher_en',
        'section_count',
        'section_time',
        'course_date',
        'status',
        'teacher_image',
        'main_image',
        'main_video',
        'test_status'
    ];


    public function sections(){
        return $this->hasMany(CourseSection::class,'course_id');
    }


    public function tasks(){
        return $this->hasMany(Task::class,'course_id');
    }




    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================


}
