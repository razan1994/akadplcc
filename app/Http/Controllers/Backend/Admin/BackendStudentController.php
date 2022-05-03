<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentFormRequest;
use App\Http\Requests\UpdateStudentFormRequest;
use App\Models\PublicRegion;
use App\Models\Student;
use App\Models\SupportTicket;
use App\Traits\SharedMethod;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class BackendStudentController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // ================================================================
    // ======================== index Function ========================
    // ================================================================
    public function index(Request $request, Route $route)
    {
        try {

                $users = new Student();
                $users = $users->select('*')->orderBy('created_at', 'desc')->get();

            return view('admin.students.index', compact('users'));
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
    public function create(Route $route)
    {
        try {


            return view('admin.students.create');
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
    public function store(StoreStudentFormRequest $request, Route $route)
    {
        try {

            // Upload Image Section :
            if (isset($request->profile_photo_path)) {
                $orginal_image = $request->file('profile_photo_path');
                $upload_location = 'storage/profile-photos/';
                $last_image = $this->saveFile($orginal_image,$upload_location);

            } else {
                $last_image = null;
            }

            $created_data = [
                'first_name' => $request->first_name,
                'mid_first_name' => $request->mid_first_name,
                'mid_last_name' => $request->mid_last_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'user_status' => $request->user_status,
                'payment_status' => $request->payment_status,
                'profile_photo_path' => $last_image,
                'created_by' => auth()->user()->id
            ];


            DB::transaction(function () use ($created_data,$request) {
                // Save Main User Information Section :
                // =====================================================================

                    Student::create($created_data);

            });

            return redirect()->route('super_admin.students-index')->with('success', 'The data has been successfully updated');
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
    public function show($user_id, Route $route)
    {
        try {
                $user =Student::find($user_id);

            if ($user) {
                return view('admin.students.show', compact('user'));
            } else {
                return redirect()->route('super_admin.students-index')->with('danger', 'This record number is not in the records');
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
    public function edit($user_id, Route $route)
    {
        try {
                $user =Student::find($user_id);


            if ($user) {
                return view('admin.students.edit', compact('user'));
            } else {
                return redirect()->route('super_admin.students-index')->with('danger', 'This record is not in the records');
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
    public function update($user_id,UpdateStudentFormRequest $request,Route $route)
    {

        try {

                $user =Student::find($user_id);

            if ($user) {
                // Standard Updated Data :
                $update_data['first_name'] = $request->first_name;
                $update_data['mid_first_name'] = $request->mid_first_name;
                $update_data['mid_last_name'] = $request->mid_last_name;
                $update_data['last_name'] = $request->last_name;
                $update_data['username'] = $request->username;
                $update_data['email'] = $request->email;
                $update_data['phone'] = $request->phone;
                $update_data['user_status'] = $request->user_status;
                $update_data['payment_status'] = $request->payment_status;
                // Add Password to updated date if exist :
                if (isset($request->password)) {
                    $update_data['password'] = Hash::make($request->password);
                }

                // Upload Image Section :
                if (isset($request->profile_photo_path)) {
                    $orginal_image = $request->file('profile_photo_path');
                    $upload_location = 'storage/profile-photos/';
                    $original_name = $orginal_image->getClientOriginalName();
                        $last_image = $this->saveFile($orginal_image,$upload_location);

                    $update_data['profile_photo_path']= $last_image;
                    File::delete($user->profile_photo_path);
                }

                if ($user){
                    $user->update($update_data);
                }else{
                    return redirect()->back()->with('danger','User Not Found !!!!');
                }

                return redirect()->route('super_admin.students-index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.students-index')->with('danger', 'This record does not exist in the records');
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
    public function acceptSingle($user_id, Route $route)
    {

    }

    // ================================================================
    // =================== Reject Single User =========================
    // ================================================================
    public function rejectSingle($user_id, Route $route)
    {

    }

    // ================================================================
    // =============== Active/Inactive Single User ====================
    // ================================================================
    public function activeInactiveSingle($user_id, Route $route)
    {

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
