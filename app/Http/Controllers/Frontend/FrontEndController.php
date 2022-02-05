<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsRequests\ContactUsFormRequest;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\ContactUsRequest;
use App\Models\Doctor;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\ProdSzeClrRelation;
use App\Models\Product;
use App\Models\PublicLanguage;
use App\Models\PublicRegion;
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use App\Models\SubSpeciality;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;
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

                // return redirect()->intended(route('doctor.doctorProfile'));
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
                return "logged in Patient";
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


            // if (!Cookie::get('view_doctor' . $user->id)) {

            //     DB::table('doctors')
            //         ->where('id', $user->id)
            //         ->update([
            //             'view_counter' => $user->view_counter + 1,
            //         ]);

            //     Cookie::queue('view_doctor' . $user->id, 'view_doctor' . $user->id, 60);
            // }
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


        return view('front_end_inners.list-users', compact('users', 'user_type'));
    }



    function frontGetRegions(Request $request)
    {
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
                                    <span class="text-white mr-1"></span> <input
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
                                        $output .='<span class="text-muted fs-13 mt-0"><i
                                                class="fa fa-user-md text-muted mr-2"></i>'.isset($user->speciality_id) ? $user->speciality->name_en : "Not Set".'</span>';
                                    }
                                    $output .='<div class="item-card9-desc mb-0 mt-2">
                                        <span class="mr-4"><i
                                                class="fa fa-map-marker text-muted mr-1"></i>
                                            '.$user->country->name_en.'/'.$user->region->name_en.'</span>';
                                        if (isset($user->weekPlan->active_days) && count(explode(',', $user->weekPlan->active_days)) > 0){
                                            $output .='<li style="list-style-type: none;"><span><i
                                                        class="fa fa-calendar-o mr-1 text-muted"></i>'. explode(',', $user->weekPlan->active_days)[0] .'
                                                    |
                                                    '. explode(',', $user->weekPlan->active_days)[count(explode(',', $user->weekPlan->active_days)) - 1] .'</span>
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
            }
            }else{
                $output .='<h2 class="text-danger">No Data Found ...</h2>';
            }




            return response()->json(['status'=>true,'output'=>$output]);

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
}
