<?php

namespace App\Http\Controllers\Frontend\Medical;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Medical\MedicalStoreImageFormRequest;
use App\Http\Requests\Frontend\Medical\MedicalUpdateProfileFormRequest;
use App\Http\Requests\Frontend\Medical\MedicalUpdateWeekPlanFormRequest;
use App\Models\MedicalCenterGallery;
use App\Models\MedicalCenterWeekPlan;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class MedicalController extends Controller
{
    use UploadImageTrait;

    function dashboard(Route $route,$active = null)
    {
        try {

            if (!Auth::guard('medical_center')->check()) {
                return redirect()->route('welcome')->with('Uautherized');
            }

            $auth = Auth::guard('medical_center')->user();

            return view('front_end_inners.medical_centers.medical_dashboard', compact('auth','active'));
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


    function medicalUpdateProfile(MedicalUpdateProfileFormRequest $request,$id,Route $route)
    {
        try {
            if(!Auth::guard('medical_center')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $user = Auth::guard('medical_center')->user();

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
                $last_image = $this->saveFileWithOriginalName('medical_centers', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                $created_data['profile_photo_path']= $last_image;
                File::delete($user->profile_photo_path);
            }

            DB::transaction(function () use ($created_data, $user) {
                $user->update($created_data);
            });

            return redirect()->route('medical_center.medical-dashboard','medicalUpdateProfile')->with('success','updated successfully');

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


    function updateMedicalWeekPlan(MedicalUpdateWeekPlanFormRequest $request,$id,Route $route){
        try {

            if(!Auth::guard('medical_center')->check()){
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

            $medical_center = Auth::guard('medical_center')->user();

            $week_plan = MedicalCenterWeekPlan::where('medical_center_id',$medical_center->id)->get()->first();

            if($week_plan){
                DB::transaction(function () use ($data,$week_plan) {
                    $week_plan->update($data);
                });
            }
            else{
                $data['medical_center_id'] = $medical_center->id;
                DB::transaction(function () use ($data,$week_plan) {
                    MedicalCenterWeekPlan::create($data);
                });
            }

            return redirect()->route('medical_center.medical-dashboard','medicalWeekPlan')->with('success','Week Plan Updated Successfully');


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



    function medicalStoreImages(MedicalStoreImageFormRequest $request,Route $route){
        try {

            if(!Auth::guard('medical_center')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $medical_center = Auth::guard('medical_center')->user();


            // Upload Main Image Blog :
            if (isset($request->image)) {
                $request_data = [
                    'medical_center_id' => $medical_center->id,
                ];
                foreach ($request->image as $key => $value) {
                    $orginal_image = $value;
                    $upload_location = 'storage/medical_center_gallery/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $file_name = $this->saveFileWithOriginalName('medical_center_galleries', 'image', $orginal_image, $original_name, $upload_location);
                    $request_data['image'] = $file_name;
                    DB::transaction(function () use ($request_data) {
                        MedicalCenterGallery::create($request_data);
                    });
                }
            } else {
                return redirect()->back()->with('danger', 'You must add an image to the news blog ');
            }


            return redirect()->route('medical_center.medical-dashboard','gallery')->with('success','Images Added Successfully');


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



    function medicalDeleteImage($id,Route $route){
        try {
            if(!Auth::guard('medical_center')->check()){
                return redirect()->route('welcome')->with('danger','You Are Not Autherized');
            }

            $image = medicalCenterGallery::find($id);
            if($image){
                DB::transaction(function () use ($image) {
                    File::delete($image->image);
                    $image->delete();
                });

                return redirect()->route('medical_center.medical-dashboard','gallery')->with('success','Image Deleted Succesfully');
            }else{
                return redirect()->route('medical_center.medical-dashboard','gallery')->with('danger','Image Not Found');
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
