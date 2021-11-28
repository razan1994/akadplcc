<?php

namespace App\Http\Controllers\Frontend;

use App\Models\SupportTicket;
use App\Traits\SharedMethod;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Customers\CustomerRegisterFormRequest;
use App\Http\Requests\Frontend\Customers\CustomerLoginFormRequest;
use App\Http\Requests\Frontend\Customers\ProductReviewFormRequest;
use App\Models\CartSale;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductReview;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // ========================================================================
    // ============== Customer show Login/Register Form Function ==============
    // ========================================================================
    public function loginRegister(Route $route)
    {
        try {
            if (Auth::guard('customer')->check()) {
                return redirect()->intended(route('customer.profile'));
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
    // ======================== Login Function ========================
    // ================================================================
    public function login(CustomerLoginFormRequest $request, Route $route)
    {
        try {
            // Attempt to log the user in
            if (Auth::guard('customer')->attempt(['email' => $request->email_login, 'password' => $request->password_login])) {
                return redirect()->intended(route('customer.profile'));
            }
            return redirect()->back()->withInput($request->only('username', 'remember'))->with('danger', 'The Username or password is incorrect');
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

    // ========================================================================
    // ================== Customer Register Request Function ==================
    // ========================================================================
    public function register(CustomerRegisterFormRequest $request, Route $route)
    {
        try {
            // Upload Image Section :
            if (isset($request->profile_photo_path)) {
                $orginal_image = $request->file('profile_photo_path');
                $upload_location = 'storage/profile-photos/';
                $original_name = $orginal_image->getClientOriginalName();
                $last_image = $this->saveFileWithOriginalName('customers', 'image', $orginal_image, $original_name, $upload_location);
            } else {
                $last_image = null;
            }

            $created_data = [
                'name_ar' => $request->name_ar,
                'name_en' => $request->name_en,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'profile_photo_path' => $last_image,
                'user_status' => 2, // Active
                'created_by' => 1,
            ];

            // Start the transaction
            DB::transaction(function () use ($created_data) {
                Customer::create($created_data);
            });
            return redirect()->route('customer.loginRegister')->with('success', 'Registration completed successfully, please wait for your registration to be approved');
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
    // ======================= Profile Function =======================
    // ================================================================
    public function profile()
    {
        if (Auth::guard('customer')->check()) {
            $customerOrders = CartSale::where(['user_id' => auth()->user()->id, 'user_type' => $this->authUserType()])->get();
            return view('front_end_inners.customer.profile', compact('customerOrders'));
        } else {
            return view('front_end_inners.customer.login_register');
        }
    }

    // ================================================================
    // ======================== Logout Function =======================
    // ================================================================
    public function logout(Request $request)
    {
        auth::logout();
        $request->session()->invalidate();
        return redirect(route('welcome'));
    }

    
    // ========================================================================
    // ======================== Product Job Function ==========================
    // ===================== Created By : Layth Al-Dwairi =====================
    // ========================================================================
    public function productReview(ProductReviewFormRequest $request, Route $route)
    {
        try {
            $review = ProductReview::where([
                'user_id' => auth()->user()->id,
                'user_type' => $this->authUserType(),
                'product_id' => $request->product_id,
            ])->get()->first();

            if ($review) {
                return redirect()->back()->with(['danger' => 'You have already rated this product']);
            } else {
                // Start the transaction
                DB::transaction(function () use ($request) {
                    ProductReview::create([
                        'user_id' => auth()->user()->id,
                        'user_type' => $this->authUserType(),
                        'product_id' => $request->product_id,
                        'review_value' => $request->review_value,
                        'review_note' => $request->review_note,
                    ]);
                });
                return redirect()->back()->with(['success' => 'Thank you for your review', 'active_div' => $request->active_div]);
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
}
