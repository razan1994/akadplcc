<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsRequests\ContactUsFormRequest;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\ContactUsRequest;
use App\Models\Course;
use App\Models\PaymentWallet;
use App\Models\Research;
use App\Models\Student;
use App\Models\SupportTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FrontendController extends Controller
{
    function aboutUs(Route $route)
    {
        try {
            $about = AboutUs::first();

            return view('front_end_inners.about', compact('about'));
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



    function contactUs(Route $route)
    {
        try {
            $contact = ContactUs::first();

            return view('front_end_inners.contact', compact('contact'));
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


    function contactReauest(Route $route, ContactUsFormRequest $request)
    {
        try {

            ContactUsRequest::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]);

            return redirect()->back()->with('success', 'تم ارسال رسالتك بنجاح');
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



    function courseDetails(Route $route, $slug = '')
    {

        try {
            $course = Course::where('slug', $slug)->first();
            $paymentWallets = PaymentWallet::where('status', 'active')->get();
            if ($course) {
                return view('front_end_inners.courseDetails', compact('course', 'paymentWallets'));
            } else {
                return redirect()->back()->with('success', 'الدورة التي تحاول الوصول اليها غير موجودة في السجلات');
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





    function courses(Route $route)
    {

        try {


            $courses = Course::where('status', 2)
                ->whereHas('sections')
                ->orderBy('created_at', 'desc')->paginate(6);

            return view('front_end_inners.courses', compact('courses'));
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



    function newsDetails(Route $route, $slug)
    {

        try {
            $news = Blog::where('slug', $slug)->first();
            if ($news) {
                $relateds = Blog::where('status', 1)->where('id', '!=', $news->id)->latest()->take(9)->get();
                return view('front_end_inners.newsDetails', compact('news', 'relateds'));
            } else {
                return redirect()->back()->with('success', 'الاخبار التي تحاول الوصول اليها غير موجودة في السجلات');
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

    function news(Route $route, $categorySlug = '')
    {
        try {
            return view('front_end_inners.news', compact('categorySlug'));
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


    public function redirectToProvider($provider)
    {
        if ($provider == 'google') {
            return Socialite::driver('google')->setScopes(['openid', 'email'])->redirect();
        } else {
            return Socialite::driver($provider)->redirect();
        }
    }


    public function handleProviderCallback($provider)
    {
        if ($provider == 'facebook') {
            $driver = Socialite::driver('facebook')->fields([
                'name',
                'first_name',
                'last_name',
                'email',
                'gender',
                'verified'
            ]);
        } else {
            $driver = Socialite::driver('google')->setScopes(['openid', 'profile', 'email']);
        }
        $user = Socialite::driver($provider)->stateless()->user();
        $first_name = $user->getName();
        $last_name = $user->getName();
        switch ($provider) {
            case 'facebook':
                $first_name = $user->offsetGet('first_name');
                $last_name = $user->offsetGet('last_name');
                break;

                // case 'google':
                //    $first_name = $user->user['givenName']['givenName'];
                //    $last_name = $user->user['familyName']['familyName'];
                //    break;

                // You can also add more provider option e.g. linkedin, twitter etc.

            default:
                $first_name = $user->getName();
                $last_name = $user->getName();
        }

        if ($user->getEmail() == null) {
            $users = Student::where('provider', $provider)->where('provider_id', $user->getId())->first();
        } else {
            $users = Student::where('email', $user->getEmail())->first();
        }

        if ($users) {
            Auth::guard('student')->login($users);
            return redirect()->route('welcome');
        } else {

            if ($user->getEmail() == null) {
                $user_email = $user->getId() . "@" . $provider . ".com";
            } else {
                $user_email = $user->getEmail();
            }

            $provider_id = $user->getId();
            $provider_name = $provider;
            $newUser = Student::create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'username' => $user->getName(),
                'email' => $user_email,
                'user_status' => 2,
                'image_url' => $user->getAvatar(),
                'provider' => $provider_name,
                'provider_id' => $provider_id,
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            // Auth::login($newUser);
            Auth::guard('patient')->login($newUser);
            return redirect()->route('patient.patient-profile')->with('success', 'يرجى استكمال ملفك الشخصي');
        }
    }

    public function researches(Route $route)
    {
        try {
            $researches = Research::where('status', 1)->orderBy('created_at', 'desc')->paginate(12);
            return view('front_end_inners.researches', compact('researches'));
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
