<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicRegion extends Model
{
    use HasFactory;


    protected $table = 'public_regions';
    protected $fillable = [
        'country_id',
        'country_key',
        'name_en',
        'name_ar',
    ];


    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================

    // With Public Country table :
    // ===================================================================================================================
    public function country()
    {
        return $this->belongsTo(PublicCountry::class, 'country_id');
    }
}
