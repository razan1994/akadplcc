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
                'Life Coach',
                'medical_equipment'
            ];

            $public_insurance_companies = InsuranceCompany::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_hospitals = Hospital::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_radiology_centers = RadiologyCenter::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_medical_centers = MedicalCenter::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_labs = Lab::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_doctors = Doctor::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_pharmacies = Pharmacy::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_gyms = Gym::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_life_coaches = LifeCoutch::where('user_status',2)->inRandomOrder()->take(8)->get();
            $public_specialities = DoctorSpeciality::take(6)->get();

            $public_insurance_companies_count = InsuranceCompany::count();
            $public_hospitals_count = Hospital::count();
            $public_radiology_centers_count = RadiologyCenter::count();
            $public_medical_centers_count = MedicalCenter::count();
            $public_labs_count = Lab::count();
            $public_pharmacies_count = Pharmacy::count();
            $public_gyms_count = Gym::count();
            $public_life_coaches_count = LifeCoutch::count();
            $public_doctors_count = Doctor::count();
            $public_specialities_count = DoctorSpeciality::count();

            $public_countries = PublicCountry::get();
            $public_languages = PublicLanguage::get();

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
                'public_doctors_count' => $public_doctors_count,
                'public_insurance_companies_count' => $public_insurance_companies_count,
                'public_hospitals_count' => $public_hospitals_count,
                'public_radiology_centers_count' => $public_radiology_centers_count,
                'public_medical_centers_count' => $public_medical_centers_count,
                'public_labs_count' => $public_labs_count,
                'public_doctors_count' => $public_doctors_count,
                'public_pharmacies_count' => $public_pharmacies_count,
                'public_gyms_count' => $public_gyms_count,
                'public_life_coaches_count' => $public_life_coaches_count,
                'public_countries' => $public_countries,
                'public_languages' => $public_languages,
                'public_specialities_count' => $public_specialities_count

            ]);
        });
    }
}




