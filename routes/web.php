<?php

use App\Http\Controllers\Frontend\CodeController;
use Illuminate\Support\Facades\Route;

// ===================================================================================================================
// ============================================ Start Used Controller Area ===========================================
// ===================================================================================================================
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Payments\PaypalController;

// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
// ==================================================================================================================
// ============================================= Shared Routes ======================================================
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('check-code-if-exist', [CodeController::class, 'checkCodeIfExist'])->name('checkCodeIfExist');

// ==================================================================================================================
// ============================================= End Shared Routes ==================================================

Route::controller(FrontendController::class)
    ->group(function () {
        Route::get('/about-us', 'aboutUs')->name('aboutUs');
        Route::get('/contact-us', 'contactUs')->name('contactUs');

        Route::post('/contactReauest', 'contactReauest')->name('contactReauest');

        Route::get('/courses', 'courses')->name('courses');

        Route::get('/course-details/{id}', 'courseDetails')->name('course-details');


        Route::get('/news', 'news')->name('news');

        Route::get('/news-details/{id}', 'newsDetails')->name('news-details');

        Route::get('login/{provider}', 'redirectToProvider')->name('social-auth');
        Route::get('login/{provider}/callback', 'handleProviderCallback');
    });

// ------------------------------------------------------------------------------------------------------------------
// ============================================= Student Routes ======================================================
// ------------------------------------------------------------------------------------------------------------------
Route::controller(StudentController::class)
    ->prefix('student')
    ->name('student.')->group(function () {
        Route::post('/login',  'login')->name('login');
        Route::get('/logout',  'logout')->name('logout');
        Route::post('/register',  'register')->name('register');


        // ----------------- Authinticated Student -----------------
        Route::middleware(['auth:student', 'checkSessionId'])
            ->group(function () {

                // course sections 
                Route::get('course-sections/{id}', 'courseSections')->name('course-sections')->middleware('checkStudentIfPaid');

                Route::get('/student-profile',  'studentProfile')->name('student-profile');
                Route::post('/update-student-profile',  'updateStudentProfile')->name('update-student-profile');

                Route::post('/add_job_title',  'add_job_title')->name('add_job_title');
                Route::post('/add_over_view',  'add_over_view')->name('add_over_view');
                Route::post('/add_experience',  'add_experience')->name('add_experience');
                Route::post('/delete_experience',  'delete_experience')->name('delete_experience');
                Route::post('/add_contact_info',  'add_contact_info')->name('add_contact_info');
                Route::post('/add_skills',  'add_skills')->name('add_skills');
                Route::post('/delete_skill',  'delete_skill')->name('delete_skill');
                Route::post('/add_education',  'add_education')->name('add_education');
                Route::post('/delete_education',  'delete_education')->name('delete_education');
                Route::post('/update_image',  'update_image')->name('update_image');


                Route::get('/cv-first',  'cvFirst')->name('cv-first');
                Route::get('/cv-second',  'cvSecond')->name('cv-second');
                Route::get('/cv-third',  'cvThird')->name('cv-third');

                // ----------------- Courses -----------------
                Route::get('register-course/{id}', 'registerCourse')->name('register-course');


                // =================== Paypal ===================
                Route::controller(PaypalController::class)->prefix('paypal')->name('paypal.')->group(function () {
                    Route::get('/create/{invoiceId?}', 'create')->name('create');
                    Route::get('/rollback/{invoiceId}', 'rollback')->name('rollback');
                    Route::get('/cancel/{invoiceId}', 'cancel')->name('cancel');
                });
            });
    });
// ------------------------------------------------------------------------------------------------------------------
// ============================================= End Student Routes ==================================================
// ******************************************************************************************************************


Route::get('/privacy', function () {
    return view('policy');
})->name('privacy');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');


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
// Route::get('/courses', function () {
//     return view('front_end_inners.courses');
// })->name('courses');


// // courseDetails
// Route::get('/courseDetails', function () {
//     return view('front_end_inners.courseDetails');
// })->name('courseDetails');

// courseSubscriber
Route::get('/courseSubscriber', function () {
    return view('front_end_inners.courseSubscriber');
})->name('courseSubscriber');

// about
// Route::get('/about', function () {
//     return view('front_end_inners.about');
// })->name('about');

// contact
// Route::get('/contact', function () {
//     return view('front_end_inners.contact');
// })->name('contact');

// news
// Route::get('/news', function () {
//     return view('front_end_inners.news');
// })->name('news');

// newsDetails
Route::get('/newsDetails', function () {
    return view('front_end_inners.newsDetails');
})->name('newsDetails');

// subscribe
Route::get('/subscribe', function () {
    return view('front_end_inners.resume');
})->name('subscribe');


// subscribe
Route::get('/subscribeForm', function () {
    return view('front_end_inners.subscribeForm');
})->name('subscribeForm');



// resume
Route::get('/resume', function () {
    return view('front_end_inners.resume');
})->name('resume');


// test
Route::get('/test', function () {
    return view('front_end_inners.test');
})->name('test');

// testAnswer
Route::get('/testAnswer', function () {
    return view('front_end_inners.testAnswer');
})->name('testAnswer');


require __DIR__ . '/auth.php';
