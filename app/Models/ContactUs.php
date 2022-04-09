<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    // ===================================================================================================================
    // ============================================== Standard Section ===================================================
    // ===================================================================================================================
    protected $table = 'contact_us';
    protected $fillable = [
        'email',
        'phone',
        'facebook_url',
        'linkedin_url',
        'instagram_url',
        'twitter_url',
        'youtube_url'
    ];
}
