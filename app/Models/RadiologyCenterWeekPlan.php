<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadiologyCenterWeekPlan extends Model
{
    use HasFactory;

    protected $table = 'radiology_center_week_plans';
    protected $fillable = [
        'radiology_center_id',
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


    public function radiology(){
        return $this->belongsTo(RadiologyCenter::class,'radiology_center_id');
    }
}
