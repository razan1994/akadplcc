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
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    function aboutUs(){
        return view('front_end_inners.about_us');
    }


    function doctorDetails($user_type,$alias_name){


        $doctor = Doctor::where('alias_name_en',$alias_name)->get()->first();
        if($doctor){


            if (!Cookie::get('view_doctor' . $doctor->id)) {

                DB::table('doctors')
                    ->where('id', $doctor->id)
                    ->update([
                        'view_counter' => $doctor->view_counter + 1,
                    ]);

                Cookie::queue('view_doctor' . $doctor->id, 'view_doctor' . $doctor->id, 60);
            }

            return view('front_end_inners.doctor-details',compact('doctor'));
        }else{
            return redirect()->back()->with('danger','Doctor Not Found In Records');
        }

    }



    function usersList($user_type){

        if($user_type == 'hospitals'){
            $users = Doctor::where('user_status',2)->get();
        }else if ($user_type == 'insurances') {
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
        return view('front_end_inners.users-list',compact('users','user_type'));
    }

}
