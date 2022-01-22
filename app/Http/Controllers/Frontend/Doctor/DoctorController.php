<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{

    function dashboard(){
        if(!Auth::guard('doctor')->check()){
            return redirect()->route('welcome')->with('Uautherized');
        }

        $auth = Auth::guard('doctor')->user();

        return view('front_end_inners.doctors.doctor_dashboard',compact('auth'));

    }


    function test(){
        return "TTTTTTTTTTTTTTTTTTTTTT";
    }
}
