<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadiologyCenterGallery extends Model
{
    use HasFactory;

    protected $table = 'radiology_center_galleries';
    protected $fillable = [
        'radiology_center_id',
        'image'
    ];



    public function radiology(){
        return $this->belongsTo(RadiologyCenter::class,'radiology_center_id');
    }
}
