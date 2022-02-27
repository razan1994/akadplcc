<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsRequests\ContactUsFormRequest;
use App\Http\Requests\Frontend\Guest\BookAppointmentFormRequest;
use App\Http\Requests\Frontend\Guest\BookAppointmentGuestFormRequest;
use App\Http\Requests\Frontend\Patient\RateUserFormRequest;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\ContactUsRequest;
use App\Models\Doctor;
use App\Models\DoctorReservation;
use App\Models\DoctorReview;
use App\Models\DoctorSpeciality;
use App\Models\DoctorSpecialityRelation;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\HospitalReview;
use App\Models\InsuranceCompany;
use App\Models\InsuranceCompanyReview;
use App\Models\Lab;
use App\Models\LabReview;
use App\Models\LatestNew;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\MedicalCenterReview;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\PharmacyReview;
use App\Models\PublicCountry;
use App\Models\PublicLanguage;
use App\Models\PublicRegion;
use App\Models\RadiologyCenter;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontEndController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // [
    // 'doctor',
    // 'patient',
    // 'hospital',
    // 'radiology_center',
    // 'medical_center',
    // 'lab',
    // 'pharmacy',
    // 'seo_admin',
    // 'gym',
    // 'life_coach'
    // ]
    function frontLogin(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        // التحقق اذا كان الدخول عن طريق رقم الهاتف او الايميل
        if (is_numeric($request->get('email'))) {
            // Attempt to log the patient in
            if (Auth::guard('patient')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                Auth::guard('patient')->user();
                return "logged in Patient";
                return redirect()->route('patient.patient-profile');

                // Attempt to log the doctor in
            } else if (Auth::guard('doctor')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('doctor')->user();
                return redirect()->route('doctor.doctor-dashboard');

                // Attempt to log the hospital in
            } else if (Auth::guard('hospital')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('hospital')->user();
                return redirect()->route('hospital.hospital-dashboard');
            } else if (Auth::guard('radiology_center')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('radiology_center')->user();
                return redirect()->route('radiology_center.radiology-dashboard');
            } else if (Auth::guard('medical_center')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('medical_center')->user();
                return redirect()->route('medical_center.medical-dashboard');
            } else if (Auth::guard('lab')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('lab')->user();
                return redirect()->route('lab.lab-dashboard');
            }
        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            // Attempt to log the patient in
            if (Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])) {
                Auth::guard('patient')->user();
                return redirect()->route('patient.patient-profile');

                // Attempt to log the doctor in
            } else if (Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('doctor')->user();
                return redirect()->route('doctor.doctor-dashboard');
            } else if (Auth::guard('hospital')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('hospital')->user();
                return redirect()->route('hospital.hospital-dashboard');
            } else if (Auth::guard('radiology_center')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('radiology_center')->user();
                return redirect()->route('radiology_center.radiology-dashboard');
            } else if (Auth::guard('medical_center')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('medical_center')->user();
                return redirect()->route('medical_center.medical-dashboard');
            } else if (Auth::guard('lab')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('lab')->user();
                return redirect()->route('lab.lab-dashboard');
            }
        }

        // if unsuccessful
        $errors = [
            'username' => 'email or phone or password is incorrect',
        ];
        return redirect()->back()->withInput($request->only('username', 'remember'))->withErrors($errors);
    }


    function frontRegister(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'name' => 'required|unique:users,name_ar|unique:insurance_companies,name_ar|unique:hospitals,name_ar|unique:radiology_centers,name_ar|unique:pharmacies,name_ar|unique:labs,name_ar|unique:doctors,name_ar|unique:seo_admins,name_ar|unique:life_coutches,name_ar|unique:gyms,name_ar',
            'name' => 'required|unique:users,name_en|unique:insurance_companies,name_en|unique:hospitals,name_en|unique:radiology_centers,name_en|unique:pharmacies,name_en|unique:labs,name_en|unique:doctors,name_en|unique:seo_admins,name_en|unique:life_coutches,name_en|unique:gyms,name_en',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'user_type' => 'required|numeric'
        ]);

        if (is_numeric($request->email)) {
            $this->validate($request, [
                'name' => 'required|unique:users,name_ar|unique:insurance_companies,name_ar|unique:hospitals,name_ar|unique:radiology_centers,name_ar|unique:pharmacies,name_ar|unique:labs,name_ar|unique:doctors,name_ar|unique:seo_admins,name_ar|unique:life_coutches,name_ar|unique:gyms,name_ar',
                'name' => 'required|unique:users,name_en|unique:insurance_companies,name_en|unique:hospitals,name_en|unique:radiology_centers,name_en|unique:pharmacies,name_en|unique:labs,name_en|unique:doctors,name_en|unique:seo_admins,name_en|unique:life_coutches,name_en|unique:gyms,name_en',
                'email' => 'required|numeric|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone',
                'password' => 'required|confirmed|min:8',
                'user_type' => 'required|numeric'
            ]);
            $email = null;
            $phone = $request->email;
        } else {
            $this->validate($request, [
                'name' => 'required|unique:users,name_ar|unique:insurance_companies,name_ar|unique:hospitals,name_ar|unique:radiology_centers,name_ar|unique:pharmacies,name_ar|unique:labs,name_ar|unique:doctors,name_ar|unique:seo_admins,name_ar|unique:life_coutches,name_ar|unique:gyms,name_ar',
                'name' => 'required|unique:users,name_en|unique:insurance_companies,name_en|unique:hospitals,name_en|unique:radiology_centers,name_en|unique:pharmacies,name_en|unique:labs,name_en|unique:doctors,name_en|unique:seo_admins,name_en|unique:life_coutches,name_en|unique:gyms,name_en',
                'email' => 'required|email|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email',
                'password' => 'required|confirmed|min:8',
                'user_type' => 'required|numeric'
            ]);
            $email = $request->email;
            $phone = null;
        }


        $created_data = [
            'name_ar' => $request->name,
            'name_en' => $request->name,
            'email' => $email,
            'phone' => $phone,
            'password' => Hash::make($request->password),
            'created_by' => 1,
            'alias_name_en' => str_replace(array(' ', '"', '>', '<', '#', '%', '|', '/'), '-', $request->name_en),
            'alias_name_ar' => str_replace(array(' ', '"', '>', '<', '#', '%', '|', '/'), '-', $request->name_ar)
        ];

        if ($request->user_type == 1) {
            $created_data['user_status'] = 2; // Active
            $user = Patient::create($created_data);

            Auth::guard('patient')->login($user);
            return redirect()->route('patient.patient-profile');
        } else {
            $created_data['user_status'] = 1; // Pendding

            $this->validate($request, [
                'institution_type' => 'required'
            ]);

            if ($request->institution_type == "Doctor") {
                $user = Doctor::create($created_data);
                Auth::guard('doctor')->login($user);

                return redirect()->route('doctor.doctor-dashboard');
            } else if ($request->institution_type == "Hospital") {
                $user = Hospital::create($created_data);
                Auth::guard('hospital')->login($user);

                return redirect()->route('hospital.hospital-dashboard');
            } else if ($request->institution_type == "Radiology Center") {
                $user = RadiologyCenter::create($created_data);
                Auth::guard('radiology_center')->login($user);

                return redirect()->route('radiology_center.radiology-dashboard');
            } else if ($request->institution_type == "Medical Center") {
                $user = MedicalCenter::create($created_data);
                Auth::guard('medical_center')->login($user);

                return redirect()->route('medical_center.medical-dashboard');
            } else if ($request->institution_type == "Lab") {
                $user = MedicalCenter::create($created_data);
                Auth::guard('lab')->login($user);

                return redirect()->route('lab.lab-dashboard');
            }
        }
    }

    public function frontLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect(route('welcome'));
    }


    function aboutUs()
    {
        return view('front_end_inners.about_us');
    }


    function userDetails($user_type, $alias_name)
    {

        if ($user_type == 'insurances') {
            $user = InsuranceCompany::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'hospitals') {
            $user = Hospital::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'radiology-centers') {
            $user = RadiologyCenter::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'medical-centers') {
            $user = MedicalCenter::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'labs') {
            $user = Lab::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'doctors') {
            $user = Doctor::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'pharmacies') {
            $user = Pharmacy::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'life-coaches') {
            $user = LifeCoutch::where('alias_name_en', $alias_name)->get()->first();
        } else if ($user_type == 'fitness-centers') {
            $user = Gym::where('alias_name_en', $alias_name)->get()->first();
        } else {
            return redirect()->back()->with('danger', 'Not Found');
        }

        if ($user) {

                    // return $user;
            if (!Cookie::get('view_'. $user_type . '_' . $user->id)) {

                $user->update([
                    'view_counter' => $user->view_counter + 1,
                ]);

                Cookie::queue('view_'. $user_type . '_' . $user->id,'view_'. $user_type . '_' . $user->id, 60);
            }

            if(isset($user->weekPlan)){
                if($user->weekPlan->active_days != null){
                $collection = new Collection();
                $week_plan = $user->weekPlan;
                $days_arr = explode(',',$user->weekPlan->active_days);
                $end = new DateTime(date('Y-m-d'));
                $end = $end->modify('+60 day');
                $date = Carbon::parse(date('Y-m-d'))->toDateString();
                $begin = new DateTime($date);
                $days = [];
                foreach($days_arr as $single_day){
                    $day_split = null;
                    if($single_day == "saterday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::SATURDAY);
                        $day_split = "Sat";
                    }
                    if($single_day == "sunday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::SUNDAY);
                        $day_split = "Sun";
                    }
                    if($single_day == "monday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::MONDAY);
                        $day_split = "Mon";
                    }
                    if($single_day == "tuseday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::TUESDAY);
                        $day_split = "Tues";
                    }
                    if($single_day == "wednsday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::WEDNESDAY);
                        $day_split = "Wed";
                    }
                    if($single_day == "thursday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::THURSDAY);
                        $day_split = "Thu";
                    }
                    if($single_day == "friday"){
                        $startDate = Carbon::parse($begin)->next(Carbon::FRIDAY);
                        $day_split = "Fri";
                    }
                    $endDate = Carbon::parse($end);

                    $from_var = $single_day."_from";
                    $to_var = $single_day."_to";
                    $every_var = "every_".$single_day;
                    for ($date = $startDate; $date->lte($endDate); $date->addWeek()) {
                        $days[] = ['day'=>$day_split,'date'=>$date->format('Y-m-d'),'from'=>$week_plan->$from_var,'to'=>$week_plan->$to_var,'every'=>$week_plan->$every_var];
                    }

                }
                $sorted_plan = collect($days)->sortBy('date')->values();
                $day_chunks = array_chunk($sorted_plan->toArray(),3);
                $user->chunked_plan = $day_chunks;
            }
        }

            $languages = [];
            if (isset($user->languages)) {
                foreach (explode(',', $user->languages) as $lang) {
                    $public_lang = PublicLanguage::find($lang);
                    if ($public_lang) {
                        array_push($languages, $public_lang->name_en);
                    }
                }
            }

            if ($user_type == 'doctors') {
                return view('front_end_inners.user-details', compact('user', 'user_type', 'languages'));
            } else {
                return view('front_end_inners.institution_details', compact('user', 'user_type'));
            }
        } else {
            return redirect()->back()->with('danger', 'Not Found');
        }
    }



    function usersList($user_type)
    {

        $specialities = null;
        if ($user_type == 'insurances') {
            $users = InsuranceCompany::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'hospitals') {
            $users = Hospital::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'radiology-centers') {
            $users = RadiologyCenter::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'medical-centers') {
            $users = MedicalCenter::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'labs') {
            $users = Lab::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'doctors') {
            $users = Doctor::where('user_status', 2)->paginate(20)->onEachSide(2);
            $specialities = DoctorSpeciality::where('type','main')->get();
        } else if ($user_type == 'pharmacies') {
            $users = Pharmacy::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'life-coaches') {
            $users = LifeCoutch::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else if ($user_type == 'fitness-centers') {
            $users = Gym::where('user_status', 2)->paginate(20)->onEachSide(2);
        } else {
            return redirect()->back()->with('danger', 'Not Found');
        }
        // $users = Hospital::where('user_status',2)->get();


        return view('front_end_inners.list-users', compact('users', 'user_type','specialities'));
    }



    function frontGetRegions(Request $request)
    {
        // return $request;
        if (!isset($request->country_id)) {
            $regions = "";
        } else {
            $regions = new PublicRegion();
            $regions = $regions->select("id", 'name_' . config('app.locale') . ' as name_ar');
            $regions = $regions->where("country_id", "=", "{$request->country_id}");
            $regions = $regions->get();
        }
        return response()->json([
            'status' => true,
            'regions' => $regions,
        ]);
    }


    function blogs()
    {
        $blogs = Blog::where('status', 1)->get();
        return view('front_end_inners.blog-list', compact('blogs'));
    }



    function blogsDetails($alias_name)
    {
        $blog = Blog::where('alias_name_en', $alias_name)->get()->first();

        if ($blog) {
            return view('front_end_inners.blog-details', compact('blog'));
        } else {
            return redirect()->back()->with('danger', 'Blog Not Found !!!');
        }
    }


    function news()
    {
        $news = LatestNew::where('status', 1)->get();
        return view('front_end_inners.news-list', compact('news'));
    }



    function newsDetails($alias_name)
    {
        $new = LatestNew::where('alias_name_en', $alias_name)->get()->first();

        if ($new) {
            return view('front_end_inners.news-details', compact('new'));
        } else {
            return redirect()->back()->with('danger', 'News Not Found !!!');
        }
    }


    function searchUser(Request $request)
    {

        $user_type = $request->user_type;
        $grid = $request->grid;
        $search = $request->search;

        if ($user_type == 'insurances') {
            $users = InsuranceCompany::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'hospitals') {
            $users = Hospital::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'radiology-centers') {
            $users = RadiologyCenter::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'medical-centers') {
            $users = MedicalCenter::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'labs') {
            $users = Lab::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'doctors') {
            $users = Doctor::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'pharmacies') {
            $users = Pharmacy::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'life-coaches') {
            $users = LifeCoutch::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        } else if ($user_type == 'fitness-centers') {
            $users = Gym::where([
                ['user_status', 2],
                ['name_ar', 'like', '%' . $search . '%']
            ])->orWhere([
                ['user_status', 2],
                ['name_en', 'like', '%' . $search . '%']
            ])->get();
        }

            $output ='';
            $output_second = '';
            $output_therd = '<div class="item-card9-icons">
            <a href="#" class="item-card9-icons1 item-icon-bg"
                data-toggle="tooltip" title=""
                data-original-title="wishlist"><i
                    class="fa fa fa-heart-o"></i></a>
            <a href="#" class="item-card9-icons1 bg-purple"
                data-toggle="tooltip" title=""
                data-original-title="Share"><i
                    class="fa fa-share-alt"></i></a>
        </div>
        <div class="item-overly-trans">
            <div class="rating-stars d-flex">
                <span class="text-white mr-1">3.3</span> <input
                    class="rating-value star"
                    name="rating-stars-value" readonly="readonly"
                    type="number" value="3">
                <div class="rating-stars-container">
                    <div class="rating-star sm ">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="rating-star sm ">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="rating-star sm ">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="rating-star sm ">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="rating-star sm ">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>';

            if(isset($users) && $users->count() > 0){
            foreach ($users as $key => $user){
                $output .='<div class="card overflow-hidden">
                    <div class="d-md-flex">
                        <div class="item-card9-img doctor-details">
                            <div class="item-card9-imgs doctors">
                                <a
                                    href="'.route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]).'"></a>
                                <div
                                    class="power-ribbon power-ribbon-top-left text-warning">
                                    <span class="bg-warning"><i
                                            class="fa fa-bolt"></i></span></div>';
                                    if (isset($user->profile_photo_path) && file_exists($user->profile_photo_path)){
                                        $output .='<img alt="img" class="cover-image h-200"
                                            src="'.asset($user->profile_photo_path).'">';
                                    }else{
                                    $output .='<img alt="img" class="cover-image h-200"
                                            src="'.asset('front_end_style/assets/images/media/doctors/2.jpg').'">';
                                    }
                                $output .='</div>
                            <div class="item-card9-icons">
                                <a href="#" class="item-card9-icons1 item-icon-bg"
                                    data-toggle="tooltip" title=""
                                    data-original-title="wishlist"><i
                                        class="fa fa fa-heart-o"></i></a>
                                <a href="#" class="item-card9-icons1 bg-purple"
                                    data-toggle="tooltip" title=""
                                    data-original-title="Share"><i
                                        class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="item-overly-trans">
                                <div class="rating-stars d-flex">
                                    <span class="text-white mr-1"></span>
                                    <input
                                        class="rating-value star" name="rating-stars-value"
                                        readonly="readonly" type="number" value="3">
                                    <div class="rating-stars-container">
                                        <div class="rating-star sm">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star sm">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star sm">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star sm">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star sm">
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-0">
                            <div class="card-body">
                                <div class="item-card9">
                                    <span
                                        class="badge badge-dark fs-12 mb-2">'. ucfirst($user_type) .'</span>
                                    <a class="text-dark"
                                        href="'.route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]).'">
                                        <h4 class="font-weight-bold mt-1 mb-1">
                                            '. $user->name_en .'<i
                                                class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>';
                                    if ($user_type == 'doctors'){
                                        if(isset($user->specialities) && $user->specialities->count() > 0){
                                            foreach($user->specialities->take(3) as $spaciality){
                                                $output .='<span class="text-muted fs-13 mt-0"><i
                                                        class="fa fa-user-md text-muted mr-2"></i>'. isset($spaciality->speciality->name_en) ? $spaciality->speciality->name_en : "Not Set".'</span>';
                                            }
                                        }
                                    }
                                    $output .='<div class="item-card9-desc mb-0 mt-2">
                                        <span class="mr-4"><i
                                                class="fa fa-map-marker text-muted mr-1"></i>
                                            '.isset($user->country->name_en) ? $user->country->name_en : "--------" .'/'.(isset($user->region->name_en) ? $user->region->name_en : "--------").'</span>';
                                        if (isset($user->weekPlan->active_days) && count(explode(',', $user->weekPlan->active_days)) > 0){
                                            $output .='<li style="list-style-type: none;"><span><i
                                                        class="fa fa-calendar-o mr-1 text-muted"></i>'. explode(',', $user->weekPlan->active_days)[0] .'
                                                    |
                                                    '. explode(',', $user->weekPlan->active_days)[count(explode(',', $user->weekPlan->active_days)) - 1] .'</span>
                                            </li>';
                                        }
                                        if(isset($user->visit_fees) && $user->visit_fees != null){
                                            $output .='<li style="list-style-type: none;"><span>
                                            <i class="fa fa-money"></i> Fees : '. $user->visit_fees .' <span class="text-primary">(Does not include procedures)</span>
                                            </span>
                                            </li>';
                                        }
                                    $output .='</div>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="item-card9-footer btn-appointment">
                                    <div class="btn-group w-100">
                                        <a href="'.route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]).'"
                                            class="btn btn-outline-light w-33 p-2 border-top-0 border-right-0 border-bottom-0"><i
                                                class="fe fe-eye  mr-1"></i>View
                                            Profile</a>
                                        <a href="#"
                                            class="btn btn-outline-light w-34 p-2 border-top-0 border-right-0 border-bottom-0"
                                            data-target="#exampleModal"
                                            data-toggle="modal"><i
                                                class="fe fe-phone  mr-1"></i>Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';



                $output_second .='<div class="col-lg-6 col-md-6 col-xl-4">
                <div class="card overflow-hidden" style="height: 96%;">
                    <div class="item-card9-img">
                        <div class="item-card9-imgs">
                            <a href="'.route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]).'"></a>
                            <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>';
                            if (isset($user->profile_photo_path) && file_exists($user->profile_photo_path)){
                                $output_second .='<img alt="img" class="cover-image" src="'.asset($user->profile_photo_path).'"></div>';
                            }else{
                                $output_second .='<img alt="img" class="cover-image" src="'.asset('front_end_style/assets/images/media/doctors/2.jpg').'"></div>';
                            }
                        $output_second .='<div class="item-card9-icons">
                            <a href="#" class="item-card9-icons1 item-icon-bg"
                                data-toggle="tooltip" title=""
                                data-original-title="wishlist"><i
                                    class="fa fa fa-heart-o"></i></a>
                            <a href="#" class="item-card9-icons1 bg-purple"
                                data-toggle="tooltip" title=""
                                data-original-title="Share"><i
                                    class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="item-overly-trans">
                            <div class="rating-stars d-flex">
                                <span class="text-white mr-1">3.3</span> <input
                                    class="rating-value star"
                                    name="rating-stars-value" readonly="readonly"
                                    type="number" value="3">
                                <div class="rating-stars-container">
                                    <div class="rating-star sm ">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm ">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm ">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm ">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm ">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-overly-trans">
                            <span
                                class="badge badge-dark">'.ucfirst($user_type).'</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="item-card9">
                            <a class="text-dark" href="'.route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]).'">
                                <h4 class="font-weight-bold mb-1">
                                    '.$user->name_en.'<i
                                        class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                </h4>
                            </a>';
                            if ($user_type == 'doctors'){
                                if(isset($user->specialities) && $user->specialities->count() > 0){
                                    foreach ($user->specialities->take(3) as $speciality){
                                        $output_second .='<p class="text-muted fs-13 mt-0"><i
                                            class="fa fa-user-md text-muted mr-2"></i>'.isset($speciality->speciality->name_en) ? $speciality->speciality->name_en : '--------'.'</p>';
                                    }
                                }
                            }
                            $output_second .='<div class="mb-0 mt-2">
                                <ul class="item-card-features mb-0">
                                    <li><span class="mr-4"><i
                                    class="fa fa-map-marker text-muted mr-1"></i>
                                        '.isset($user->country->name_en) ? $user->country->name_en : "--------" .'/'.(isset($user->region->name_en) ? $user->region->name_en : "--------").'</span>
                                    </li>';
                                    if (isset($user->weekPlan->active_days) && count(explode(',', $user->weekPlan->active_days)) > 0){
                                        $output_second .='<li><span><i class="fa fa-calendar-o mr-1 text-muted"></i>'. explode(',', $user->weekPlan->active_days)[0] .'|'. explode(',', $user->weekPlan->active_days)[count(explode(',', $user->weekPlan->active_days)) - 1] .'</span>
                                        </li>';
                                    }
                                    if(isset($user->visit_fees) && $user->visit_fees != null){
                                        $output_second .='<li style="list-style-type: none;"><span>
                                        <i class="fa fa-money"></i> Fees : '. $user->visit_fees .' <span class="text-primary">(Does not include procedures)</span>
                                        </span>
                                        </li>';
                                    }
                                $output_second .='</ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 btn-appointment">
                        <div class="btn-group w-100">
                            <a href="'.route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]).'"
                                class="btn btn-outline-light w-33 p-2 border-top-0 border-right-0 border-bottom-0"><i
                                    class="fe fe-eye  mr-1"></i>View Profile</a>
                            <a href="#"
                                class="btn btn-outline-light w-34 p-2 border-top-0 border-right-0 border-bottom-0"
                                data-target="#exampleModal" data-toggle="modal"><i
                                    class="fe fe-phone  mr-1"></i>Appointment</a>
                        </div>
                    </div>
                </div>
            </div>';


            }
            }else{
                $output .='<h2 class="text-danger">No Data Found ...</h2>';
                $output_second .='<h2 class="text-danger">No Data Found ...</h2>';
            }




            return response()->json(['status'=>true,'output'=>$output,'output_second'=>$output_second]);
            // return response()->json(['status'=>true,'output_therd'=>$output_therd]);

    }


    function contactUs(){
        $contact = ContactUs::first();

        return view('front_end_inners.contact_us',compact('contact'));
    }



    function contactUsRequest(ContactUsFormRequest $request){

        $data =[
            'full_name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];

        DB::transaction(function () use ($data,) {
            ContactUsRequest::create($data);
        });


        return redirect()->back()->with('success','Message Sent Successfully');

    }



    function bookAppointmentGuest(Route $route,BookAppointmentGuestFormRequest $request){
        try{

            $user_id = decrypt($request->user_id);

            $user_type = $request->user_type;

            if($user_type == 'doctors'){
                $user = Doctor::find($user_id);
            }

            if($user){
                $created_data = [
                    'doctor_id'=>$user_id,
                    'patient_id'=>null,
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'age'=>$request->age,
                    'time'=>$request->time
                ];

                DB::transaction(function () use ($created_data,$user_type) {
                    if($user_type == 'doctors'){
                        DoctorReservation::create($created_data);
                    }
                });


                return redirect()->back()->with('success','Appoitment Booked Successfully ...');

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



    function appointmentData(Request $request){

        $request->validate([
            'user_id'=>'required',
            'user_type'=>'required'
        ]);

        $user_type = decrypt($request->user_type);
        $user_id = decrypt($request->user_id);

        if ($user_type == 'hospitals') {
            $user = Hospital::find($user_id);
        } else if ($user_type == 'radiology-centers') {
            $user = RadiologyCenter::find($user_id);
        } else if ($user_type == 'medical-centers') {
            $user = MedicalCenter::find($user_id);
        } else if ($user_type == 'labs') {
            $user = Lab::find($user_id);
        } else if ($user_type == 'doctors') {
            $user = Doctor::find($user_id);
        } else if ($user_type == 'pharmacies') {
            $user = Pharmacy::find($user_id);
        } else if ($user_type == 'life-coaches') {
            $user = LifeCoutch::find($user_id);
        } else if ($user_type == 'fitness-centers') {
            $user = Gym::find($user_id);
        } else {
            return response()->json(['status'=>false,'msg'=>'User Not Found !!!']);
        }

        if ($user) {


            if(isset($user->weekPlan)){
                if($user->weekPlan->active_days != null){
                    $collection = new Collection();
                    $week_plan = $user->weekPlan;
                    $days_arr = explode(',',$user->weekPlan->active_days);
                    $end = new DateTime(date('Y-m-d'));
                    $end = $end->modify('+60 day');
                    $date = Carbon::parse(date('Y-m-d'))->toDateString();
                    $begin = new DateTime($date);
                    $days = [];
                    foreach($days_arr as $single_day){
                        $day_split = null;
                        if($single_day == "saterday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::SATURDAY);
                            $day_split = "Sat";
                        }
                        if($single_day == "sunday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::SUNDAY);
                            $day_split = "Sun";
                        }
                        if($single_day == "monday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::MONDAY);
                            $day_split = "Mon";
                        }
                        if($single_day == "tuseday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::TUESDAY);
                            $day_split = "Tues";
                        }
                        if($single_day == "wednsday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::WEDNESDAY);
                            $day_split = "Wed";
                        }
                        if($single_day == "thursday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::THURSDAY);
                            $day_split = "Thu";
                        }
                        if($single_day == "friday"){
                            $startDate = Carbon::parse($begin)->next(Carbon::FRIDAY);
                            $day_split = "Fri";
                        }
                        $endDate = Carbon::parse($end);

                        $from_var = $single_day."_from";
                        $to_var = $single_day."_to";
                        $every_var = "every_".$single_day;
                        for ($date = $startDate; $date->lte($endDate); $date->addWeek()) {
                            $days[] = ['day'=>$day_split,'date'=>$date->format('Y-m-d'),'from'=>$week_plan->$from_var,'to'=>$week_plan->$to_var,'every'=>$week_plan->$every_var];
                        }

                    }
                    $sorted_plan = collect($days)->sortBy('date')->values();
                    $day_chunks = array_chunk($sorted_plan->toArray(),3);
                    $user->chunked_plan = $day_chunks;
                }
            }

                $output = '';

                if(Auth::guard('patient')->check()){

                    $output .='<div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Book a Visit</h3>
                        </div>
                        <form action="'.route('patient.book-appointment').'" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="'.csrf_token().'" />
                            <input type="hidden" name="user_id" value="'.encrypt($user->id).'">
                            <input type="hidden" name="user_type" value="'.$user_type.'">
                            <div class="card-body">
                                <div class="form-group">
                                    <style>
                                        .carousel-item {
                                        transition-duration: 0.3s !important;
                                        }
                                    </style>
                                    <label class="form-label">Date / Time</label>
                                    <div class="row gutters-xs">
                                        <div class="col-md-12 row d-flex justify-content-center">
                                            <div id="carouselExampleIndicators" class="carousel slide carousel-multi-item" data-wrap="false" data-ride="carousel" data-interval="false" touch="true">
                                                <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox" style="height:300px;">';
                                                    if(isset($user->chunked_plan) && count($user->chunked_plan) > 0){
                                                        foreach ($user->chunked_plan as $index => $chunked_days){
                                                            if($index == 0){
                                                                $output .='<div class="carousel-item active">';
                                                            }else{
                                                                $output .='<div class="carousel-item">';
                                                            }
                                                            $output .='<div class="row" style="height: 70%;">';
                                                                    foreach ($chunked_days as $key => $day){
                                                                        if(count($chunked_days) == 4){
                                                                            $output .='<div class="col-xs-12 col-sm-6 col-md-4" style="height: 100%;">';
                                                                        }else if(count($chunked_days) == 3){
                                                                            $output .='<div class="col-xs-12 col-sm-6 col-md-4" style="height: 100%;">';
                                                                        }else if(count($chunked_days) == 2){
                                                                            $output .='<div class="col-xs-12 col-sm-6 col-md-6" style="height: 100%;;">';
                                                                        }else if(count($chunked_days) == 1){
                                                                            $output .='<div class="col-xs-12 col-sm-6 col-md-12" style="height: 100%;">';
                                                                        }
                                                                        $output .='<a class="btn btn-success time-date rs-btn">'. $day['day'] .' '. date('m-d',strtotime($day['date'])) .'</a>
                                                                                <div class="swiper-container">
                                                                                    <button class="swiper-button-prev"><i class="fa-solid fa-angle-down"></i></button>
                                                                                    <div class="swiper-wrapper">';

                                                                                        $start_time = $day['from'];
                                                                                        $diff1 =strtotime($day['from']);
                                                                                        $diff2 =strtotime($day['to']);
                                                                                        $diff3 = $diff2 - $diff1;

                                                                                        for ($i = 0 ; $i < $diff3 ; $i+=$day['every']){
                                                                                            $output .='<div class="swiper-slide slide_'. $index .'_'. $key .'_'. $i .'">
                                                                                                <input type="radio" class="btn-check" name="time" data-selector="'. $index .'_'. $key .'_'. $i .'" id="success-outlined_'. $index .'_'. $key .'_'. $i .'" value="'. date('Y-m-d',strtotime($day['date'])) .'|'. date("h:i A",strtotime($start_time)) .'" autocomplete="off" style="display: none">
                                                                                                <label class="btn rd-btn c_labelbreord" for="success-outlined_'. $index .'_'. $key .'_'. $i .'">
                                                                                                    '. date("h:i A",strtotime($start_time)) .'
                                                                                                    </label>';
                                                                                                    $start_time = date("H:i:s", strtotime($day['every']." Minutes", strtotime($start_time)));
                                                                                            $output .='</div>';
                                                                                            if($start_time >= $day['to']){
                                                                                                break;
                                                                                            }
                                                                                        }
                                                                                    $output .='</div>
                                                                                    <button class="swiper-button-next"><i class="fa-solid fa-angle-up"></i></button>
                                                                                </div>
                                                                        </div>';
                                                                    }
                                                                $output .='</div>
                                                            </div>';
                                                        }
                                                    }
                                                $output .='</div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="fa-solid fa-angle-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="fa-solid fa-angle-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <button type="submit" class="btn  btn-primary">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>';
                }
                else if(!Auth::check()){
                    $output .='<div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Book a Visit</h3>
                    </div>
                    <form action="'.route('patient.book-appointment').'" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="'.csrf_token().'" />
                        <input type="hidden" name="user_id" value="'.encrypt($user->id).'">
                        <input type="hidden" name="user_type" value="'.$user_type.'">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="number" name="age" class="form-control" placeholder="Enter your age">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number">
                            </div>
                            <div class="form-group">
                                <style>
                                    .carousel-item {
                                    transition-duration: 0.3s !important;
                                    }
                                </style>
                                <label class="form-label">Date / Time</label>
                                <div class="row gutters-xs">
                                    <div class="col-md-12 row d-flex justify-content-center">
                                        <div id="carouselExampleIndicators" class="carousel slide carousel-multi-item" data-wrap="false" data-ride="carousel" data-interval="false" touch="true">
                                            <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox" style="height:300px;">';
                                                if(isset($user->chunked_plan) && count($user->chunked_plan) > 0){
                                                    foreach ($user->chunked_plan as $index => $chunked_days){
                                                        if($index == 0){
                                                            $output .='<div class="carousel-item active">';
                                                        }else{
                                                            $output .='<div class="carousel-item">';
                                                        }
                                                        $output .='<div class="row" style="height: 70%;">';
                                                                foreach ($chunked_days as $key => $day){
                                                                    if(count($chunked_days) == 4){
                                                                        $output .='<div class="col-xs-12 col-sm-6 col-md-4" style="height: 100%;">';
                                                                    }else if(count($chunked_days) == 3){
                                                                        $output .='<div class="col-xs-12 col-sm-6 col-md-4" style="height: 100%;">';
                                                                    }else if(count($chunked_days) == 2){
                                                                        $output .='<div class="col-xs-12 col-sm-6 col-md-6" style="height: 100%;;">';
                                                                    }else if(count($chunked_days) == 1){
                                                                        $output .='<div class="col-xs-12 col-sm-6 col-md-12" style="height: 100%;">';
                                                                    }
                                                                    $output .='<a class="btn btn-success time-date rs-btn">'. $day['day'] .' '. date('m-d',strtotime($day['date'])) .'</a>
                                                                            <div class="swiper-container">
                                                                                <button class="swiper-button-prev"><i class="fa-solid fa-angle-down"></i></button>
                                                                                <div class="swiper-wrapper">';

                                                                                    $start_time = $day['from'];
                                                                                    $diff1 =strtotime($day['from']);
                                                                                    $diff2 =strtotime($day['to']);
                                                                                    $diff3 = $diff2 - $diff1;

                                                                                    for ($i = 0 ; $i < $diff3 ; $i+=$day['every']){
                                                                                        $output .='<div class="swiper-slide slide_'. $index .'_'. $key .'_'. $i .'">
                                                                                            <input type="radio" class="btn-check" name="time" data-selector="'. $index .'_'. $key .'_'. $i .'" id="success-outlined_'. $index .'_'. $key .'_'. $i .'" value="'. date('Y-m-d',strtotime($day['date'])) .'|'. date("h:i A",strtotime($start_time)) .'" autocomplete="off" style="display: none">
                                                                                            <label class="btn rd-btn c_labelbreord" for="success-outlined_'. $index .'_'. $key .'_'. $i .'">
                                                                                                '. date("h:i A",strtotime($start_time)) .'
                                                                                                </label>';
                                                                                                $start_time = date("H:i:s", strtotime($day['every']." Minutes", strtotime($start_time)));
                                                                                        $output .='</div>';
                                                                                        if($start_time >= $day['to']){
                                                                                            break;
                                                                                        }
                                                                                    }
                                                                                $output .='</div>
                                                                                <button class="swiper-button-next"><i class="fa-solid fa-angle-up"></i></button>
                                                                            </div>
                                                                    </div>';
                                                                }
                                                            $output .='</div>
                                                        </div>';
                                                    }
                                                }
                                            $output .='</div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="fa-solid fa-angle-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="fa-solid fa-angle-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="">
                                <button type="submit" class="btn  btn-primary">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>';
                }

                    return response()->json(['status'=>true,'output'=>$output]);


        }
    }




    function frontSearchHospital(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new Hospital();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'hospitals';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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


    function frontSearchDoctor(Route $route,$country = null,$region = null,$speciality = null,$name = null){
        try {


            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }
            if($speciality != null && $speciality != "Speciality"){
                $speciality = str_replace('-',' ',$speciality);
            }
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            $speciality_id = DoctorSpeciality::where('name_en',$speciality)->orWhere('name_ar',$speciality)->get()->first();

            if($speciality_id){
                $spec_relations = DoctorSpecialityRelation::where('speciality_id',$speciality_id->id)->get()->pluck('doctor_id');
            }


            $users = new Doctor();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ])->get();
            }
            if($speciality != null && $speciality != "Speciality"){
                $users = $users->whereIn('id',$spec_relations);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'doctors';
            $specialities = DoctorSpeciality::where('type','main')->get();
            return view('front_end_inners.list-users', compact('users', 'user_type','specialities'));

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


    function frontSearchPharmacy(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new Pharmacy();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'pharmacies';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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


    function frontSearchGym(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new Gym();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'fitness-centers';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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


    function frontSearchLifeCoach(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new LifeCoutch();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'life-coaches';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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


    function frontSearchMedicalCenter(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new MedicalCenter();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'medical-centers';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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


    function frontSearchRadiologyCenter(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new RadiologyCenter();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'radiology-centers';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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



    function frontSearchLab(Route $route,$country = null,$region = null,$name = null){
        try {

            if($country != null && $country != "Country"){
                $country = str_replace('-',' ',$country);
            }
            if($region != null && $region != "Region"){
                $region = str_replace('-',' ',$region);
            }

            $country_id = PublicCountry::where('name_en',$country)->orWhere('name_ar',$country)->get()->first();
            $region_id = PublicRegion::where('name_en',$region)->orWhere('name_ar',$region)->get()->first();
            if($name != null){
                $name = str_replace('-',' ',$name);
            }

            $users = new Lab();
            $users = $users->select('*');
            if($name != null){
            $users = $users->where([
                    ['user_status', 2],
                    ['name_en','like', '%' . $name . '%']
                ])->orWhere([
                    ['user_status', 2],
                    ['name_ar','like', '%' . $name . '%']
                ]);
            }
            if($country != null && $country != "Country"){
                $users = $users->where('country_id',$country_id->id);
            }
            if($region != null && $region != "Region"){
                $users = $users->where('region_id',$region_id->id);
            }

            $users = $users->orderBy('created_at','desc')->paginate(5)->onEachSide(2);

            $user_type = 'labs';
            return view('front_end_inners.list-users', compact('users', 'user_type'));

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



    function crawler(){

        $doctor = Doctor::find(1);
        $collection = new Collection();
        $week_plan = $doctor->weekPlan;
        $days_arr = explode(',',$doctor->weekPlan->active_days);
        $end = new DateTime(date('Y-m-d'));
        $end = $end->modify('+30 day');
        $date = Carbon::parse(date('Y-m-d'))->toDateString();
        $begin = new DateTime($date);
        $days = [];
        foreach($days_arr as $single_day){
            if($single_day == "saterday"){
                $startDate = Carbon::parse($begin)->next(Carbon::SATURDAY);
            }
            if($single_day == "sunday"){
                $startDate = Carbon::parse($begin)->next(Carbon::SUNDAY);
            }
            if($single_day == "monday"){
                $startDate = Carbon::parse($begin)->next(Carbon::MONDAY);
            }
            if($single_day == "tuseday"){
                $startDate = Carbon::parse($begin)->next(Carbon::TUESDAY);
            }
            if($single_day == "wednsday"){
                $startDate = Carbon::parse($begin)->next(Carbon::WEDNESDAY);
            }
            if($single_day == "thursday"){
                $startDate = Carbon::parse($begin)->next(Carbon::THURSDAY);
            }
            if($single_day == "friday"){
                $startDate = Carbon::parse($begin)->next(Carbon::FRIDAY);
            }
            $endDate = Carbon::parse($end);

            $from_var = $single_day."_from";
            $to_var = $single_day."_to";
            $every_var = "every_".$single_day;
            for ($date = $startDate; $date->lte($endDate); $date->addWeek()) {
                $days[] = ['day'=>$single_day,'date'=>$date->format('Y-m-d'),'from'=>$week_plan->$from_var,'to'=>$week_plan->$to_var,'every'=>$week_plan->$every_var];
            }

        }
        $sortedArr = collect($days)->sortBy('date')->values();
        $new = $sortedArr->toArray();
        $chunks = array_chunk($new,3);
        return $chunks;

        $t = $sortedArr[0]['from'];
        for ($i = 0 ; $i < 1440 ; $i+= $sortedArr[0]['every']){
            echo $t;
            echo "\n";
           $t = date("H:i:s", strtotime($sortedArr[0]['every']." Minutes", strtotime($t)));
        }

        // return $t;

    }





}
