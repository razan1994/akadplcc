<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AddUserLocationFormRequest;
use App\Http\Requests\Frontend\Carts\AddToCartFormRequest;
use App\Http\Requests\Frontend\Carts\UpdateCartQuantityFormRequest;
use App\Http\Requests\Frontend\Carts\CreateApplyPromoCodeFormRequest;
use App\Http\Requests\Frontend\ContactUsRequests\ContactUsFormRequest;
use App\Http\Services\FatoorahServices;
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

    private $fatoorahServices;

    public function __construct(FatoorahServices $fatoorahServices)
    {
        $this->fatoorahServices = $fatoorahServices;
    }

    // ==========================================================================
    // ========================== Categories Function ===========================
    // ==========================================================================
    public function categories(Route $route)
    {
        try {
            return view('front_end_inners.categories');
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // =========================== Products Function ============================
    // ==========================================================================
    public function products(Request $request, Route $route)
    {
        try {
            // return $request;
            $products = new Product();
            $products = $products->select('*');

            // Search By Category ID :
            if (isset($request->category_id)) {
                $products = $products->where('category_id', $request->category_id);
            }

            // Search By Price Range (From/To) :
            if (isset($request->text)) {
                $price_range = explode('-', $request->text);
                $price_from = $price_range[0];
                $price_to = $price_range[1];

                if (isset($price_from)) {
                    $products = $products->where('sale_price', '>=', $price_from);
                }
                if (isset($price_to)) {
                    $products = $products->where('sale_price', '<=', $price_to);
                }
            }

            // Search By Product Name :
            if (isset($request->product_name)) {
                $products = $products->where('name_en', 'LIKE', '%' . $request->product_name . '%')->orWhere('name_ar', 'LIKE', '%' . $request->product_name . '%');
            }

            $products = $products->orderBy('created_at', 'asc')->get();
            return view('front_end_inners.products', compact('products'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ======================= Product Details Function =========================
    // ==========================================================================
    public function productDetails($id, Route $route)
    {
        try {
            $product = Product::find($id);
            // return $product->category->products;
            // return $product->checkWishlistByAuthUser->count();
            // return $product->productReviews;
            if ($product) {
                return view('front_end_inners.product_details', compact('product'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.product_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ======================== About Us Details Function =======================
    // ==========================================================================
    public function aboutUs(Route $route)
    {
        try {
            $aboutUs = AboutUs::get()->first();
            if ($aboutUs) {
                return view('front_end_inners.about_us', compact('aboutUs'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.record_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ======================== Contact Details Function ========================
    // ==========================================================================
    public function contactUs(Route $route)
    {
        try {
            $contactUs = ContactUs::get()->first();
            if ($contactUs) {
                return view('front_end_inners.contact_us', compact('contactUs'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.record_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ======================== Contact Details Function ========================
    // ==========================================================================
    public function contactUsRequest(ContactUsFormRequest $request, Route $route)
    {
        try {
            $created_data = [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            // Start the transaction
            DB::transaction(function () use ($created_data) {
                ContactUsRequest::create($created_data);
            });
            return redirect()->back()->with('success', trans('front_end.sent_successfully'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ============================== FAQ Function ==============================
    // ==========================================================================
    public function faqs(Route $route)
    {
        try {
            $faqs = Faq::where('status', 1)->get();
            if ($faqs) {
                return view('front_end_inners.faqs', compact('faqs'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.record_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ======================= Privacy Policies Function ========================
    // ==========================================================================
    public function privacyPolicies(Route $route)
    {
        try {
            $privacyPolicies = PrivacyPolicy::where('privacy_policy_status', 1)->get();
            if ($privacyPolicies) {
                return view('front_end_inners.privacy_policies', compact('privacyPolicies'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.record_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ======================= Terms & Conditions Function ======================
    // ==========================================================================
    public function termsAndConditions(Route $route)
    {
        try {
            $termsAndConditions = TermAndCondition::where('term_and_condition_status', 1)->get();
            if ($termsAndConditions) {
                return view('front_end_inners.term_and_conditions', compact('termsAndConditions'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.record_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ===================== Add To Cart Function =====================
    // ================================================================
    public function addToCart(AddToCartFormRequest $request, $product_id, Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                $product = Product::find($product_id);
                if ($product) {
                    $cartTemp = CartTemp::where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType(), 'product_id' => $product->id])->get()->first();
                    if ($cartTemp) {
                        $updated_data = [
                            'user_id' => auth()->user()->id,
                            'user_type' => $this->authUserType(),
                            'product_id' => $product->id,
                            'quantity' => $cartTemp->quantity + $request->quantity,
                        ];
                        DB::transaction(function () use ($updated_data, $product) {
                            DB::table('cart_temps')->where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType(), 'product_id' => $product->id])->update($updated_data);
                        });
                        return redirect()->back()->with('success', trans('front_end.cart_update_success'));
                    } else {
                        $created_data = [
                            'user_id' => auth()->user()->id,
                            'user_type' => $this->authUserType(),
                            'product_id' => $product->id,
                            'quantity' => $request->quantity,
                        ];
                        DB::transaction(function () use ($created_data) {
                            CartTemp::create($created_data);
                        });
                        return redirect()->back()->with('success', trans('front_end.product_add_success'));
                    }
                } else {
                    return redirect()->back()->with('danger', trans('front_end.product_not_found'));
                }
            } else {
                return view('front_end_inners.customer.login_register');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ===================== Add To Cart Function =====================
    // ================================================================
    public function deleteFromCart($cart_temp_id, Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                $cartTemp = CartTemp::find($cart_temp_id);
                if ($cartTemp) {
                    $cartTemp->delete();
                    return redirect()->back()->with('success', trans('front_end.product_remove_success'));
                } else {
                    return redirect()->back()->with('danger', trans('front_end.product_not_found'));
                }
            } else {
                return view('front_end_inners.customer.login_register');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ========================= Cart Details Function ==========================
    // ==========================================================================
    public function cart(Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                $usedPromoCode = UsedPromoCode::where(['customer_id' => auth()->user()->id, 'status' => 2])->get()->first(); // 2 => Unused
                if ($usedPromoCode) {
                    if ($usedPromoCode->promoCode->status == 'Active' && $usedPromoCode->promoCode->expiration_date >= date('Y-m-d')) {
                        return view('front_end_inners.cart', compact('usedPromoCode'));
                    }
                }
                return view('front_end_inners.cart');
            } else {
                return redirect()->back()->with('danger', trans('front_end.login_to_view_cart'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ====================== Checkout Details Function =========================
    // ==========================================================================
    public function checkout(AddUserLocationFormRequest $request, Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                $cartTemps = CartTemp::where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType()])->get();
                if ($cartTemps->count() > 0) {
                    $sub_total = $total = 0;
                    foreach ($cartTemps as $cartTemp) {
                        if ($cartTemp->product->on_sale_price_status == 'Active') {
                            $sub_total += $cartTemp->product->on_sale_price * $cartTemp->quantity;
                            $sub_total_product = $cartTemp->product->on_sale_price * $cartTemp->quantity;
                        } else {
                            $sub_total += $cartTemp->product->sale_price * $cartTemp->quantity;
                            $sub_total_product = $cartTemp->product->sale_price * $cartTemp->quantity;
                        }
                    }
                    $total += $sub_total + (($sub_total * 15) / 100);
                    // return $total;
                    $discount = null;
                    $promo_code_id = null;

                    $usedPromoCode = UsedPromoCode::where(['customer_id' => auth()->user()->id, 'status' => 2])->get()->first(); // 2 => Unused
                    if ($usedPromoCode) {
                        if ($usedPromoCode->promoCode->status == 'Active' && $usedPromoCode->promoCode->expiration_date >= date('Y-m-d')) {
                            if ($usedPromoCode->promoCode->promo_type == 'Percentage') {
                                $discount = ($total * $usedPromoCode->promoCode->promo_value) / 100;
                                $total = $total - (($total * $usedPromoCode->promoCode->promo_value) / 100);
                            } else {
                                $discount = $usedPromoCode->promoCode->promo_value;
                                $total = $total - $usedPromoCode->promoCode->promo_value;
                            }
                            $promo_code_id = $usedPromoCode->promo_code_id;
                        }
                    }
                    // return 'no';
                    // return $total;
                    $check_value = $request->check_value;


                    // ===================================================================
                    // ====================== Start Payment Section ======================
                    // ===================================================================
                    $paymentData = [
                        'CustomerName' => auth()->user()->name_en,
                        'NotificationOption' => 'LNK',
                        'InvoiceValue' => $total + 25,
                        'CustomerEmail' => auth()->user()->email,
                        'CustomerMobile' => auth()->user()->phone,
                        // 'CallBackUrl' => Auth::check() ? 'http://juman.blueray/callbackPaymentAuth' : 'http://juman.blueray/callbackPayment',
                        // 'CallBackUrl' => Auth::check() ? 'https://br-ws.com/juman/public/callbackPaymentAuth' : 'https://br-ws.com/juman/public/callbackPayment',
                        'CallBackUrl' => Auth::check() ? 'https://juman.sa.com/juman/public/callbackPaymentAuth' : 'https://br-ws.com/juman/public/callbackPayment',
                        // 'ErrorUrl' => Auth::check() ? 'http://juman.blueray/errorPaymentAuth' : 'http://juman.blueray/errorPayment',
                        // 'ErrorUrl' => Auth::check() ? 'https://br-ws.com/public/errorPaymentAuth' : 'https://br-ws.com/juman/public/errorPayment',
                        'ErrorUrl' => Auth::check() ? 'https://juman.sa.com/public/errorPaymentAuth' : 'https://br-ws.com/juman/public/errorPayment',
                        'Language' => 'en',
                        'DisplayCurrencyIso' => 'SAR',
                    ];

                    $responsePaymentData = $this->fatoorahServices->sendPayment($paymentData);
                    if ($responsePaymentData['IsSuccess'] = true) {
                        DB::transaction(function () use ($cartTemps, $sub_total, $total, $discount, $promo_code_id, $usedPromoCode, $responsePaymentData, $request) {

                            $location_id = null;

                            if ($request->check_value == 1) {
                                $location_id = $request->location_id;
                            } else {
                                $location = UserLocation::create([
                                    'user_id' => auth()->user()->id,
                                    'country' => $request->shipping_country,
                                    'city' => $request->shipping_city,
                                    'retail' => $request->shipping_retail,
                                    'phone' => $request->shipping_phone,
                                    'phone_extra' => $request->phone_extra,
                                    'address_2' => $request->shipping_address
                                ]);

                                $location_id = $location->id;
                            }


                            $cartSale = CartSale::create([
                                'user_id' => auth()->user()->id,
                                'location_id' => $location_id,
                                'user_type' => $this->authUserType(),
                                'product_count' => $cartTemps->count(),
                                'discount' => $discount,
                                'promo_code_id' => $promo_code_id,
                                'sub_total' => $sub_total,
                                'total' => $total,
                                'status' => 1, // 1 => Pendding
                                'payment_status' => 1, // 1 => Pendding
                                'invoice_id' => $responsePaymentData['Data']['InvoiceId'],
                                'invoice_url' => $responsePaymentData['Data']['InvoiceURL'],
                                'delivery_status' => null, // 1 => Pendding,
                            ]);
                            foreach ($cartTemps as $cartTemp) {
                                CartOperation::create([
                                    'cart_sale_id' => $cartSale->id,
                                    'product_id' => $cartTemp->product_id,
                                    'unit_price' => $cartTemp->product->on_sale_price_status == 'Active' ? $cartTemp->product->on_sale_price : $cartTemp->product->sale_price,
                                    'sub_total' => $cartTemp->product->on_sale_price * $cartTemp->quantity,
                                    'total' => ($cartTemp->product->on_sale_price * $cartTemp->quantity) + (($cartTemp->product->on_sale_price * $cartTemp->quantity * 15) / 100),
                                    'quantity' => $cartTemp->quantity,
                                ]);
                            }
                            if ($usedPromoCode) {
                                DB::table('used_promo_codes')->where(['customer_id' => auth()->user()->id, 'promo_code_id' => $usedPromoCode->promo_code_id])->update(['status' => 1]); // 1 => Used
                            }
                            CartTemp::where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType()])->delete();
                        });
                        $myOrder = CartSale::where('invoice_id', $responsePaymentData['Data']['InvoiceId'])->get()->first();
                        return redirect()->route('showOrderDetailsAuth', $myOrder->id)->with('success', trans('front_end.transaction_complete_success'));
                    } else {
                        return redirect()->route('cartAuth')->with('danger', trans('front_end.payment_not_completed'));
                    }
                    // ===================================================================
                    // ======================== End Payment Section ======================
                    // ===================================================================
                } else {
                    return redirect()->back()->with('danger', trans('front_end.no_priducts'));
                }
            } else {
                return view('front_end_inners.customer.login_register');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ====================== Callback Payment Function =========================
    // ==========================================================================
    public function callbackPayment(Request $request, Route $route)
    {
        try {
            // return $request;
            $data = [
                'Key' => $request->paymentId,
                'KeyType' => 'PaymentId',
            ];
            $responsePaymentData = $this->fatoorahServices->getPaymentStatus($data);
            if ($responsePaymentData['IsSuccess'] = true) {
                DB::transaction(function () use ($responsePaymentData) {
                    DB::table('cart_sales')->where('invoice_id', $responsePaymentData['Data']['InvoiceId'])->update(['payment_status' => 2]); // 2 => Accepted
                });
            }
            $myOrder = CartSale::where('invoice_id', $responsePaymentData['Data']['InvoiceId'])->get()->first();
            return redirect()->route('showOrderDetailsAuth', $myOrder->id)->with('success', trans('front_end.payment_success'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ========================= Error Payment Function =========================
    // ==========================================================================
    public function errorPayment(Request $request, Route $route)
    {
        try {
            return redirect()->back()->with('danger', trans('front_end.error_payment'));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }


    // ================================================================
    // ================= Update Cart Quantity Function ================
    // ================================================================
    public function updateCartQuantity(UpdateCartQuantityFormRequest $request, Route $route)
    {
        try {
            // return $request;
            if (Auth::guard('customer')->check()) {
                $cartTemp = CartTemp::where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType()])->get();
                if ($cartTemp && $cartTemp->count() > 0) {
                    foreach ($request->product_ids as $key => $product_id) {
                        DB::transaction(function () use ($request, $key) {
                            DB::table('cart_temps')->where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType(), 'product_id' => $request->product_ids[$key]])->update(['quantity' => $request->quantity[$key]]);
                        });
                    }
                    return redirect()->back()->with('success', trans('front_end.cart_update_success'));
                } else {
                    return redirect()->back()->with('danger', trans('front_end.cart_is_empty'));
                }
            } else {
                return view('front_end_inners.customer.login_register');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ==========================================================================
    // ========================= Cart Details Function ==========================
    // ==========================================================================
    public function showOrderDetails($order_id, Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                $cartSale = CartSale::find($order_id);
                if ($cartSale) {
                    $request_api = Http::get('https://track.smsaexpress.com/SecomRestWebApi/api/getTracking?awbNo=' . $cartSale->refNo . '&passkey=McE@6257');
                    if ($request_api->getStatusCode() == 200) {

                        $api = json_decode($request_api);
                        $tracking = json_decode(json_encode($api->Tracking[0]));

                        $tracking = collect($tracking);
                    }

                    if (isset($tracking)) {

                        return view('front_end_inners.show_order_details', compact('cartSale', 'tracking'));
                    } else {
                        return view('front_end_inners.show_order_details', compact('cartSale'));
                    }
                } else {
                    return redirect()->back()->with('danger', trans('front_end.record_not_found'));
                }
            } else {
                return redirect()->back()->with('danger', trans('front_end.login_to_view_cart'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // =================== Apply Promo Code Function ==================
    // ================================================================
    public function applyPromoCode(CreateApplyPromoCodeFormRequest $request, Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                $cartTemp = CartTemp::where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType()])->get();
                if ($cartTemp && $cartTemp->count() > 0) {
                    $promoCode = PromoCode::where('promo_code', $request->promo_code)->get()->first();
                    if ($promoCode) {
                        $usedPromoCode = UsedPromoCode::where(['customer_id' => auth()->user()->id, 'promo_code_id' => $promoCode->id])->get()->first();
                        if ($usedPromoCode) {
                            return redirect()->back()->with('danger', trans('front_end.copoun_applied'));
                        }
                        if ($promoCode->status == 'Active') {
                            if ($promoCode->expiration_date >= date('Y-m-d')) {
                                DB::transaction(function () use ($promoCode) {
                                    UsedPromoCode::create([
                                        'customer_id' => auth()->user()->id,
                                        'promo_code_id' => $promoCode->id,
                                        'status' => 2,
                                    ]);
                                });
                                return redirect()->back()->with('success', trans('front_end.copoun_activated'));
                            } else {
                                return redirect()->back()->with('danger', trans('front_end.copount_ex'));
                            }
                        } else {
                            return redirect()->back()->with('danger', trans('front_end.copoun_invalid'));
                        }
                    } else {
                        return redirect()->back()->with('danger', trans('front_end.copoun_not_found'));
                    }
                } else {
                    return redirect()->back()->with('danger', trans('front_end.cart_is_empty'));
                }
            } else {
                return view('front_end_inners.customer.login_register');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // =========================================================================
    // ============== Customer Product Wishlist Store Function =================
    // ==================== Created By : Layth Al-Dwairi =======================
    // =========================================================================
    function productWishlistStore($id, Route $route)
    {
        try {
            $productWishlist = ProductWishlist::where(['product_id' => $id, 'customer_id' => auth()->user()->id])->get()->first();
            if ($productWishlist) {
                // Delete From Wishlist :
                // ==================================================
                $productWishlist->delete();
                return redirect()->back()->with('success', trans('front_end.wishlist_removed'));
            } else {
                $product = Product::find($id);
                // Add To Wishlist :
                // ==================================================
                if ($product) {
                    // Start the transaction
                    DB::transaction(function () use ($id) {
                        ProductWishlist::create([
                            'product_id' => $id,
                            'customer_id' => auth()->user()->id
                        ]);
                    });
                    return redirect()->back()->with('success', trans('front_end.wishlist_added'));
                } else {
                    return redirect()->back()->with('danger', trans('front_end.product_not_found'));
                }
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }
    // ==========================================================================
    // =============== Customer Product Wishlist Show Function ==================
    // ===================== Created By : Layth Al-Dwairi =======================
    // ==========================================================================
    function productWishlistShow(Route $route)
    {
        try {
            $customer = Customer::where('id', auth()->user()->id)->get();
            if ($customer) {
                $productWishlists = ProductWishlist::where(['customer_id' => auth()->user()->id])->get();
                return view('front_end_inners.customer.product_wishlist_show', compact('productWishlists'));
            } else {
                return redirect()->back()->with('danger', trans('front_end.user_not_found'));
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }




    // ==========================================================================
    // =============== Get Shipping Cities Provided By Smsa Ajax ================
    // ===================== Created By : Mohammed Salah ========================
    // ==========================================================================
    function get_shipping_cities()
    {


        //  soap api using wsdl

        $soapFunction = 'getRTLCities';
        $soapFunctionParameters = array('passkey' => 'McE@6257');
        $opts = array(
            'ssl' => array('ciphers' => 'RC4-SHA', 'verify_peer' => false, 'verify_peer_name' => false)
        );
        $params = array('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180, 'stream_context' => stream_context_create($opts));
        $url = "http://track.smsaexpress.com/SECOM/SMSAwebServiceIntl.asmx?wsdl";

        try {

            $client = new SoapClient($url, $params);
            $soapResult = $client->getRTLCities($soapFunctionParameters);
            $str = simplexml_load_string($soapResult->getRTLCitiesResult->any);
            $json = json_encode($str);
            $array = json_decode($json, TRUE);
            $obj = $array['NewDataSet']['RetailCities'];

            if (count($obj) > 0) {
                return response()->json(['status' => true, 'cities' => $obj]);
            } else {
                return response()->json(['status' => false]);
            }
        } catch (SoapFault $fault) {
            echo '<br>' . $fault;
        }
    }




    // ==========================================================================
    // =============== Get Shipping City Retails Provided By Smsa Ajax ==========
    // ===================== Created By : Mohammed Salah ========================
    // ==========================================================================
    function get_city_retails(Request $request)
    {


        //  soap api using wsdl

        $soapFunction = 'getRTLRetails';
        $soapFunctionParameters = array('passkey' => 'McE@6257', 'cityCode' => $request->city);
        $opts = array(
            'ssl' => array('ciphers' => 'RC4-SHA', 'verify_peer' => false, 'verify_peer_name' => false)
        );
        $params = array('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false, 'soap_version' => SOAP_1_2, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180, 'stream_context' => stream_context_create($opts));
        $url = "http://track.smsaexpress.com/SECOM/SMSAwebServiceIntl.asmx?wsdl";

        try {
            $client = new SoapClient($url, $params);
            $soapResult = $client->getRTLRetails($soapFunctionParameters);
            $str = simplexml_load_string($soapResult->getRTLRetailsResult->any);
            $json = json_encode($str);
            $array = json_decode($json, TRUE);
            $obj = $array['NewDataSet']['RetailsList'];

            if (count($obj) > 0) {
                return response()->json(['status' => true, 'retails' => $obj]);
            } else {
                return response()->json(['status' => false]);
            }
        } catch (SoapFault $fault) {
            echo '<br>' . $fault;
        }
    }
}
