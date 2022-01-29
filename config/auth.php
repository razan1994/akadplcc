<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'super_admin' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'patient' => [
            'driver' => 'session',
            'provider' => 'patients',
        ],
        'doctor' => [
            'driver' => 'session',
            'provider' => 'doctors',
        ],
        'hospital' => [
            'driver' => 'session',
            'provider' => 'hospitals',
        ],
        'radiology_center' => [
            'driver' => 'session',
            'provider' => 'radiology_centers',
        ],
        'medical_center' => [
            'driver' => 'session',
            'provider' => 'medical_centers',
        ],
        'lab' => [
            'driver' => 'session',
            'provider' => 'labs',
        ],
        'pharmacy' => [
            'driver' => 'session',
            'provider' => 'pharmacies',
        ],
        'seo_admin' => [
            'driver' => 'session',
            'provider' => 'seo_admins',
        ],
        'gym' => [
            'driver' => 'session',
            'provider' => 'gyms',
        ],
        'life_coach' => [
            'driver' => 'session',
            'provider' => 'life_coutches',
        ]
    ],
// ['Super Admin','Insurance Company','Hospital','Radiology Center','Medical Center','Lab','Doctor','Patient','Pharmacy','SEO Admin','Gym','Life Coach']
    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'super_admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'patients' => [
            'driver' => 'eloquent',
            'model' => App\Models\Patient::class,
        ],
        'doctors' => [
            'driver' => 'eloquent',
            'model' => App\Models\Doctor::class,
        ],
        'hospitals' => [
            'driver' => 'eloquent',
            'model' => App\Models\Hospital::class,
        ],
        'radiology_centers' => [
            'driver' => 'eloquent',
            'model' => App\Models\RadiologyCenter::class,
        ],
        'medical_centers' => [
            'driver' => 'eloquent',
            'model' => App\Models\MedicalCenter::class,
        ],
        'labs' => [
            'driver' => 'eloquent',
            'model' => App\Models\Lab::class,
        ],
        'pharmacies' => [
            'driver' => 'eloquent',
            'model' => App\Models\Pharmacy::class,
        ],
        'seo_admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\SeoAdmin::class,
        ],
        'gyms' => [
            'driver' => 'eloquent',
            'model' => App\Models\Gym::class,
        ],
        'life_coutches' => [
            'driver' => 'eloquent',
            'model' => App\Models\LifeCoutch::class,
        ]
// ['Super Admin','Insurance Company','Hospital','Radiology Center','Medical Center','Lab','Doctor','Patient','Pharmacy','SEO Admin','Gym','Life Coach']
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'super_admins' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'doctors' => [
            'provider' => 'doctors',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'patients' => [
            'provider' => 'patients',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'hospitals' => [
            'provider' => 'hospitals',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'radiology_centers' => [
            'provider' => 'radiology_centers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'medical_centers' => [
            'provider' => 'medical_centers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'labs' => [
            'provider' => 'labs',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'pharmacies' => [
            'provider' => 'pharmacies',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'seo_admins' => [
            'provider' => 'seo_admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'gyms' => [
            'provider' => 'gyms',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'life_coutches' => [
            'provider' => 'life_coutches',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ]
    ],
// ['Super Admin','Insurance Company','Hospital','Radiology Center','Medical Center','Lab','Doctor','Patient','Pharmacy','SEO Admin','Gym','Life Coach']
    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
