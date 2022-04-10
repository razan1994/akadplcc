<?php

use Illuminate\Support\Facades\Route;

// ===================================================================================================================
// ============================================ Start Used Controller Area ===========================================
// ===================================================================================================================
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\Admin\AdminDashboardController;
use App\Http\Controllers\Backend\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\Backend\Admin\AboutUsController;
use App\Http\Controllers\Backend\Admin\ApprovedBodiesController;
use App\Http\Controllers\Backend\Admin\TermAndConditionController;
use App\Http\Controllers\Backend\Admin\PrivacyPolicyController;
use App\Http\Controllers\Backend\Admin\SliderController;
use App\Http\Controllers\Backend\Admin\ContactUsController;
use App\Http\Controllers\Backend\Admin\CourcesController;
use App\Http\Controllers\Backend\Admin\LatestNewsController;
use App\Http\Controllers\Backend\Admin\NewsBlogController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    // ==================================================================================================================
    // ============================================= Shared Routes ======================================================

    Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');





    // ==================================================================================================================
    // ============================================= End Shared Routes ==================================================

    Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('aboutUs');

    // ==================================================================================================================
    // ============================================= Auth Routes ========================================================

    Route::group(['middleware' => ['checkAuth','checkActiveInactiveUser']], function () {


    });

// });

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
            Route::get('/create', [UserController::class, 'create'])->name('users-create');
            Route::post('/store', [UserController::class, 'store'])->name('users-store');
            Route::get('/index', [UserController::class, 'index'])->name('users-index');
            Route::get('show/{id}', [UserController::class, 'show'])->name('users-show');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('users-edit');
            Route::post('update/{id}', [UserController::class, 'update'])->name('users-update');
            Route::get('/acceptSingle/{id}', [UserController::class, 'acceptSingle'])->name('users-acceptSingle');
            Route::get('/rejectSingle/{id}', [UserController::class, 'rejectSingle'])->name('users-rejectSingle');
            Route::get('/activeInactiveSingle/{id}', [UserController::class, 'activeInactiveSingle'])->name('users-activeInactiveSingle');
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


        // approved_bodies Routes :
        // ==============================================================================
        Route::group(['prefix' => 'approvedBodies'], function () {
            Route::get('/create', [ApprovedBodiesController::class, 'create'])->name('approved_bodies-create');
            Route::post('/store', [ApprovedBodiesController::class, 'store'])->name('approved_bodies-store');
            Route::get('/index', [ApprovedBodiesController::class, 'index'])->name('approved_bodies-index');
            Route::get('softDelete/{id}', [ApprovedBodiesController::class, 'softDelete'])->name('approved_bodies-softDelete');
            Route::get('destroy/{id}', [ApprovedBodiesController::class, 'destroy'])->name('approved_bodies-destroy');
        });



        // Blog Routes:
        //Created By :Mohammed Salah
        // ==============================================================================
        Route::group(['prefix' => 'blogs'], function () {
            Route::get('/index', [NewsBlogController::class, 'index'])->name('news_blogs-index');
            Route::get('/create', [NewsBlogController::class, 'create'])->name('news_blogs-create');
            Route::post('/store', [NewsBlogController::class, 'store'])->name('news_blogs-store');
            Route::get('show/{id}', [NewsBlogController::class, 'show'])->name('news_blogs-show');
            Route::get('edit/{id}', [NewsBlogController::class, 'edit'])->name('news_blogs-edit');
            Route::post('update/{id}', [NewsBlogController::class, 'update'])->name('news_blogs-update');
            Route::get('softDelete/{id}', [NewsBlogController::class, 'softDelete'])->name('news_blogs-softDelete');
            Route::get('/showSoftDelete', [NewsBlogController::class, 'showSoftDelete'])->name('news_blogs-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [NewsBlogController::class, 'softDeleteRestore'])->name('news_blogs-softDeleteRestore');

        });

        // Latest NEws Routes:
        //Created By :Mohammed Salah
        // ==============================================================================
        Route::group(['prefix' => 'news'], function () {
            Route::get('/index', [LatestNewsController::class, 'index'])->name('latest_news-index');
            Route::get('/create', [LatestNewsController::class, 'create'])->name('latest_news-create');
            Route::post('/store', [LatestNewsController::class, 'store'])->name('latest_news-store');
            Route::get('show/{id}', [LatestNewsController::class, 'show'])->name('latest_news-show');
            Route::get('edit/{id}', [LatestNewsController::class, 'edit'])->name('latest_news-edit');
            Route::post('update/{id}', [LatestNewsController::class, 'update'])->name('latest_news-update');
            Route::get('softDelete/{id}', [LatestNewsController::class, 'softDelete'])->name('latest_news-softDelete');
            Route::get('/showSoftDelete', [LatestNewsController::class, 'showSoftDelete'])->name('latest_news-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [LatestNewsController::class, 'softDeleteRestore'])->name('latest_news-softDeleteRestore');

        });



        // Cources Routes:
        //Created By :Mohammed Salah
        // ==============================================================================
        Route::group(['prefix' => 'cources'], function () {
            Route::get('/index', [CourcesController::class, 'index'])->name('cources-index');
            Route::get('/create', [CourcesController::class, 'create'])->name('cources-create');
            Route::post('/store', [CourcesController::class, 'store'])->name('cources-store');
            Route::get('show/{id}', [CourcesController::class, 'show'])->name('cources-show');
            Route::get('edit/{id}', [CourcesController::class, 'edit'])->name('cources-edit');
            Route::post('update/{id}', [CourcesController::class, 'update'])->name('cources-update');
            Route::get('softDelete/{id}', [CourcesController::class, 'softDelete'])->name('cources-softDelete');
            Route::get('/showSoftDelete', [CourcesController::class, 'showSoftDelete'])->name('cources-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [CourcesController::class, 'softDeleteRestore'])->name('cources-softDeleteRestore');
            Route::post('addCourseSection/{id}', [CourcesController::class, 'addCourseSection'])->name('add-course-section');
            Route::get('deleteCourseSection/{id}', [CourcesController::class, 'deleteCourseSection'])->name('delete-course-section');
        });


    });
});





Route::get('/error-inactive', function () {
    return view('errors.error_inactive');
})->name('error-inactive');
Route::get('/error-pendding', function () {
    return view('errors.error_pendding');
})->name('error-pendding');



Route::get('crawler', [FrontEndController::class, 'crawler'])->name('crawler');


// innerds

Route::get('/myAccount', function () {
    return view('front_end_inners.myAccount');
})->name('myAccount');

// courses
Route::get('/courses', function () {
    return view('front_end_inners.courses');
})->name('courses');


// courseDetails
Route::get('/courseDetails', function () {
    return view('front_end_inners.courseDetails');
})->name('courseDetails');

// courseSubscriber
Route::get('/courseSubscriber', function () {
    return view('front_end_inners.courseSubscriber');
})->name('courseSubscriber');

// about
Route::get('/about', function () {
    return view('front_end_inners.about');
})->name('about');

// contact
Route::get('/contact', function () {
    return view('front_end_inners.contact');
})->name('contact');

// news
Route::get('/news', function () {
    return view('front_end_inners.news');
})->name('news');

// newsDetails
Route::get('/newsDetails', function () {
    return view('front_end_inners.newsDetails');
})->name('newsDetails');

// subscribe
Route::get('/subscribe', function () {
    return view('front_end_inners.subscribe');
})->name('subscribe');


// subscribe
Route::get('/subscribeForm', function () {
    return view('front_end_inners.subscribeForm');
})->name('subscribeForm');
