<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicCountry extends Model
{
    use HasFactory;

    protected $table = 'public_countries';
    protected $fillable = [
        'country_key',
        'name_en',
        'name_ar',
    ];



    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================

    // With Public Region table :
    // ===================================================================================================================
    public function regions()
    {
        return $this->hasMany(PublicRegion::class, 'country_id');
    }

    // Relation With Public Country Phone Key Table
    public function publicCountryPhoneKey()
    {
        return $this->hasOne(PublicCountryPhoneKey::class, 'key', 'country_key');
    }
}
