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
use App\Http\Controllers\Backend\Admin\CategoryController;
use App\Http\Controllers\Backend\Admin\ProductController;
use App\Http\Controllers\Backend\Admin\OrderController;
use App\Http\Controllers\Backend\Admin\AboutUsController;
use App\Http\Controllers\Backend\Admin\BannerController;
use App\Http\Controllers\Backend\Admin\TermAndConditionController;
use App\Http\Controllers\Backend\Admin\PrivacyPolicyController;
use App\Http\Controllers\Backend\Admin\FaqController;
use App\Http\Controllers\Backend\Admin\SliderController;
use App\Http\Controllers\Backend\Admin\ContactUsController;
use App\Http\Controllers\Backend\Admin\PromoCodeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\FrontEndController;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    // ==================================================================================================================
    // ============================================= Shared Auth Routes =================================================
    // ==================================================================================================================
    Route::group(['middleware' => 'auth:customer,super_admin,web'], function () {
        Route::get('/welcomeAuth', [WelcomeController::class, 'welcome'])->name('welcomeAuth');
        Route::get('/categoriesAuth', [FrontEndController::class, 'categories'])->name('categoriesAuth');
        Route::get('/productsAuth', [FrontEndController::class, 'products'])->name('productsAuth');
        Route::get('/productDetailsAuth/{product_id}', [FrontEndController::class, 'productDetails'])->name('productDetailsAuth');
        Route::get('/productWishlistStore/{product_id}', [FrontEndController::class, 'productWishlistStore'])->name('productWishlistStore');
        Route::get('/productWishlistShow', [FrontEndController::class, 'productWishlistShow'])->name('productWishlistShow');
        Route::get('/aboutUsAuth', [FrontEndController::class, 'aboutUs'])->name('aboutUsAuth');
        Route::get('/contactUsAuth', [FrontEndController::class, 'contactUs'])->name('contactUsAuth');
        Route::get('/faqsAuth', [FrontEndController::class, 'faqs'])->name('faqsAuth');
        Route::get('/privacyPoliciesAuth', [FrontEndController::class, 'privacyPolicies'])->name('privacyPoliciesAuth');
        Route::get('/termsAndConditionsAuth', [FrontEndController::class, 'termsAndConditions'])->name('termsAndConditionsAuth');
        Route::post('/contactUsRequestAuth', [FrontEndController::class, 'contactUsRequest'])->name('contactUsRequestAuth');
        Route::get('/addToCartAuth/{product_id}', [FrontEndController::class, 'addToCart'])->name('addToCartAuth');
        Route::get('/deleteFromCartAuth/{cart_temp_id}', [FrontEndController::class, 'deleteFromCart'])->name('deleteFromCartAuth');
        Route::get('/cartAuth', [FrontEndController::class, 'cart'])->name('cartAuth');
        Route::post('/checkoutAuth', [FrontEndController::class, 'checkout'])->name('checkoutAuth');
        Route::get('/callbackPaymentAuth', [FrontEndController::class, 'callbackPayment'])->name('callbackPaymentAuth');
        Route::get('/errorPaymentAuth', [FrontEndController::class, 'errorPayment'])->name('errorPaymentAuth');
        Route::post('/applyPromoCode', [FrontEndController::class, 'applyPromoCode'])->name('applyPromoCode');
        Route::get('/updateCartQuantityAuth', [FrontEndController::class, 'updateCartQuantity'])->name('updateCartQuantityAuth');
        Route::get('/showOrderDetailsAuth/{order_id}', [FrontEndController::class, 'showOrderDetails'])->name('showOrderDetailsAuth');

        Route::get('/get_shipping_cities', [FrontEndController::class, 'get_shipping_cities'])->name('get_shipping_cities');
        Route::get('/get_city_retails', [FrontEndController::class, 'get_city_retails'])->name('get_city_retails');
    });

    // ==================================================================================================================
    // ============================================= Shared Guest Routes ================================================
    // ==================================================================================================================
    Route::group(['middleware' => 'checkAuth'], function () {
        Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
        Route::get('/categories', [FrontEndController::class, 'categories'])->name('categories');
        Route::get('/products', [FrontEndController::class, 'products'])->name('products');
        Route::get('/productDetails/{product_id}', [FrontEndController::class, 'productDetails'])->name('productDetails');
        // Route::get('/wishlist', [FrontEndController::class, 'wishlist'])->name('wishlist');
        Route::get('/aboutUs', [FrontEndController::class, 'aboutUs'])->name('aboutUs');
        Route::get('/contactUs', [FrontEndController::class, 'contactUs'])->name('contactUs');
        Route::post('/contactUsRequest', [FrontEndController::class, 'contactUsRequest'])->name('contactUsRequest');
        Route::get('/faqs', [FrontEndController::class, 'faqs'])->name('faqs');
        Route::get('/privacyPolicies', [FrontEndController::class, 'privacyPolicies'])->name('privacyPolicies');
        Route::get('/termsAndConditions', [FrontEndController::class, 'termsAndConditions'])->name('termsAndConditions');
        Route::get('/addToCart/{product_id}', [FrontEndController::class, 'addToCart'])->name('addToCart');
        Route::get('/deleteFromCart/{product_id}', [FrontEndController::class, 'deleteFromCart'])->name('deleteFromCart');
        // Route::get('/cart', [FrontEndController::class, 'cart'])->name('cart');

        Route::post('/checkout', [FrontEndController::class, 'checkout'])->name('checkout');
        Route::get('/callbackPayment', [FrontEndController::class, 'callbackPayment'])->name('callbackPayment');
        Route::get('/errorPayment', [FrontEndController::class, 'errorPayment'])->name('errorPayment');

        Route::get('/updateCartQuantity', [FrontEndController::class, 'updateCartQuantity'])->name('updateCartQuantity]');
        // Route::get('/showOrderDetails/{order_id}', [FrontEndController::class, 'showOrderDetails'])->name('showOrderDetails');
    });

    // ==================================================================================================================
    // ============================================= Frontend Routes ====================================================
    // ==================================================================================================================
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/loginRegister', [CustomerController::class, 'loginRegister'])->name('loginRegister');
        Route::post('/login', [CustomerController::class, 'login'])->name('login');
        Route::get('/logout', [CustomerController::class, 'logout'])->name('logout');
        Route::post('/register', [CustomerController::class, 'register'])->name('register');
        Route::group(['middleware' => ['auth:customer']], function () {
            Route::get('/profile', [CustomerController::class, 'profile'])->name('profile');
            Route::post('/productReview', [CustomerController::class, 'productReview'])->name('productReview');
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
            Route::get('/create', [UserController::class, 'create'])->name('users-create');
            Route::post('/store', [UserController::class, 'store'])->name('users-store');
            Route::get('/index', [UserController::class, 'index'])->name('users-index');
            Route::get('show/{id}/{user_type}', [UserController::class, 'show'])->name('users-show');
            Route::get('edit/{id}/{user_type}', [UserController::class, 'edit'])->name('users-edit');
            Route::post('update/{id}', [UserController::class, 'update'])->name('users-update');
            Route::get('/acceptSingle/{id}/{user_type}', [UserController::class, 'acceptSingle'])->name('users-acceptSingle');
            Route::get('/rejectSingle/{id}/{user_type}', [UserController::class, 'rejectSingle'])->name('users-rejectSingle');
            Route::get('/activeInactiveSingle/{id}/{user_type}', [UserController::class, 'activeInactiveSingle'])->name('users-activeInactiveSingle');
        });

        // Category Routes :
        // ==============================================================================
        Route::group(['prefix' => 'categories'], function () {
            Route::get('/create', [CategoryController::class, 'create'])->name('categories-create');
            Route::post('/store', [CategoryController::class, 'store'])->name('categories-store');
            Route::get('/index', [CategoryController::class, 'index'])->name('categories-index');
            Route::get('show/{id}', [CategoryController::class, 'show'])->name('categories-show');
            Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories-edit');
            Route::post('update/{id}', [CategoryController::class, 'update'])->name('categories-update');
            Route::get('activeInactiveSingle/{id}', [CategoryController::class, 'activeInactiveSingle'])->name('categories-activeInactiveSingle');
            Route::get('softDelete/{id}', [CategoryController::class, 'softDelete'])->name('categories-softDelete');
            Route::get('showSoftDelete', [CategoryController::class, 'showSoftDelete'])->name('categories-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [CategoryController::class, 'softDeleteRestore'])->name('categories-softDeleteRestore');
            Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('categories-destroy');
        });

        // Product Routes :
        // ==============================================================================
        Route::group(['prefix' => 'products'], function () {
            Route::get('/create', [ProductController::class, 'create'])->name('products-create');
            Route::post('/store', [ProductController::class, 'store'])->name('products-store');
            Route::get('/index', [ProductController::class, 'index'])->name('products-index');
            Route::get('show/{id}', [ProductController::class, 'show'])->name('products-show');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products-edit');
            Route::post('update/{id}', [ProductController::class, 'update'])->name('products-update');
            Route::get('activeInactiveSingle/{id}', [ProductController::class, 'activeInactiveSingle'])->name('products-activeInactiveSingle');
            Route::get('softDelete/{id}', [ProductController::class, 'softDelete'])->name('products-softDelete');
            Route::get('showSoftDelete', [ProductController::class, 'showSoftDelete'])->name('products-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [ProductController::class, 'softDeleteRestore'])->name('products-softDeleteRestore');
            Route::get('destroy/{id}', [ProductController::class, 'destroy'])->name('products-destroy');
            Route::post('addImages/{id}', [ProductController::class, 'AddImages'])->name('products-addImages');
            Route::get('deleteImages/{id}', [ProductController::class, 'deleteImages'])->name('products-deleteImages');
        });

        // Orders Routes :
        // ==============================================================================
        Route::group(['prefix' => 'orders'], function () {
            Route::get('/index', [OrderController::class, 'index'])->name('orders-index');
            Route::get('show/{id}', [OrderController::class, 'show'])->name('orders-show');
            Route::get('sendToDelivery/{id}', [OrderController::class, 'sendToDelivery'])->name('orders-sendToDelivery');
        });

        // About Us Routes :
        // ==============================================================================
        Route::group(['prefix' => 'about_us'], function () {
            Route::get('/index', [AboutUsController::class, 'index'])->name('about_us-index');
            Route::get('edit', [AboutUsController::class, 'edit'])->name('about_us-edit');
            Route::post('update', [AboutUsController::class, 'update'])->name('about_us-update');
        });

        // Banners Routes :
        // ==============================================================================
        Route::group(['prefix' => 'banners'], function () {
            Route::get('/index', [BannerController::class, 'index'])->name('banners-index');
            Route::get('edit', [BannerController::class, 'edit'])->name('banners-edit');
            Route::post('update', [BannerController::class, 'update'])->name('banners-update');
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

        // FAQ Routes :
        // ==============================================================================
        Route::group(['prefix' => 'faqs'], function () {
            Route::get('/create', [FaqController::class, 'create'])->name('faqs-create');
            Route::post('/store', [FaqController::class, 'store'])->name('faqs-store');
            Route::get('/index', [FaqController::class, 'index'])->name('faqs-index');
            Route::get('show/{id}', [FaqController::class, 'show'])->name('faqs-show');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('faqs-edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('faqs-update');
            Route::get('activeInactiveSingle/{id}', [FaqController::class, 'activeInactiveSingle'])->name('faqs-activeInactiveSingle');
            Route::get('softDelete/{id}', [FaqController::class, 'softDelete'])->name('faqs-softDelete');
            Route::get('showSoftDelete', [FaqController::class, 'showSoftDelete'])->name('faqs-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [FaqController::class, 'softDeleteRestore'])->name('faqs-softDeleteRestore');
            Route::get('destroy/{id}', [FaqController::class, 'destroy'])->name('faqs-destroy');
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

        // Promo Code Routes :
        // ==============================================================================
        Route::group(['prefix' => 'promo_codes'], function () {
            Route::get('/create', [PromoCodeController::class, 'create'])->name('promo_codes-create');
            Route::post('/store', [PromoCodeController::class, 'store'])->name('promo_codes-store');
            Route::get('/index', [PromoCodeController::class, 'index'])->name('promo_codes-index');
            Route::get('show/{id}', [PromoCodeController::class, 'show'])->name('promo_codes-show');
            Route::get('edit/{id}', [PromoCodeController::class, 'edit'])->name('promo_codes-edit');
            Route::post('update/{id}', [PromoCodeController::class, 'update'])->name('promo_codes-update');
            Route::get('activeInactiveSingle/{id}', [PromoCodeController::class, 'activeInactiveSingle'])->name('promo_codes-activeInactiveSingle');
            Route::get('softDelete/{id}', [PromoCodeController::class, 'softDelete'])->name('promo_codes-softDelete');
            Route::get('showSoftDelete', [PromoCodeController::class, 'showSoftDelete'])->name('promo_codes-showSoftDelete');
            Route::get('softDeleteRestore/{id}', [PromoCodeController::class, 'softDeleteRestore'])->name('promo_codes-softDeleteRestore');
            Route::get('destroy/{id}', [PromoCodeController::class, 'destroy'])->name('promo_codes-destroy');
        });
    });
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
