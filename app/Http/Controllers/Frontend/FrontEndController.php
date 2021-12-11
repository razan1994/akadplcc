<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AddUserLocationFormRequest;
use App\Http\Requests\Frontend\Carts\AddToCartFormRequest;
use App\Http\Requests\Frontend\Carts\UpdateCartQuantityFormRequest;
use App\Http\Requests\Frontend\Carts\CreateApplyPromoCodeFormRequest;
use App\Http\Requests\Frontend\ContactUsRequests\ContactUsFormRequest;
use App\Models\AboutUs;
use App\Models\CartOperation;
use App\Models\CartSale;
use App\Models\CartTemp;
use App\Models\ContactUs;
use App\Models\ContactUsRequest;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\ProductWishlist;
use App\Models\PromoCode;
use App\Models\SupportTicket;
use App\Models\TermAndCondition;
use App\Models\UsedPromoCode;
use App\Models\UserLocation;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use SoapClient;
use SoapFault;

class FrontEndController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    function showCart(){
        return view('front_end_inners.cart');
    }
}
