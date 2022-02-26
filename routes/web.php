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
use App\Http\Controllers\Backend\Admin\LatestNewsController;
use App\Http\Controllers\Backend\Admin\NewsBlogController;
use App\Http\Controllers\Backend\Admin\SpecialityController;
use App\Http\Controllers\Frontend\Doctor\DoctorController;
use App\Http\Controllers\Frontend\Equipment\MedicalEquipmentController;
use App\Http\Controllers\Frontend\FrontEndController;
use App\Http\Controllers\Frontend\Hospital\HospitalController;
use App\Http\Controllers\Frontend\Lab\LabController;
use App\Http\Controllers\Frontend\Medical\MedicalController;
use App\Http\Controllers\Frontend\Medicine\MedicineCompanyController;
use App\Http\Controllers\Frontend\Patient\PatientController;
use App\Http\Controllers\Frontend\Radiology\RadiologyController;
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

    Route::get('/blogs', [FrontEndController::class, 'blogs'])->name('blogs-list');

    Route::get('blogs/{alias_name}', [FrontEndController::class, 'blogsDetails'])->name('blogs-details');

    Route::get('/news', [FrontEndController::class, 'news'])->name('news-list');

    Route::get('news/{alias_name}', [FrontEndController::class, 'newsDetails'])->name('news-details');

    Route::post('/searchUser', [FrontEndController::class, 'searchUser'])->name('searchUser');

    Route::post('/bookAppointmentGuest', [FrontEndController::class, 'bookAppointmentGuest'])->name('book-appointment-guest');

    Route::post('/appointmentData', [FrontEndController::class, 'appointmentData'])->name('appointmentData');




    // ==================================================================================================================
    // ============================================= End Shared Routes ==================================================

    Route::post('/frontRegister', [FrontEndController::class, 'frontRegister'])->name('front-register');
    Route::post('/frontLogin', [FrontEndController::class, 'frontLogin'])->name('front-login');

    Route::get('/frontLogout', [FrontEndController::class, 'frontLogout'])->name('front-logout');

    Route::post('/frontGetRegions', [FrontEndController::class, 'frontGetRegions'])->name('frontGetRegions');
    Route::post('/frontGetSpecialities', [FrontEndController::class, 'frontGetSpecialities'])->name('frontGetSpecialities');

    // ==================================================================================================================
    // ============================================= Auth Routes ========================================================

    Route::group(['middleware' => ['checkAuth','checkActiveInactiveUser']], function () {

        Route::prefix('patient')->name('patient.')->group(function () {

            Route::group(['middleware' => 'auth:patient'], function () {
                Route::get('/profile/{active?}', [PatientController::class, 'profile'])->name('patient-profile');
                Route::post('/patientUpdateProfile/{id}', [PatientController::class, 'patientUpdateProfile'])->name('patient-update-profile');
                Route::post('/book-appointment', [PatientController::class, 'bookAppointment'])->name('book-appointment');

                Route::post('/rateUser', [PatientController::class, 'rateUser'])->name('rateUser');
            });
        });


        Route::prefix('doctor')->name('doctor.')->group(function () {

            Route::group(['middleware' => 'auth:doctor'], function () {
                Route::get('/dashboard/{active?}', [DoctorController::class, 'dashboard'])->name('doctor-dashboard');
                Route::post('/doctorUpdateProfile/{id}', [DoctorController::class, 'doctorUpdateProfile'])->name('doctor-update-profile');
                Route::post('/updateDoctorWeekPlan/{id}', [DoctorController::class, 'updateDoctorWeekPlan'])->name('update-doctor-week-plan');
                Route::post('/doctorStoreCertificate', [DoctorController::class, 'doctorStoreCertificate'])->name('doctor-store-certificate');
                Route::get('/doctorDeleteCertificate/{id}', [DoctorController::class, 'doctorDeleteCertificate'])->name('doctor-delete-certificate');
                Route::post('/doctorStoreConsultant', [DoctorController::class, 'doctorStoreConsultant'])->name('doctor-store-consultant');
                Route::get('/doctorDeleteConsultant/{id}', [DoctorController::class, 'doctorDeleteConsultant'])->name('doctor-delete-consultant');
            });
        });

        Route::prefix('hospital')->name('hospital.')->group(function () {

            Route::group(['middleware' => 'auth:hospital'], function () {
                Route::get('/dashboard/{active?}', [HospitalController::class, 'dashboard'])->name('hospital-dashboard');
                Route::post('/hospitalUpdateProfile/{id}', [HospitalController::class, 'hospitalUpdateProfile'])->name('hospital-update-profile');
                Route::post('/updateHospitalWeekPlan/{id}', [HospitalController::class, 'updateHospitalWeekPlan'])->name('update-hospital-week-plan');
                Route::post('/hospitalStoreImages', [HospitalController::class, 'hospitalStoreImages'])->name('hospital-store-images');
                Route::get('/hospitalDeleteImage/{id}', [HospitalController::class, 'hospitalDeleteImage'])->name('hospital-delete-image');
            });
        });

        Route::prefix('radiologyCenter')->name('radiology_center.')->group(function () {

            Route::group(['middleware' => 'auth:radiology_center'], function () {
                Route::get('/dashboard/{active?}', [RadiologyController::class, 'dashboard'])->name('radiology-dashboard');
                Route::post('/radiologyUpdateProfile/{id}', [RadiologyController::class, 'radiologyUpdateProfile'])->name('radiology-update-profile');
                Route::post('/updateRadiologyWeekPlan/{id}', [RadiologyController::class, 'updateRadiologyWeekPlan'])->name('update-radiology-week-plan');
                Route::post('/radiologyStoreImages', [RadiologyController::class, 'radiologyStoreImages'])->name('radiology-store-images');
                Route::get('/radiologyDeleteImage/{id}', [RadiologyController::class, 'radiologyDeleteImage'])->name('radiology-delete-image');
            });
        });

        Route::prefix('medicalCenter')->name('medical_center.')->group(function () {

            Route::group(['middleware' => 'auth:medical_center'], function () {
                Route::get('/dashboard/{active?}', [MedicalController::class, 'dashboard'])->name('medical-dashboard');
                Route::post('/medicalUpdateProfile/{id}', [MedicalController::class, 'medicalUpdateProfile'])->name('medical-update-profile');
                Route::post('/updateMedicalWeekPlan/{id}', [MedicalController::class, 'updateMedicalWeekPlan'])->name('update-medical-week-plan');
                Route::post('/medicalStoreImages', [MedicalController::class, 'medicalStoreImages'])->name('medical-store-images');
                Route::get('/medicalDeleteImage/{id}', [MedicalController::class, 'medicalDeleteImage'])->name('medical-delete-image');
            });
        });

        Route::prefix('lab')->name('lab.')->group(function () {

            Route::group(['middleware' => 'auth:lab'], function () {
                Route::get('/dashboard/{active?}', [LabController::class, 'dashboard'])->name('lab-dashboard');
                Route::post('/labUpdateProfile/{id}', [LabController::class, 'labUpdateProfile'])->name('lab-update-profile');
                Route::post('/updateLabWeekPlan/{id}', [LabController::class, 'updateLabWeekPlan'])->name('update-lab-week-plan');
                Route::post('/labStoreImages', [LabController::class, 'labStoreImages'])->name('lab-store-images');
                Route::get('/labDeleteImage/{id}', [LabController::class, 'labDeleteImage'])->name('lab-delete-image');
            });
        });


        Route::prefix('medicalEquipment')->name('medical_equipment.')->group(function () {

            Route::group(['middleware' => 'auth:medical_equipment'], function () {
                Route::get('/dashboard/{active?}', [MedicalEquipmentController::class, 'dashboard'])->name('equipment-dashboard');
                Route::post('/MedicalEquipmentUpdateProfile/{id}', [MedicalEquipmentController::class, 'MedicalEquipmentUpdateProfile'])->name('equipment-update-profile');
                Route::post('/MedicalEquipmentStoreImages', [MedicalEquipmentController::class, 'MedicalEquipmentStoreImages'])->name('equipment-store-images');
                Route::get('/MedicalEquipmentDeleteImage/{id}', [MedicalEquipmentController::class, 'MedicalEquipmentDeleteImage'])->name('equipment-delete-image');
            });
        });

        Route::prefix('medicineCompany')->name('medicine_company.')->group(function () {

            Route::group(['middleware' => 'auth:medicine_company'], function () {
                Route::get('/dashboard/{active?}', [MedicineCompanyController::class, 'dashboard'])->name('medicine_company-dashboard');
                Route::post('/medicineCompanyUpdateProfile/{id}', [medicineCompanyController::class, 'medicineCompanyUpdateProfile'])->name('medicine_company-update-profile');
                Route::post('/medicineCompanyStoreImages', [medicineCompanyController::class, 'medicineCompanyStoreImages'])->name('medicine_company-store-images');
                Route::get('/medicineCompanyDeleteImage/{id}', [medicineCompanyController::class, 'medicineCompanyDeleteImage'])->name('medicine_company-delete-image');
            });
        });

    });

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


    });
});





Route::get('/error-inactive', function () {
    return view('errors.error_inactive');
})->name('error-inactive');
Route::get('/error-pendding', function () {
    return view('errors.error_pendding');
})->name('error-pendding');



Route::get('crawler', [FrontEndController::class, 'crawler'])->name('crawler');
