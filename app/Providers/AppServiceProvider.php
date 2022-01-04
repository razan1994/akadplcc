<?php

namespace App\Providers;

use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\Pharmacy;
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
            $public_user_types = [
                'Super Admin',
                'Insurance Company',
                'Hospital',
                'Radiology Center',
                'Medical Center',
                'Lab',
                'Doctor',
                'Patient',
                'Pharmacy',
                'SEO Admin',
                'Gym',
                'Life Coach'
            ];

            $public_insurance_companies = InsuranceCompany::where('user_status',2)->get();
            $public_hospitals = Hospital::where('user_status',2)->get();
            $public_radiology_centers = RadiologyCenter::where('user_status',2)->get();
            $public_medical_centers = MedicalCenter::where('user_status',2)->get();
            $public_labs = Lab::where('user_status',2)->get();
            $public_doctors = Doctor::where('user_status',2)->get();
            $public_pharmacies = Pharmacy::where('user_status',2)->get();
            $public_gyms = Gym::where('user_status',2)->get();
            $public_life_coaches = LifeCoutch::where('user_status',2)->get();
            $public_specialities = DoctorSpeciality::get();

            view()->share([
                'public_user_types' => $public_user_types,
                'public_insurance_companies' => $public_insurance_companies,
                'public_hospitals' => $public_hospitals,
                'public_radiology_centers' => $public_radiology_centers,
                'public_medical_centers' => $public_medical_centers,
                'public_labs' => $public_labs,
                'public_doctors' => $public_doctors,
                'public_pharmacies' => $public_pharmacies,
                'public_gyms' => $public_gyms,
                'public_life_coaches' => $public_life_coaches,
                'public_specialities' => $public_specialities,

            ]);
        });
    }
}




