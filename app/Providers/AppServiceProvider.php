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
            $public_user_types = ['Super Admin','Insurance Company','Hospital','Radiology Center','Medical Center','Lab','Doctor','Patient','Pharmacy','SEO Admin','Gym','Life Coach'];

                $insurance_companies = InsuranceCompany::where('status','Active')->orderBy('created_at','desc')->get();

                $hospitals = Hospital::where('status','Active')->orderBy('created_at','desc')->get();

                $radiology_centers = RadiologyCenter::where('status','Active')->orderBy('created_at','desc')->get();

                $medical_centers = MedicalCenter::where('status','Active')->orderBy('created_at','desc')->get();

                $labs = Lab::where('status','Active')->orderBy('created_at','desc')->get();

                $doctors = Doctor::where('status','Active')->orderBy('created_at','desc')->get();

                $pharmacies = Pharmacy::where('status','Active')->orderBy('created_at','desc')->get();

                $gyms = Gym::where('status','Active')->orderBy('created_at','desc')->get();

                $life_couches = LifeCoutch::where('status','Active')->orderBy('created_at','desc')->get();

                $specialities = DoctorSpeciality::where('status','Active')->orderBy('created_at','desc')->get();


            view()->share([
                'public_user_types' => $public_user_types,
                'insurance_companies'=>$insurance_companies,
                'hospitals'=>$hospitals,
                'radiology_centers'=>$radiology_centers,
                'medical_centers'=>$medical_centers,
                'labs'=>$labs,
                'doctors'=>$doctors,
                'pharmacies'=>$pharmacies,
                'gyms'=>$gyms,
                'life_couches'=>$life_couches,
                'specialities'=>$specialities,
            ]);
        });
    }
}




