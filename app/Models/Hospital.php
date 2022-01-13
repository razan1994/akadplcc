<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitals';

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
        'alias_name_ar'
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
