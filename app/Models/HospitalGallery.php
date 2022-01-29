<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalGallery extends Model
{
    use HasFactory;


    protected $table = 'hospital_galleries';
    protected $fillable = [
        'hospital_id',
        'image'
    ];



    public function hospital(){
        return $this->belongsTo(Hospital::class,'hospital_id');
    }
}
