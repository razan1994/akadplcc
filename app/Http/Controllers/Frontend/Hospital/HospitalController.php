<?php

namespace App\Http\Controllers\Frontend\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Hospital\HospitalStoreImageFormRequest;
use App\Http\Requests\Frontend\Hospital\HospitalUpdateProfileFormRequest;
use App\Http\Requests\Frontend\Hospital\HospitalUpdateWeekPlanFormRequest;
use App\Models\HospitalGallery;
use App\Models\HospitalWeekPlan;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class HospitalController extends Controller
{
    use UploadImageTrait;

    function dashboard(Route $route,$active = null)
    {
        try {

            if (!Auth::guard('hospital')->check()) {
                return redirect()->route('welcome')->with('Uautherized');
            }

            $auth = Auth::guard('hospital')->user();

            return view('front_end_inners.hospitals.hospital_dashboard', compact('auth','active'));
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


    function hospitalUpdateProfile(HospitalUpdateProfileFormRequest $request,$id,Route $route)
    {
        try {
            if(!Auth::guard('hospital')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $user = Auth::guard('hospital')->user();

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
            'alias_name_en'=>str_replace(' ','',$request->name_en),
            'alias_name_ar'=>str_replace(' ','',$request->name_en),
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
                $last_image = $this->saveFileWithOriginalName('hospitals', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                $created_data['profile_photo_path']= $last_image;
                File::delete($user->profile_photo_path);
            }

            DB::transaction(function () use ($created_data, $user) {
                $user->update($created_data);
            });

            return redirect()->route('hospital.hospital-dashboard','hospitalUpdateProfile')->with('success','updated successfully');

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


    function updateHospitalWeekPlan(HospitalUpdateWeekPlanFormRequest $request,$id,Route $route){
        try {

            if(!Auth::guard('hospital')->check()){
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

            $hospital = Auth::guard('hospital')->user();

            $week_plan = HospitalWeekPlan::where('hospital_id',$hospital->id)->get()->first();

            if($week_plan){
                DB::transaction(function () use ($data,$week_plan) {
                    $week_plan->update($data);
                });
            }
            else{
                $data['hospital_id'] = $hospital->id;
                DB::transaction(function () use ($data,$week_plan) {
                    HospitalWeekPlan::create($data);
                });
            }

            return redirect()->route('hospital.hospital-dashboard','hospitalWeekPlan')->with('success','Week Plan Updated Successfully');


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



    function hospitalStoreImages(HospitalStoreImageFormRequest $request,Route $route){
        try {

            if(!Auth::guard('hospital')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $hospital = Auth::guard('hospital')->user();


            // Upload Main Image Blog :
            if (isset($request->image)) {
                $request_data = [
                    'hospital_id' => $hospital->id,
                ];
                foreach ($request->image as $key => $value) {
                    $orginal_image = $value;
                    $upload_location = 'storage/hospital_gallery/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $file_name = $this->saveFileWithOriginalName('hospital_galleries', 'image', $orginal_image, $original_name, $upload_location);
                    $request_data['image'] = $file_name;
                    DB::transaction(function () use ($request_data) {
                        HospitalGallery::create($request_data);
                    });
                }
            } else {
                return redirect()->back()->with('danger', 'You must add an image to the news blog ');
            }


            return redirect()->route('hospital.hospital-dashboard','gallery')->with('success','Images Added Successfully');


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



    function hospitalDeleteImage($id,Route $route){
        try {
            if(!Auth::guard('hospital')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $image = HospitalGallery::find($id);
            if($image){
                DB::transaction(function () use ($image) {
                    File::delete($image->image);
                    $image->delete();
                });

                return redirect()->route('hospital.hospital-dashboard','gallery')->with('success','Image Deleted Succesfully');
            }else{
                return redirect()->route('hospital.hospital-dashboard','gallery')->with('danger','Image Not Found');
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
