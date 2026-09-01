<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\Course;
use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\PaymentWalletOrders;
use App\Models\Pharmacy;
use App\Models\PublicCountry;
use App\Models\PublicLanguage;
use App\Models\PublicValue;
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use App\Models\SubscriptionRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {

            Paginator::useBootstrap();

            // Check for the registeration status of the user
            $isUserRegisterationActive = false;
            if (auth('student')->check()) {
                $student = auth('student')->user();
                $lastPayment = $student->payments()->latest()->first();
                if ($lastPayment && $lastPayment->payment_status == 'paid' && $lastPayment->due_at > Carbon::now()) {
                    $isUserRegisterationActive = true;
                } else {
                    $isUserRegisterationActive = false;
                }
            }
            $public_values = PublicValue::get();
            $public_values = $public_values->mapWithKeys(function ($item) {
                return [$item['key'] => $item['value']];
            });

            view()->share(compact(
                'public_values',
                'isUserRegisterationActive'
            ));
        });

        View::composer(['front_end_layout.footer'], function ($view) {
            $view->with('latestCourses', Course::whereHas('sections')
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get());

            $view->with('contactUs', ContactUs::first());
        });

        View::composer(['admin.layouts.menu'], function ($view) {
            $view->with('newSubsciptionRequests', SubscriptionRequest::where('status', 'pending')->count());
            $view->with('newWalletWithdrawRequests', PaymentWalletOrders::where('status', 'pending')
                ->where('type', 'wallet')
                ->count());
            $view->with('newPaypalWithdrawRequests', PaymentWalletOrders::where('status', 'pending')
                ->where('type', 'paypal')
                ->count());
        });
    }
}
