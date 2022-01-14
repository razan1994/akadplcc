<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Users\StoreUserFormRequest;
use App\Http\Requests\Backend\Users\UpdateUserFormRequest;
use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\PublicCountry;
use App\Models\PublicRegion;
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // ================================================================
    // ======================== index Function ========================
    // ================================================================
    public function index(Request $request,$user_type, Route $route)
    {
        try {

            if($user_type == "Super Admin"){
                $users = new User();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Insurance Company"){
                $users = new InsuranceCompany();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Hospital"){
                $users = new Hospital();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Radiology Center"){
                $users = new RadiologyCenter();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Medical Center"){
                $users = new MedicalCenter();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Lab"){
                $users = new Lab();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Doctor"){
                $users = new Doctor();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Patient"){
                $users = new Patient();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Pharmacy"){
                $users = new Pharmacy();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "SEO Admin"){
                $users = new SeoAdmin();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Gym"){
                $users = new Gym();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }

            else if($user_type == "Life Coach"){
                $users = new LifeCoutch();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();
            }
            else{
                return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
            }

            return view('admin.users.index', compact('users','user_type'));
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

    // ================================================================
    // ======================= Create Function ========================
    // ================================================================
    public function create(Route $route,$user_type)
    {
        try {

            if($user_type == "Undefined"){
                return redirect()->back()->with('danger','Please Dont Change The Request Data !!!!!');
            }
            $public_countries = PublicCountry::get();
            $specialities = DoctorSpeciality::get();
            return view('admin.users.create',compact('specialities','user_type','public_countries'));
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


    // ================================================================
    // ======================= Store Function =========================
    // ================================================================
    public function store(StoreUserFormRequest $request, Route $route)
    {
        try {

            // Upload Image Section :
            if (isset($request->profile_photo_path)) {
                $orginal_image = $request->file('profile_photo_path');
                $upload_location = 'storage/profile-photos/';
                $original_name = $orginal_image->getClientOriginalName();
                if ($request->user_type == 'Super Admin') {
                    $last_image = $this->saveFileWithOriginalName('users', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Insurance Company') {
                    $last_image = $this->saveFileWithOriginalName('insurance_companies', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Hospital') {
                    $last_image = $this->saveFileWithOriginalName('hospitals', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Radiology Center') {
                    $last_image = $this->saveFileWithOriginalName('radiology_centers', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Medical Center') {
                    $last_image = $this->saveFileWithOriginalName('medical_centers', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Lab') {
                    $last_image = $this->saveFileWithOriginalName('labs', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Doctor') {
                    $last_image = $this->saveFileWithOriginalName('doctors', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Patient') {
                    $last_image = $this->saveFileWithOriginalName('patients', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Pharmacy') {
                    $last_image = $this->saveFileWithOriginalName('pharmacies', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'SEO Admin') {
                    $last_image = $this->saveFileWithOriginalName('seo_admins', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Life Coach') {
                    $last_image = $this->saveFileWithOriginalName('life_coaches', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                } else if ($request->user_type == 'Gym') {
                    $last_image = $this->saveFileWithOriginalName('gyms', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                }
            } else {
                $last_image = null;
            }

            $created_data = [
                'name_ar' => $request->name_ar,
                'name_en' => $request->name_en,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
                'user_status' => $request->user_status,
                'profile_photo_path' => $last_image,
                'created_by' => auth()->user()->id,
                'alias_name_en'=>str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->name_en),
                'alias_name_ar'=>str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->name_ar),
                'country_id'=>$request->country_id,
                'region_id'=>$request->region_id,
            ];
            if($request->user_type == "Doctor"){
                $created_data['user_description_en'] = $request->user_description_en;
                $created_data['user_description_ar'] = $request->user_description_ar;
            }
            if($request->user_type == "Doctor"){
                $created_data['speciality_id']=$request->speciality_id;
            }

            DB::transaction(function () use ($created_data) {
                // Save Main User Information Section :
                // =====================================================================
                if ($created_data['user_type'] == 'Super Admin') {
                    User::create($created_data);
                } else if ($created_data['user_type'] == 'Insurance Company') {
                    InsuranceCompany::create($created_data);
                } else if ($created_data['user_type'] == 'Hospital') {
                    Hospital::create($created_data);
                } else if ($created_data['user_type'] == 'Radiology Center') {
                    RadiologyCenter::create($created_data);
                } else if ($created_data['user_type'] == 'Medical Center') {
                    MedicalCenter::create($created_data);
                } else if ($created_data['user_type'] == 'Lab') {
                    Lab::create($created_data);
                } else if ($created_data['user_type'] == 'Doctor') {
                    Doctor::create($created_data);
                } else if ($created_data['user_type'] == 'Patient') {
                    Patient::create($created_data);
                } else if ($created_data['user_type'] == 'Pharmacy') {
                    Pharmacy::create($created_data);
                } else if ($created_data['user_type'] == 'SEO Admin') {
                    SeoAdmin::create($created_data);
                } else if ($created_data['user_type'] == 'Life Coach') {
                    LifeCoutch::create($created_data);
                } else if ($created_data['user_type'] == 'Gym') {
                    Gym::create($created_data);
                }
            });

            return redirect()->route('super_admin.users-index',$request->user_type)->with('success', 'The data has been successfully updated');
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

    // ================================================================
    // ======================== Show Function =========================
    // ================================================================
    public function show($user_id, $user_type, Route $route)
    {
        try {
            if($user_type == "Super Admin"){
                $user =User::find($user_id);
            }

            else if($user_type == "Insurance Company"){
                $user =InsuranceCompany::find($user_id);
            }

            else if($user_type == "Hospital"){
                $user =Hospital::find($user_id);
                }

            else if($user_type == "Radiology Center"){
                $user =RadiologyCenter::find($user_id);
            }

            else if($user_type == "Medical Center"){
                $user =MedicalCenter::find($user_id);
            }

            else if($user_type == "Lab"){
                $user =Lab::find($user_id);
            }

            else if($user_type == "Doctor"){
                $user =Doctor::find($user_id);
            }

            else if($user_type == "Patient"){
                $user =Patient::find($user_id);
            }

            else if($user_type == "Pharmacy"){
                $user =Pharmacy::find($user_id);
            }

            else if($user_type == "SEO Admin"){
                $user =SeoAdmin::find($user_id);
            }

            else if($user_type == "Gym"){
                $user =Gym::find($user_id);
            }

            else if($user_type == "Life Coach"){
                $user =LifeCoutch::find($user_id);
            }
            else{
                return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
            }

            if ($user) {
                return view('admin.users.show', compact('user','user_type'));
            } else {
                return redirect()->route('super_admin.users-index',$user_type)->with('danger', 'This record number is not in the records');
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

    // ================================================================
    // ======================== Edit Function =========================
    // ================================================================
    public function edit($user_id, $user_type, Route $route)
    {
        try {
            if($user_type == "Super Admin"){
                $user =User::find($user_id);
            }

            else if($user_type == "Insurance Company"){
                $user =InsuranceCompany::find($user_id);
            }

            else if($user_type == "Hospital"){
                $user =Hospital::find($user_id);
                }

            else if($user_type == "Radiology Center"){
                $user =RadiologyCenter::find($user_id);
            }

            else if($user_type == "Medical Center"){
                $user =MedicalCenter::find($user_id);
            }

            else if($user_type == "Lab"){
                $user =Lab::find($user_id);
            }

            else if($user_type == "Doctor"){
                $user =Doctor::find($user_id);
            }

            else if($user_type == "Patient"){
                $user =Patient::find($user_id);
            }

            else if($user_type == "Pharmacy"){
                $user =Pharmacy::find($user_id);
            }

            else if($user_type == "SEO Admin"){
                $user =SeoAdmin::find($user_id);
            }

            else if($user_type == "Gym"){
                $user =Gym::find($user_id);
            }

            else if($user_type == "Life Coach"){
                $user =LifeCoutch::find($user_id);
            }
            else{
                return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
            }

            if ($user) {
                $specialities = DoctorSpeciality::get();
                $public_countries = PublicCountry::get();
                return view('admin.users.edit', compact('user','user_type','specialities','public_countries'));
            } else {
                return redirect()->route('super_admin.users-index',$user_type)->with('danger', 'This record is not in the records');
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

    // ================================================================
    // ======================= Update Function ========================
    // ================================================================
    public function update($user_id, UpdateUserFormRequest $request,Route $route)
    {
        try {
            if($request->user_type == "Super Admin"){
                $user =User::find($user_id);
            }

            else if($request->user_type == "Insurance Company"){
                $user =InsuranceCompany::find($user_id);
            }

            else if($request->user_type == "Hospital"){
                $user =Hospital::find($user_id);
                }

            else if($request->user_type == "Radiology Center"){
                $user =RadiologyCenter::find($user_id);
            }

            else if($request->user_type == "Medical Center"){
                $user =MedicalCenter::find($user_id);
            }

            else if($request->user_type == "Lab"){
                $user =Lab::find($user_id);
            }

            else if($request->user_type == "Doctor"){
                $user =Doctor::find($user_id);
            }

            else if($request->user_type == "Patient"){
                $user =Patient::find($user_id);
            }

            else if($request->user_type == "Pharmacy"){
                $user =Pharmacy::find($user_id);
            }

            else if($request->user_type == "SEO Admin"){
                $user =SeoAdmin::find($user_id);
            }

            else if($request->user_type == "Gym"){
                $user =Gym::find($user_id);
            }

            else if($request->user_type == "Life Coach"){
                $user =LifeCoutch::find($user_id);
            }
            else{
                return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
            }

            if ($user) {
                // Standard Updated Data :
                $update_data['name_ar'] = $request->name_ar;
                $update_data['name_en'] = $request->name_en;
                $update_data['username'] = $request->username;
                $update_data['email'] = $request->email;
                $update_data['phone'] = $request->phone;
                $update_data['user_status'] = $request->user_status;
                $update_data['country_id'] = $request->country_id;
                $update_data['region_id'] = $request->region_id;
                if($request->user_type == "Doctor"){
                $update_data['user_description_ar'] = $request->user_description_ar;
                $update_data['user_description_en'] = $request->user_description_en;
                }
                $update_data['alias_name_en'] = str_replace(array(' ','"','>','<','#','%','|','/'),'-',$update_data['name_en']);
                $update_data['alias_name_ar'] = str_replace(array(' ','"','>','<','#','%','|','/'),'-',$update_data['name_ar']);
                // Add Password to updated date if exist :
                if (isset($request->password)) {
                    $update_data['password'] = Hash::make($request->password);
                }

                // Upload Image Section :
                if (isset($request->profile_photo_path)) {
                    $orginal_image = $request->file('profile_photo_path');
                    $upload_location = 'storage/profile-photos/';
                    $original_name = $orginal_image->getClientOriginalName();
                    if ($request->user_type == 'Super Admin') {
                        $last_image = $this->saveFileWithOriginalName('users', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Insurance Company') {
                        $last_image = $this->saveFileWithOriginalName('insurance_companies', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Hospital') {
                        $last_image = $this->saveFileWithOriginalName('hospitals', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Radiology Center') {
                        $last_image = $this->saveFileWithOriginalName('radiology_centers', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Medical Center') {
                        $last_image = $this->saveFileWithOriginalName('medical_centers', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Lab') {
                        $last_image = $this->saveFileWithOriginalName('labs', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Doctor') {
                        $last_image = $this->saveFileWithOriginalName('doctors', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Patient') {
                        $last_image = $this->saveFileWithOriginalName('patients', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Pharmacy') {
                        $last_image = $this->saveFileWithOriginalName('pharmacies', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'SEO Admin') {
                        $last_image = $this->saveFileWithOriginalName('seo_admins', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Life Coach') {
                        $last_image = $this->saveFileWithOriginalName('life_coaches', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    } else if ($request->user_type == 'Gym') {
                        $last_image = $this->saveFileWithOriginalName('gyms', 'profile_photo_path', $orginal_image, $original_name, $upload_location);
                    }
                    $update_data['profile_photo_path']= $last_image;
                    File::delete($user->profile_photo_path);
                }

                if ($user){
                    $user->update($update_data);
                }else{
                    return redirect()->back()->with('danger','User Not Found !!!!');
                }

                return redirect()->route('super_admin.users-index',$request->user_type)->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.users-index',$request->user_type)->with('danger', 'This record does not exist in the records');
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

    // ================================================================
    // =================== Accept Single User =========================
    // ================================================================
    public function acceptSingle($user_id, $user_type, Route $route)
    {
        try {
            if ($user_type == 'Super Admin') {
                return redirect()->back()->with('danger', 'This action is not allowed on the super admin');
            }
                else if($user_type == "Insurance Company"){
                    $user =InsuranceCompany::find($user_id);
                }

                else if($user_type == "Hospital"){
                    $user =Hospital::find($user_id);
                    }

                else if($user_type == "Radiology Center"){
                    $user =RadiologyCenter::find($user_id);
                }

                else if($user_type == "Medical Center"){
                    $user =MedicalCenter::find($user_id);
                }

                else if($user_type == "Lab"){
                    $user =Lab::find($user_id);
                }

                else if($user_type == "Doctor"){
                    $user =Doctor::find($user_id);
                }

                else if($user_type == "Patient"){
                    $user =Patient::find($user_id);
                }

                else if($user_type == "Pharmacy"){
                    $user =Pharmacy::find($user_id);
                }

                else if($user_type == "SEO Admin"){
                    $user =SeoAdmin::find($user_id);
                }

                else if($user_type == "Gym"){
                    $user =Gym::find($user_id);
                }

                else if($user_type == "Life Coach"){
                    $user =LifeCoutch::find($user_id);
                }
                else{
                    return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
                }
            if ($user) {
                if ($user->user_status == 'Pendding') {
                    $user->user_status = 2;  // 2 => Active
                    $user->save();
                    $update_data = $user->toArray();
                    $update_data['user_status'] = 2;
                    return redirect()->back()->with('success', 'The process has successfully');
                } else {
                    return redirect()->back()->with('danger', 'An unexpected error occurred');
                }
            } else {
                return redirect()->back()->with('danger', 'This record is not in the records');
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

    // ================================================================
    // =================== Reject Single User =========================
    // ================================================================
    public function rejectSingle($user_id, $user_type, Route $route)
    {
        try {
            if ($user_type == 'Super Admin') {
                return redirect()->back()->with('danger', 'This action is not allowed on the super admin');
            }
                else if($user_type == "Insurance Company"){
                    $user =InsuranceCompany::find($user_id);
                }

                else if($user_type == "Hospital"){
                    $user =Hospital::find($user_id);
                    }

                else if($user_type == "Radiology Center"){
                    $user =RadiologyCenter::find($user_id);
                }

                else if($user_type == "Medical Center"){
                    $user =MedicalCenter::find($user_id);
                }

                else if($user_type == "Lab"){
                    $user =Lab::find($user_id);
                }

                else if($user_type == "Doctor"){
                    $user =Doctor::find($user_id);
                }

                else if($user_type == "Patient"){
                    $user =Patient::find($user_id);
                }

                else if($user_type == "Pharmacy"){
                    $user =Pharmacy::find($user_id);
                }

                else if($user_type == "SEO Admin"){
                    $user =SeoAdmin::find($user_id);
                }

                else if($user_type == "Gym"){
                    $user =Gym::find($user_id);
                }

                else if($user_type == "Life Coach"){
                    $user =LifeCoutch::find($user_id);
                }
                else{
                    return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
                }
            if ($user) {
                if ($user->user_status == 'Pendding') {
                    $user->user_status = 3;  // 3 => Blocked
                    $user->save();
                    $update_data = $user->toArray();
                    $update_data['user_status'] = 3;
                    return redirect()->back()->with('success', 'The process has successfully');
                } else {
                    return redirect()->back()->with('danger', 'An unexpected error occurred');
                }
            } else {
                return redirect()->back()->with('danger', 'This record is not in the records');
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

    // ================================================================
    // =============== Active/Inactive Single User ====================
    // ================================================================
    public function activeInactiveSingle($user_id, $user_type, Route $route)
    {
        try {
            if ($user_type == 'Super Admin') {
                return redirect()->back()->with('danger', 'This action is not allowed on the super admin');
            }
                else if($user_type == "Insurance Company"){
                    $user =InsuranceCompany::find($user_id);
                }

                else if($user_type == "Hospital"){
                    $user =Hospital::find($user_id);
                    }

                else if($user_type == "Radiology Center"){
                    $user =RadiologyCenter::find($user_id);
                }

                else if($user_type == "Medical Center"){
                    $user =MedicalCenter::find($user_id);
                }

                else if($user_type == "Lab"){
                    $user =Lab::find($user_id);
                }

                else if($user_type == "Doctor"){
                    $user =Doctor::find($user_id);
                }

                else if($user_type == "Patient"){
                    $user =Patient::find($user_id);
                }

                else if($user_type == "Pharmacy"){
                    $user =Pharmacy::find($user_id);
                }

                else if($user_type == "SEO Admin"){
                    $user =SeoAdmin::find($user_id);
                }

                else if($user_type == "Gym"){
                    $user =Gym::find($user_id);
                }

                else if($user_type == "Life Coach"){
                    $user =LifeCoutch::find($user_id);
                }
                else{
                    return redirect()->back()->with('danger','Please Dont Change The URL !!!!');
                }

            if ($user) {
                if ($user->user_status == 'Active') {
                    $user->user_status = 3;  // 3 => Inactive
                    $user->save();
                    $update_data = $user->toArray();
                    $update_data['user_status'] = 3;
                } elseif ($user->user_status == 'Inactive') {
                    $user->user_status = 2;  // 2 => Active
                    $user->save();
                    $update_data = $user->toArray();
                    $update_data['user_status'] = 2;
                } elseif ($user->user_status == 'Pendding') {
                    return redirect()->back()->with('danger', 'This user\'s request is still pending, it must be accepted first');
                }
                return redirect()->back()->with('success', 'The process has successfully');
            } else {
                return redirect()->back()->with('danger', 'This record is not in the records');
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


        // ========================================================================
    // ================ Fetch Regions By Country ID (AJAX) ====================
    // ========================================================================
    public function getRegions(Request $request)
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

}
