<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $guarded = [];

    // ==============================================================================================================
    // ============================================= Relationships ==================================================
    public function sections()
    {
        return $this->hasMany(CourseSection::class, 'course_id');
    }


    public function tasks()
    {
        return $this->hasMany(Task::class, 'course_id')->with('answers');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_courses', 'course_id', 'student_id');
    }

    public function studentSections()
    {
        return $this->hasMany(StudentSection::class, 'course_id')->where('student_id', auth('student')->id());
    }

    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================


}
