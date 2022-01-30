<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabWeekPlan extends Model
{
    use HasFactory;

    protected $table = 'lab_week_plans';
    protected $fillable = [
        'lab_id',
        'active_days',
        'saterday_from',
        'saterday_to',
        'every_saterday',
        'sunday_from',
        'sunday_to',
        'every_sunday',
        'monday_from',
        'monday_to',
        'every_monday',
        'tuseday_from',
        'tuseday_to',
        'every_tuseday',
        'wednsday_from',
        'wednsday_to',
        'every_wednsday',
        'thursday_from',
        'thursday_to',
        'every_thursday',
        'friday_from',
        'friday_to',
        'every_friday',
    ];


    public function lab(){
        return $this->belongsTo(Lab::class,'lab_id');
    }
}
