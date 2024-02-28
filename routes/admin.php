<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\Admin\AdminDashboardController;
use App\Http\Controllers\Backend\Admin\Auth\AdminLoginController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\Backend\Admin\AboutUsController;
use App\Http\Controllers\Backend\Admin\ApprovedBodiesController;
use App\Http\Controllers\Backend\Admin\BackendStudentController;
use App\Http\Controllers\Backend\Admin\TermAndConditionController;
use App\Http\Controllers\Backend\Admin\PrivacyPolicyController;
use App\Http\Controllers\Backend\Admin\SliderController;
use App\Http\Controllers\Backend\Admin\ContactUsController;
use App\Http\Controllers\Backend\Admin\CourcesController;
use App\Http\Controllers\Backend\Admin\LatestNewsController;
use App\Http\Controllers\Backend\Admin\NewsBlogController;
use App\Http\Controllers\Backend\Admin\PublicValuesController;
use App\Http\Controllers\Backend\Admin\SectionController;
use App\Http\Controllers\Backend\Admin\TasksController;

Route::controller(AdminLoginController::class)
    ->group(function () {
        Route::get('/login', 'showLoginForm')->name('login');
        Route::post('/login', 'login')->name('login.submit');
    });


Route::middleware('auth:super_admin')
    ->group(function () {
        // Dashboard Route :
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        // Support Tickets :
        // ==============================================================================
        Route::controller(SupportTicketController::class)
            ->prefix('support_tickets')
            ->group(function () {
                Route::get('/index',  'index')->name('support_tickets-index');
                Route::get('destroy/{id}',  'destroy')->name('support_tickets-destroy');
            });

        // User Routes :
        // ==============================================================================
        Route::controller(UserController::class)
            ->prefix('users')
            ->group(function () {
                Route::get('/create', 'create')->name('users-create');
                Route::post('/store', 'store')->name('users-store');
                Route::get('/index', 'index')->name('users-index');
                Route::get('show/{id}', 'show')->name('users-show');
                Route::get('edit/{id}', 'edit')->name('users-edit');
                Route::post('update/{id}', 'update')->name('users-update');
                Route::get('/acceptSingle/{id}', 'acceptSingle')->name('users-acceptSingle');
                Route::get('/rejectSingle/{id}', 'rejectSingle')->name('users-rejectSingle');
                Route::get('/activeInactiveSingle/{id}', 'activeInactiveSingle')->name('users-activeInactiveSingle');
                Route::post('/getRegions', 'getRegions')->name('getRegions');
            });

        // Student Routes :
        // ==============================================================================
        Route::controller(BackendStudentController::class)
            ->prefix('students')
            ->group(function () {
                Route::get('/create',  'create')->name('students-create');
                Route::post('/store',  'store')->name('students-store');
                Route::get('/index',  'index')->name('students-index');
                Route::get('show/{id}',  'show')->name('students-show');
                Route::get('edit/{id}',  'edit')->name('students-edit');
                Route::post('update/{id}',  'update')->name('students-update');
                Route::get('/acceptSingle/{id}',  'acceptSingle')->name('students-acceptSingle');
                Route::get('/rejectSingle/{id}',  'rejectSingle')->name('students-rejectSingle');
                Route::get('/activeInactiveSingle/{id}',  'activeInactiveSingle')->name('students-activeInactiveSingle');
                Route::post('/getRegions',  'getRegions')->name('getRegions');
            });


        // About Us Routes :
        // ==============================================================================

        Route::controller(AboutUsController::class)
            ->prefix('about_us')
            ->group(function () {
                Route::get('/index', 'index')->name('about_us-index');
                Route::get('edit', 'edit')->name('about_us-edit');
                Route::post('update', 'update')->name('about_us-update');
            });



        // Term And Conditions Routes:
        // ==============================================================================
        Route::controller(TermAndConditionController::class)
            ->prefix('term_and_conditions')
            ->group(function () {
                Route::get('/index', 'index')->name('term_and_conditions-index');
                Route::get('/create', 'create')->name('term_and_conditions-create');
                Route::post('/store', 'store')->name('term_and_conditions-store');
                Route::get('show/{id}', 'show')->name('term_and_conditions-show');
                Route::get('edit/{id}', 'edit')->name('term_and_conditions-edit');
                Route::post('update/{id}', 'update')->name('term_and_conditions-update');
                Route::get('softDelete/{id}', 'softDelete')->name('term_and_conditions-softDelete');
                Route::get('/showSoftDelete', 'showSoftDelete')->name('term_and_conditions-showSoftDelete');
                Route::get('softDeleteRestore/{id}', 'softDeleteRestore')->name('term_and_conditions-softDeleteRestore');
            });

        // Privacy Policy Routes:
        // ==============================================================================
        Route::controller(PrivacyPolicyController::class)
            ->prefix('privacy_policies')
            ->group(function () {
                Route::get('/index', 'index')->name('privacy_policies-index');
                Route::get('/create', 'create')->name('privacy_policies-create');
                Route::post('/store', 'store')->name('privacy_policies-store');
                Route::get('show/{id}', 'show')->name('privacy_policies-show');
                Route::get('edit/{id}', 'edit')->name('privacy_policies-edit');
                Route::post('update/{id}', 'update')->name('privacy_policies-update');
                Route::get('softDelete/{id}', 'softDelete')->name('privacy_policies-softDelete');
                Route::get('/showSoftDelete', 'showSoftDelete')->name('privacy_policies-showSoftDelete');
                Route::get('softDeleteRestore/{id}', 'softDeleteRestore')->name('privacy_policies-softDeleteRestore');
            });


        // Contact Us Routes :
        // ==============================================================================
        Route::controller(ContactUsController::class)
            ->prefix("contact_us")
            ->group(function () {
                Route::get('/index', 'index')->name('contact_us-index');
                Route::get('edit', 'edit')->name('contact_us-edit');
                Route::post('update', 'update')->name('contact_us-update');
                //Contact Us Requests
                Route::get('/requests', 'requests')->name('contact_us-requests');
                Route::get('showRequest/{id}', 'showRequest')->name('contact_us-showrequest');
                Route::get('destroy/{id}', 'destroyRequest')->name('contact_us-destroyrequest');
            });

        // Slider Routes :
        // ==============================================================================

        Route::controller(SliderController::class)
            ->prefix("sliders")
            ->group(function () {
                Route::get('/create', 'create')->name('sliders-create');
                Route::post('/store', 'store')->name('sliders-store');
                Route::get('/index', 'index')->name('sliders-index');
                Route::get('show/{id}', 'show')->name('sliders-show');
                Route::get('edit/{id}', 'edit')->name('sliders-edit');
                Route::post('update/{id}', 'update')->name('sliders-update');
                Route::get('activeInactiveSingle/{id}', 'activeInactiveSingle')->name('sliders-activeInactiveSingle');
                Route::get('softDelete/{id}', 'softDelete')->name('sliders-softDelete');
                Route::get('showSoftDelete', 'showSoftDelete')->name('sliders-showSoftDelete');
                Route::get('softDeleteRestore/{id}', 'softDeleteRestore')->name('sliders-softDeleteRestore');
                Route::get('destroy/{id}', 'destroy')->name('sliders-destroy');
            });


        // approved_bodies Routes :
        // ==============================================================================
        Route::controller(ApprovedBodiesController::class)
            ->prefix("approvedBodies")
            ->group(function () {
                Route::get('/create',  'create')->name('approved_bodies-create');
                Route::post('/store',  'store')->name('approved_bodies-store');
                Route::get('/index',  'index')->name('approved_bodies-index');
                Route::get('softDelete/{id}',  'softDelete')->name('approved_bodies-softDelete');
                Route::get('destroy/{id}',  'destroy')->name('approved_bodies-destroy');
            });



        // Blog Routes:
        //Created By :Mohammed Salah
        // ==============================================================================
        Route::controller(NewsBlogController::class)
            ->prefix("blogs")
            ->group(function () {
                Route::get('/index', 'index')->name('news_blogs-index');
                Route::get('/create', 'create')->name('news_blogs-create');
                Route::post('/store', 'store')->name('news_blogs-store');
                Route::get('show/{id}', 'show')->name('news_blogs-show');
                Route::get('edit/{id}', 'edit')->name('news_blogs-edit');
                Route::post('update/{id}', 'update')->name('news_blogs-update');
                Route::get('softDelete/{id}', 'softDelete')->name('news_blogs-softDelete');
                Route::get('/showSoftDelete', 'showSoftDelete')->name('news_blogs-showSoftDelete');
                Route::get('softDeleteRestore/{id}', 'softDeleteRestore')->name('news_blogs-softDeleteRestore');
            });


        // Latest NEws Routes:
        //Created By :Mohammed Salah
        // ==============================================================================
        Route::controller(LatestNewsController::class)
            ->prefix("news")
            ->group(function () {
                Route::get('/index', 'index')->name('latest_news-index');
                Route::get('/create', 'create')->name('latest_news-create');
                Route::post('/store', 'store')->name('latest_news-store');
                Route::get('show/{id}', 'show')->name('latest_news-show');
                Route::get('edit/{id}', 'edit')->name('latest_news-edit');
                Route::post('update/{id}', 'update')->name('latest_news-update');
                Route::get('softDelete/{id}', 'softDelete')->name('latest_news-softDelete');
                Route::get('/showSoftDelete', 'showSoftDelete')->name('latest_news-showSoftDelete');
                Route::get('softDeleteRestore/{id}', 'softDeleteRestore')->name('latest_news-softDeleteRestore');
            });




        // Cources Routes:
        //Created By :Mohammed Salah
        // ==============================================================================
        Route::controller(CourcesController::class)
            ->prefix("cources")
            ->group(function () {
                Route::get('/index', 'index')->name('cources-index');
                Route::get('/create', 'create')->name('cources-create');
                Route::post('/store', 'store')->name('cources-store');
                Route::get('show/{id}', 'show')->name('cources-show');
                Route::get('edit/{id}', 'edit')->name('cources-edit');
                Route::post('update/{id}', 'update')->name('cources-update');
                Route::get('softDelete/{id}', 'softDelete')->name('cources-softDelete');
                Route::get('/showSoftDelete', 'showSoftDelete')->name('cources-showSoftDelete');
                Route::get('softDeleteRestore/{id}', 'softDeleteRestore')->name('cources-softDeleteRestore');
                Route::post('/addCourseSectionVideo', 'addCourseSectionVideo')->name('add-course-section-video');
                Route::post('addCourseSection/{id}', 'addCourseSection')->name('add-course-section');
                Route::get('deleteCourseSection/{id}', 'deleteCourseSection')->name('delete-course-section');
                Route::get('showSection/{id}', 'showSection')->name('showSection');
            });


        // Course Sections Routes:
        //Created By :Ahmad Alsakhen
        Route::prefix("sections")->name('section.')->controller(SectionController::class)->group(function () {
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
        });

        // Public Values Routes:
        //Created By :Ahmad Alsakhen
        Route::controller(PublicValuesController::class)
            ->prefix("public_values")
            ->group(function () {
                Route::get('/index', 'index')->name('public_values-index');
                Route::put('update', 'update')->name('public_values-update');
            });

        // Course Tasks Routes:
        //Created By :Ahmad Alsakhen
        Route::controller(TasksController::class)
            ->prefix("tasks")
            ->group(function () {
                Route::get('/index/{id}', 'index')->name('tasks-index');
                Route::post('store/{id}', 'store')->name('tasks-store');
                Route::get('delete/{id}', 'destroy')->name('tasks-delete');
                Route::put('update/{id}', 'update')->name('tasks-update');
            });
    });
