<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $table = 'doctors';

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
        'speciality_id',
        'alias_name_en',
        'alias_name_ar',
        'user_description_en',
        'user_description_ar',
        'gender',
        'languages',
        'visit_fees'
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
    public function specialities(){
        return $this->hasMany(DoctorSpecialityRelation::class , 'doctor_id');
    }


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

    // Relation With Doctor Week Plan Table
    // Created By : Mohammed Salah
    public function weekPlan(){
        return $this->hasOne(DoctorWeekPlan::class,'doctor_id');
    }

    // Relation With Doctor certificates Table
    // Created By : Mohammed Salah
    public function certificates(){
        return $this->hasMany(DoctorCertificate::class,'doctor_id');
    }



    // Relation With Doctor Reservations Table
    // Created By : Mohammed Salah
    public function appointments(){
        return $this->hasMany(DoctorReservation::class , 'doctor_id');
    }

    // Relation With Doctor Consultants Table
    // Created By : Mohammed Salah
    public function consultants(){
        return $this->hasMany(DoctorConsultant::class,'doctor_id');
    }


    // Relation With Doctor Reviews Table
    // Created By : Mohammed Salah
    public function reviews(){
        return $this->hasMany(DoctorReview::class,'doctor_id');
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
