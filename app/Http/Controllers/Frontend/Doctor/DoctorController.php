<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Doctor\DoctorStoreCertificateFormRequest;
use App\Http\Requests\Frontend\Doctor\DoctorUpdateProfileFormRequest;
use App\Http\Requests\Frontend\Doctor\DoctorUpdateWeekPlanFormRequest;
use App\Models\Doctor;
use App\Models\DoctorCertificate;
use App\Models\DoctorWeekPlan;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{

    use UploadImageTrait;

    function dashboard(Route $route,$active = null)
    {
        try {

            if (!Auth::guard('doctor')->check()) {
                return redirect()->route('welcome')->with('Uautherized');
            }

            $auth = Auth::guard('doctor')->user();

            return view('front_end_inners.doctors.doctor_dashboard', compact('auth','active'));
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


    function doctorUpdateProfile(DoctorUpdateProfileFormRequest $request,$id,Route $route)
    {
        try {
            if(!Auth::guard('doctor')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $user = Auth::guard('doctor')->user();

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
            'speciality_id'=>$request->speciality_id,
            'alias_name_en'=>str_replace(' ','-',$request->name_en),
            'alias_name_ar'=>str_replace(' ','-',$request->name_en),
            'user_description_en'=>$request->overview_en,
            'user_description_ar'=>$request->overview_en,
            'gender'=>$request->gender,
            'languages'=>isset($request->language_id) ? implode(',',$request->language_id) : null
            ];

            if (isset($request->password)) {
                $created_data['password'] = Hash::make($request->password);
            }

            if (isset($request->profile_photo_path)) {
                $orginal_image = $request->file('profile_photo_path');
                $upload_location = 'storage/profile-photos/';
                $original_name = $orginal_image->getClientOriginalName();
                $last_image = $this->saveFileWithOriginalName('doctors', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                $created_data['profile_photo_path']= $last_image;
                File::delete($user->profile_photo_path);
            }

            DB::transaction(function () use ($created_data, $user) {
                $user->update($created_data);
            });

            return redirect()->route('doctor.doctor-dashboard','doctorUpdateProfile')->with('success','updated successfully');

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


    function updateDoctorWeekPlan(DoctorUpdateWeekPlanFormRequest $request,$id,Route $route){
        try {

            if(!Auth::guard('doctor')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $data = [
                'active_days'=>isset($request->active_days) ? implode(',',$request->active_days) :null,
                'saterday_from'=>in_array('saterday',$request->active_days) ? $request->saterday_from : null,
                'saterday_to'=>in_array('saterday',$request->active_days) ? $request->saterday_to : null,
                'every_saterday'=>in_array('saterday',$request->active_days) ? $request->every_saterday : null,
                'sunday_from'=>in_array('sunday',$request->active_days) ? $request->sunday_from : null,
                'sunday_to'=>in_array('sunday',$request->active_days) ? $request->sunday_to : null,
                'every_sunday'=>in_array('sunday',$request->active_days) ? $request->every_sunday : null,
                'monday_from'=>in_array('monday',$request->active_days) ? $request->monday_from :null,
                'monday_to'=>in_array('monday',$request->active_days) ? $request->monday_to :null,
                'every_monday'=>in_array('monday',$request->active_days) ? $request->every_monday :null,
                'tuseday_from'=>in_array('tuseday',$request->active_days) ? $request->tuseday_from :null,
                'tuseday_to'=>in_array('tuseday',$request->active_days) ? $request->tuseday_to :null,
                'every_tuseday'=>in_array('tuseday',$request->active_days) ? $request->every_tuseday :null,
                'wednsday_from'=>in_array('wednsday',$request->active_days) ? $request->wednsday_from :null,
                'wednsday_to'=>in_array('wednsday',$request->active_days) ? $request->wednsday_to :null,
                'every_wednsday'=>in_array('wednsday',$request->active_days) ? $request->every_wednsday :null,
                'thursday_from'=>in_array('thursday',$request->active_days) ? $request->thursday_from :null,
                'thursday_to'=>in_array('thursday',$request->active_days) ? $request->thursday_to :null,
                'every_thursday'=>in_array('thursday',$request->active_days) ? $request->every_thursday :null,
                'friday_from'=>in_array('friday',$request->active_days) ? $request->friday_from :null,
                'friday_to'=>in_array('friday',$request->active_days) ? $request->friday_to :null,
                'every_friday'=>in_array('friday',$request->active_days) ? $request->every_friday :null
            ];

            $doctor = Auth::guard('doctor')->user();

            $week_plan = DoctorWeekPlan::where('doctor_id',$doctor->id)->get()->first();

            if($week_plan){
                DB::transaction(function () use ($data,$week_plan) {
                    $week_plan->update($data);
                });
            }
            else{
                $data['doctor_id'] = $doctor->id;
                DB::transaction(function () use ($data,$week_plan) {
                    DoctorWeekPlan::create($data);
                });
            }

            return redirect()->route('doctor.doctor-dashboard','doctorWeekPlan')->with('success','Week Plan Updated Successfully');


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


    function doctorStoreCertificate(DoctorStoreCertificateFormRequest $request,Route $route){
        try {

            if(!Auth::guard('doctor')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $data=[
                'doctor_id'=>Auth::guard('doctor')->user()->id,
                'name_en'=>$request->name_en,
                'name_ar'=>$request->name_ar,
                'institution_name_ar'=>$request->institution_name_ar,
                'institution_name_en'=>$request->institution_name_en
            ];

            DB::transaction(function () use ($data) {
                DoctorCertificate::create($data);
            });

            return redirect()->route('doctor.doctor-dashboard','doctorCertificates')->with('success','Added Succesfully');

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



    function doctorDeleteCertificate($id,Route $route){
        try {

            if(!Auth::guard('doctor')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $doctor = Auth::guard('doctor')->user();
            $certificate = DoctorCertificate::find($id);

            if($certificate){
                if($certificate->doctor_id != $doctor->id){
                    return redirect()->route('doctor.doctor-dashboard','doctorCertificates')->with('danger','Unautherized!!!!');
                }
                DB::transaction(function () use ($certificate) {
                    $certificate->delete();
                });
            }


            return redirect()->route('doctor.doctor-dashboard','doctorCertificates')->with('success','Removed Succesfully');

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
