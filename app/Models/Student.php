<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable implements MustVerifyEmail
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
    protected $guarded = [];

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

    public function info()
    {
        return $this->hasOne(StudentInformation::class, 'student_id');
    }

    public function experiences()
    {
        return $this->hasMany(StudentExperience::class, 'student_id');
    }


    public function skills()
    {
        return $this->hasMany(StudentSkill::class, 'student_id');
    }


    public function educations()
    {
        return $this->hasMany(StudentEducation::class, 'student_id');
    }


    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses', 'student_id', 'course_id')
            ->withPivot(['progress', 'created_at', 'updated_at']);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'student_id');
    }

    public function lastPayment()
    {
        return $this->hasOne(Payment::class, 'student_id')->latest() ?? null;
    }

    public function sections()
    {
        return $this->belongsToMany(CourseSection::class, 'student_sections', 'student_id', 'section_id')
            ->withPivot('is_watched', 'is_finished');
    }

    public function referralStudents()
    {
        return $this->hasMany(Student::class, 'referral_code', 'own_code');
    }

    public function referrerStudent()
    {
        return $this->belongsTo(Student::class, 'own_code', 'referral_code');
    }

    public function paymentWalletOrders()
    {
        return $this->hasMany(PaymentWalletOrders::class, 'student_id')->latest();
    }

    public function totalWithdrawlsPoints()
    {
        return $this->hasMany(PaymentWalletOrders::class, 'student_id')->where('status', 'paid')->sum('amount');
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

    public function getPaymentStatusAttribute($value)
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
