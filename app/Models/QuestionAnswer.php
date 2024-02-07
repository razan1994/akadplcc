<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    use HasFactory;

    protected $table = "question_answers";
    protected $fillable = [
        'task_id',
        'answer',
        'status'
    ];



// ===================================================================================
// =================================== Relations =====================================
// ===================================================================================

public function task(){
    return $this->belongsTo(Task::class,'task_id');
}

}
