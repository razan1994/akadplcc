<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\Pharmacy;
use App\Models\ProdSzeClrRelation;
use App\Models\Product;
use App\Models\PublicRegion;
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    function frontLogin(Request $request){
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
                    }
                }

                return 'Errors';
                // if unsuccessful
                // $errors = [
                //     'username' => 'email or phone or password is incorrect',
                // ];
                // return redirect()->back()->withInput($request->only('username', 'remember'))->withErrors($errors);
    }


    function aboutUs(){
        return view('front_end_inners.about_us');
    }


    function userDetails($user_type,$alias_name){

        if ($user_type == 'insurances') {
            $user = InsuranceCompany::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'hospitals') {
            $user = Hospital::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'radiology-centers') {
            $user = RadiologyCenter::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'medical-centers') {
            $user = MedicalCenter::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'labs') {
            $user = Lab::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'doctors') {
            $user = Doctor::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'pharmacies') {
            $user = Pharmacy::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'life-coaches') {
            $user = LifeCoutch::where('alias_name_en',$alias_name)->get()->first();
        } else if ($user_type == 'fitness-centers') {
            $user = Gym::where('alias_name_en',$alias_name)->get()->first();
        }else{
            return redirect()->back()->with('danger','Not Found');
        }

        if($user){


            // if (!Cookie::get('view_doctor' . $user->id)) {

            //     DB::table('doctors')
            //         ->where('id', $user->id)
            //         ->update([
            //             'view_counter' => $user->view_counter + 1,
            //         ]);

            //     Cookie::queue('view_doctor' . $user->id, 'view_doctor' . $user->id, 60);
            // }

            return view('front_end_inners.user-details',compact('user','user_type'));
        }else{
            return redirect()->back()->with('danger','Not Found');
        }

    }



    function usersList($user_type){

        if ($user_type == 'insurances') {
            $users = InsuranceCompany::where('user_status',2)->get();
        } else if ($user_type == 'hospitals') {
            $users = Hospital::where('user_status',2)->get();
        } else if ($user_type == 'radiology-centers') {
            $users = RadiologyCenter::where('user_status',2)->get();
        } else if ($user_type == 'medical-centers') {
            $users = MedicalCenter::where('user_status',2)->get();
        } else if ($user_type == 'labs') {
            $users = Lab::where('user_status',2)->get();
        } else if ($user_type == 'doctors') {
            $users = Doctor::where('user_status',2)->get();
        } else if ($user_type == 'pharmacies') {
            $users = Pharmacy::where('user_status',2)->get();
        } else if ($user_type == 'life-coaches') {
            $users = LifeCoutch::where('user_status',2)->get();
        } else if ($user_type == 'fitness-centers') {
            $users = Gym::where('user_status',2)->get();
        }else{
            return redirect()->back()->with('danger','Not Found');
        }
        // $users = Hospital::where('user_status',2)->get();


        return view('front_end_inners.list-users',compact('users','user_type'));
    }



    function frontGetRegions(Request $request){
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

}
