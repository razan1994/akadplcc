<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    // ===================================================================================================================
    // ============================================== Standard Section ===================================================
    // ===================================================================================================================
    protected $table = 'banners';
    protected $fillable = [
        'banner_1_url',
        'image_1',
        'status_1',

        'banner_2_url',
        'image_2',
        'status_2',
        
        'banner_3_url',
        'image_3',
        'status_3',
        
        'banner_4_url',
        'image_4',
        'status_4',
        
        'banner_5_url',
        'image_5',
        'status_5',
        
        'banner_6_url',
        'image_6',
        'status_6',

        'banner_7_url',
        'image_7',
        'status_7',

        'banner_8_url',
        'image_8',
        'status_8',

        'banner_9_url',
        'image_9',
        'status_9',
    ];

    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================
    public function getStatus1Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus2Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus3Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus4Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus5Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus6Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus7Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus8Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
    public function getStatus9Attribute($value)
    {
        if ($value == 1) {
            return 'Active';
        } elseif ($value == 2) {
            return 'Inactive';
        }
    }
}
