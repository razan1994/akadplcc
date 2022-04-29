<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'students';
    protected $fillable = [
        'first_name',
        'mid_first_name',
        'mid_last_name',
        'last_name',
        'username',
        'email',
        'phone',
        'password',
        'profile_photo_path',
        'user_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // ===================================================================================================================
    // =========================================== Relationship Section ==================================================
    // ===================================================================================================================

    public function info(){
        return $this->hasOne(StudentInformation::class,'student_id');
    }



    public function experiences(){
        return $this->hasMany(StudentExperience::class,'student_id');
    }


    public function skills(){
        return $this->hasMany(StudentSkill::class,'student_id');
    }


    public function educations(){
        return $this->hasMany(StudentEducation::class,'student_id');
    }

    // ===================================================================================================================
    // ============================================= Mutator Section =====================================================
    // ===================================================================================================================




    // ===================================================================================================================
    // ============================================= Accessors Section ===================================================
    // ===================================================================================================================

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
