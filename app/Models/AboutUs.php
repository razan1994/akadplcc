<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    // ===================================================================================================================
    // ============================================== Standard Section ===================================================
    // ===================================================================================================================
    protected $table = 'about_us';
    protected $fillable = [
        'about_us_ar',
        'about_us_en',
        'vision_ar',
        'vision_en',
        'mission_ar',
        'mission_en',
        'about_us_image',
        'vision_image',
        'mission_image',
    ];
}
