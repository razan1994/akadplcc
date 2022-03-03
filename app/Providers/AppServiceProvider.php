<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\Pharmacy;
use App\Models\PublicCountry;
use App\Models\PublicLanguage;
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {



            $public_countries = PublicCountry::get();
            $public_languages = PublicLanguage::get();

            $public_contact = ContactUs::first();

            view()->share([

                'public_countries' => $public_countries,
                'public_languages' => $public_languages,
                'public_contact' => $public_contact,

            ]);
        });
    }
}




