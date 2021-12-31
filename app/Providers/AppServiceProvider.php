<?php

namespace App\Providers;

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

            view()->share([
                'public_user_types' => $public_user_types,

            ]);
        });
    }
}
