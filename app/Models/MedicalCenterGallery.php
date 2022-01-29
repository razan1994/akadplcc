<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCenterGallery extends Model
{
    use HasFactory;

    protected $table = 'medical_center_galleries';
    protected $fillable = [
        'medical_center_id',
        'image'
    ];



    public function medical(){
        return $this->belongsTo(MedicalCenter::class,'medical_center_id');
    }
}
