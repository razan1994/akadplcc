<?php

namespace App\Http\Controllers\Frontend\Patient;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Patient\BookAppointmentFormRequest;
use App\Http\Requests\Frontend\Patient\PatientUpdateProfileFormRequest;
use App\Http\Requests\Frontend\Patient\RateUserFormRequest;
use App\Models\Doctor;
use App\Models\DoctorReservation;
use App\Models\DoctorReview;
use App\Models\HospitalReview;
use App\Models\InsuranceCompanyReview;
use App\Models\LabReview;
use App\Models\MedicalCenterReview;
use App\Models\PharmacyReview;
use App\Models\RadiologyCenter;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    use UploadImageTrait;

    function profile(Route $route,$active = null)
    {
        try {

            if (!Auth::guard('patient')->check()) {
                return redirect()->route('welcome')->with('Uautherized');
            }

            $auth = Auth::guard('patient')->user();

            return view('front_end_inners.patients.patient_profile', compact('auth','active'));
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


    function patientUpdateProfile(PatientUpdateProfileFormRequest $request,$id,Route $route)
    {
        try {
            if(!Auth::guard('patient')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $user = Auth::guard('patient')->user();

            $created_data =[
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'username'=>$request->name_en,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'country_id'=>$request->country_id,
            'region_id'=>$request->region_id,
            'address_ar'=>$request->address_ar,
            'address_en'=>$request->address_en,
            'alias_name_en'=>str_replace(' ','-',$request->name_en),
            'alias_name_ar'=>str_replace(' ','-',$request->name_en),
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth
            ];

            if (isset($request->password)) {
                $created_data['password'] = Hash::make($request->password);
            }

            if (isset($request->profile_photo_path)) {
                $orginal_image = $request->file('profile_photo_path');
                $upload_location = 'storage/profile-photos/';
                $original_name = $orginal_image->getClientOriginalName();
                $last_image = $this->saveFileWithOriginalName('patients', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                $created_data['profile_photo_path']= $last_image;
                File::delete($user->profile_photo_path);
            }

            DB::transaction(function () use ($created_data, $user , $request) {
                $user->update($created_data);
            });

            return redirect()->route('patient.patient-profile','patientUpdateProfile')->with('success','updated successfully');

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


    function bookAppointment(Route $route,BookAppointmentFormRequest $request){
        try{

            $user_id = decrypt($request->user_id);

            $user_type = $request->user_type;

            if($user_type == 'doctors'){
                $user = Doctor::find($user_id);
            }

            if($user){
                $created_data = [
                    'doctor_id'=>$user_id,
                    'patient_id'=>auth()->user()->id,
                    'name'=>auth()->user()->name_en,
                    'phone'=>auth()->user()->phone,
                    'age'=>auth()->user()->date_of_birth != null ? today()->diffInYears(auth()->user()->date_of_birth) : null,
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



    function rateUser(Route $route,RateUserFormRequest $request){
        try {

            if(!Auth::guard('patient')->check()){
                return redirect()->back()->with('danger', 'You Are Not Autherized To Review !!!');
            }

                $user_id = decrypt($request->rating_user_id);
                $user_type = $request->rating_user_type;
                if ($user_type == 'insurances') {
                    $user = InsuranceCompanyReview::create([
                        'insurance_company_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else if ($user_type == 'hospitals') {
                    $user = HospitalReview::create([
                        'hospital_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else if ($user_type == 'radiology-centers') {
                    $user = RadiologyCenter::create([
                        'radiology_center_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else if ($user_type == 'medical-centers') {
                    $user = MedicalCenterReview::create([
                        'medical_center_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else if ($user_type == 'labs') {
                    $user = LabReview::create([
                        'lab_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else if ($user_type == 'doctors') {
                    $user = DoctorReview::create([
                        'doctor_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else if ($user_type == 'pharmacies') {
                    $user = PharmacyReview::create([
                        'pharmacy_id'=>$user_id,
                        'patient_id'=>Auth::user()->id,
                        'rating_value'=>$request->rating_value,
                        'rating_message'=>$request->rating_message
                    ]);
                } else {
                    return redirect()->back()->with('danger', 'Not Found');
                }

                return redirect()->back()->with('success','Review Sent Successfully');

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
