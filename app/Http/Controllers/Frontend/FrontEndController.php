<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\ProdSzeClrRelation;
use App\Models\Product;
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


    function doctorDetails($alias_name){


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

}
