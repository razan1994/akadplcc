<?php

use Illuminate\Support\Facades\Route;

// ===================================================================================================================
// ============================================ Start Used Controller Area ===========================================
// ===================================================================================================================
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\Admin\AdminDashboardController;
use App\Http\Controllers\Backend\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\Backend\Admin\AboutUsController;
use App\Http\Controllers\Backend\Admin\TermAndConditionController;
use App\Http\Controllers\Backend\Admin\PrivacyPolicyController;
use App\Http\Controllers\Backend\Admin\SliderController;
use App\Http\Controllers\Backend\Admin\ContactUsController;
use App\Http\Controllers\Backend\Admin\SpecialityController;
use App\Http\Controllers\Frontend\FrontEndController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    // ==================================================================================================================
    // ============================================= Shared Routes ======================================================

        Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
        Route::get('/aboutUs', [FrontEndController::class, 'aboutUs'])->name('aboutUs');
        Route::get('/contactUs', [FrontEndController::class, 'contactUs'])->name('contactUs');
        Route::post('/contactUsRequest', [FrontEndController::class, 'contactUsRequest'])->name('contactUsRequest');
        Route::get('/privacyPolicies', [FrontEndController::class, 'privacyPolicies'])->name('privacyPolicies');
        Route::get('/termsAndConditions', [FrontEndController::class, 'termsAndConditions'])->name('termsAndConditions');
        Route::get('details/{user_type}/{alias_name}', [FrontEndController::class, 'userDetails'])->name('user-details');
        Route::get('list/{user_type}', [FrontEndController::class, 'usersList'])->name('users-list');

    // ==================================================================================================================
    // ============================================= End Shared Routes ==================================================

        Route::post('/frontLogin', [FrontEndController::class, 'frontLogin'])->name('front-login');

    // ==================================================================================================================
    // ============================================= Auth Routes ========================================================

});

// ==================================================================================================================
// =========================================== Super Admin Routes ===================================================
// ==================================================================================================================
Route::prefix('super_admin')->name('super_admin.')->group(function () {

    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');

    Route::group(['middleware' => 'auth:super_admin'], function () {
        // Dashboard Route :
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        // Support Tickets :
        // ==============================================================================
        Route::group(['prefix' => 'support_tickets'], function () {
            Route::get('/index', [SupportTicketController::class, 'index'])->name('support_tickets-index');
            Route::get('destroy/{id}', [SupportTicketController::class, 'destroy'])->name('support_tickets-destroy');
        });

        // User Routes :
        // ==============================================================================
        Route::group(['prefix' => 'users'], function () {
            Route::get('/create/{user_type}', [UserController::class, 'create'])->name('users-create');
            Route::post('/store', [UserController::class, 'store'])->name('users-store');
            Route::get('/index/{user_type}', [UserController::class, 'index'])->name('users-index');
            Route::get('show/{id}/{user_type}', [UserController::class, 'show'])->name('users-show');
            Route::get('edit/{id}/{user_type}', [UserController::class, 'edit'])->name('users-edit');
            Route::post('update/{id}', [UserController::class, 'update'])->name('users-update');
            Route::get('/acceptSingle/{id}/{user_type}', [UserController::class, 'acceptSingle'])->name('users-acceptSingle');
            Route::get('/rejectSingle/{id}/{user_type}', [UserController::class, 'rejectSingle'])->name('users-rejectSingle');
            Route::get('/activeInactiveSingle/{id}/{user_type}', [UserController::class, 'activeInactiveSingle'])->name('users-activeInactiveSingle');
            Route::post('/getRegions', [UserController::class, 'getRegions'])->name('getRegions');
        });


        // About Us Routes :
        // ==============================================================================
        Route::group(['prefix' => 'about_us'], function () {
            Route::get('/index', [AboutUsController::class, 'index'])->name('about_us-index');
            Route::get('edit', [AboutUsController::class, 'edit'])->name('about_us-edit');
            Route::post('update', [AboutUsController::class, 'update'])->name('about_us-update');
        });



        // Term And Conditions Routes:
        // ==============================================================================
        Route::group(['prefix' => 'term_and_conditions'], function () {
            Route::get('/index', [TermAndConditionController::class, 'index'])->name('term_and_conditions-index');
            Route::get('/create', [TermAndConditionController::class, 'create'])->name('term_and_conditions-create');
            Route::post('/store', [TermAndConditionController::class, 'store'])->name('term_and_conditions-store');
            Route::get('show/{id}', [TermAndConditionController::class, 'show'])->name('term_and_conditions-show');
            Route::get('edit/{id}', [TermAndConditionController::class, 'edit'])->name('term_and_conditions-edit');
            Route::post('update/{id}', [TermAndConditionController::class, 'update'])->name('term_and_conditions-update');
            Route::get('softDelete/{id}', [TermAndConditionController::class, 'softDelete'])->name('term_and_conditions-softDelete');
            Route::get('/showSoftDelete', [TermAndConditionController::class, 'showSoftDelete'])->name('term_and_conditions-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [TermAndConditionController::class, 'softDeleteRestore'])->name('term_and_conditions-softDeleteRestore');
        });

        // Privacy Policy Routes:
        // ==============================================================================
        Route::group(['prefix' => 'privacy_policies'], function () {
            Route::get('/index', [PrivacyPolicyController::class, 'index'])->name('privacy_policies-index');
            Route::get('/create', [PrivacyPolicyController::class, 'create'])->name('privacy_policies-create');
            Route::post('/store', [PrivacyPolicyController::class, 'store'])->name('privacy_policies-store');
            Route::get('show/{id}', [PrivacyPolicyController::class, 'show'])->name('privacy_policies-show');
            Route::get('edit/{id}', [PrivacyPolicyController::class, 'edit'])->name('privacy_policies-edit');
            Route::post('update/{id}', [PrivacyPolicyController::class, 'update'])->name('privacy_policies-update');
            Route::get('softDelete/{id}', [PrivacyPolicyController::class, 'softDelete'])->name('privacy_policies-softDelete');
            Route::get('/showSoftDelete', [PrivacyPolicyController::class, 'showSoftDelete'])->name('privacy_policies-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [PrivacyPolicyController::class, 'softDeleteRestore'])->name('privacy_policies-softDeleteRestore');
        });


        // Contact Us Routes :
        // ==============================================================================
        Route::group(['prefix' => 'contact_us'], function () {
            Route::get('/index', [ContactUsController::class, 'index'])->name('contact_us-index');
            Route::get('edit', [ContactUsController::class, 'edit'])->name('contact_us-edit');
            Route::post('update', [ContactUsController::class, 'update'])->name('contact_us-update');
            //Contact Us Requests
            Route::get('/requests', [ContactUsController::class, 'requests'])->name('contact_us-requests');
            Route::get('showRequest/{id}', [ContactUsController::class, 'showRequest'])->name('contact_us-showrequest');
            Route::get('destroy/{id}', [ContactUsController::class, 'destroyRequest'])->name('contact_us-destroyrequest');
        });

        // Slider Routes :
        // ==============================================================================
        Route::group(['prefix' => 'sliders'], function () {
            Route::get('/create', [SliderController::class, 'create'])->name('sliders-create');
            Route::post('/store', [SliderController::class, 'store'])->name('sliders-store');
            Route::get('/index', [SliderController::class, 'index'])->name('sliders-index');
            Route::get('show/{id}', [SliderController::class, 'show'])->name('sliders-show');
            Route::get('edit/{id}', [SliderController::class, 'edit'])->name('sliders-edit');
            Route::post('update/{id}', [SliderController::class, 'update'])->name('sliders-update');
            Route::get('activeInactiveSingle/{id}', [SliderController::class, 'activeInactiveSingle'])->name('sliders-activeInactiveSingle');
            Route::get('softDelete/{id}', [SliderController::class, 'softDelete'])->name('sliders-softDelete');
            Route::get('showSoftDelete', [SliderController::class, 'showSoftDelete'])->name('sliders-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [SliderController::class, 'softDeleteRestore'])->name('sliders-softDeleteRestore');
            Route::get('destroy/{id}', [SliderController::class, 'destroy'])->name('sliders-destroy');
        });


        // Specialities Routes :
        // ==============================================================================
        Route::group(['prefix' => 'specialities'], function () {
            Route::get('/create', [SpecialityController::class, 'create'])->name('specialities-create');
            Route::post('/store', [SpecialityController::class, 'store'])->name('specialities-store');
            Route::get('/index', [SpecialityController::class, 'index'])->name('specialities-index');
            Route::get('edit/{id}', [SpecialityController::class, 'edit'])->name('specialities-edit');
            Route::post('update/{id}', [SpecialityController::class, 'update'])->name('specialities-update');
            Route::get('destroy/{id}', [SpecialityController::class, 'destroy'])->name('specialities-destroy');
        });


    });
});





// Route::get('/index', function () {
//     return view('front_end_inners.index');
// });
