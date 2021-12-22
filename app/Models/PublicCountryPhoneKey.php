<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicCountryPhoneKey extends Model
{
    use HasFactory;

    protected $table = 'public_country_phone_keys';
    protected $fillable = [
        'key',
        'name',
        'nicename',
        'iso3',
        'numcode',
        'phonecode',
    ];
    // Relation With PublicCountry Table
    public function publicCountry()
    {
        return $this->belongsTo(PublicCountry::class,'key','country_key');
    }
}
