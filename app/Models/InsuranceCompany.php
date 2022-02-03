<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class InsuranceCompany extends Authenticatable
{
    use HasFactory;

    protected $table = 'insurance_companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_ar',
        'name_en',
        'username',
        'email',
        'phone',
        'password',
        'profile_photo_path',
        'user_status',
        'created_by',
        'country_id',
        'region_id',
        'address_ar',
        'address_en',
        'player_id',
        'alias_name_en',
        'alias_name_ar',
        'user_description_en',
        'user_description_ar',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'pivot',
        'profile_photo_url'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================

    // Relation With Public Country Table
    // Created By : Mohammed Salah
    public function country()
    {
        return $this->belongsTo(PublicCountry::class);
    }

    // Relation With Public Region Table
    // Created By : Mohammed Salah
    public function region()
    {
        return $this->belongsTo(PublicRegion::class, 'region_id');
    }

    // ====================================================================================
    // ============================== Accessories =========================================
    // ====================================================================================

    public function getUserStatusAttribute($value)
    {
        if ($value == 1) {
            return 'Pendding';
        } elseif ($value == 2) {
            return 'Active';
        } elseif ($value == 3) {
            return 'Inactive';
        }
    }

}
