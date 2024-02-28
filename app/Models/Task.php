<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "tasks";
    protected $guarded = [];



    // ===================================================================================
    // =================================== Relations =====================================
    // ===================================================================================

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class, 'task_id');
    }
}
