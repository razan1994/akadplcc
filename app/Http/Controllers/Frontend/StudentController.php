<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Student\StudentRegisterFormRequest;
use App\Models\Student;
use App\Models\StudentInformation;
use App\Models\SupportTicket;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    function register(Route $route, StudentRegisterFormRequest $request)
    {
        try {

            $created_data = [
                'first_name' => $request->first_name,
                'mid_first_name' => $request->mid_first_name,
                'mid_last_name' => $request->mid_last_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'user_status' => 2,
            ];

            // Start the transaction
            $user = Student::create($created_data);
            Auth::guard('student')->login($user);
            return redirect()->back()->with('success', 'تم التسجيل بنجاح ...');
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


    function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        // التحقق اذا كان الدخول عن طريق رقم الهاتف او الايميل
        if (is_numeric($request->get('email'))) {
            // Attempt to log the patient in
            if (Auth::guard('student')->attempt(['phone' => $request->email, 'password' => $request->password])) {
                Auth::guard('student')->user();
                // return "logged in Patient";
                return redirect()->route('student.student-profile');

                // Attempt to log the doctor in
            }
        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            // Attempt to log the patient in
            if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {
                Auth::guard('student')->user();
                return redirect()->route('student.student-profile');
            }
        }


        return redirect()->back()->with('login_error','البريد الالكتروني او كلمة المرور غير صحيحة');
    }



    function studentProfile(Route $route){
        try {

            $auth = Auth::guard('student')->user();
            return view('front_end_inners.myAccount',compact('auth'));

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



    function cvFirst(Route $route){
        try {

            $auth = Auth::guard('student')->user();
            return view('front_end_inners.resume',compact('auth'));

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




    function add_job_title(Request $request){

        $request->validate(['job_title'=>'required']);

        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }

        $info = StudentInformation::where('student_id',Auth::guard('student')->user()->id)->get()->first();

        if($info){
            $info->update(['job_title'=>$request->job_title]);
        }else{
            StudentInformation::create([
                                        'student_id'=>Auth::guard('student')->user()->id,
                                        'job_title'=>$request->job_title
                                        ]);
        }



        $info = StudentInformation::where('student_id',Auth::guard('student')->user()->id)->get()->first();
        if($info){

            $output = '';

            $output .= isset($info->job_title) ? $info->job_title : '<span class="text-danger">Undefined</span>';
            $output .= '<a data-toggle="modal" data-target="#job_title_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a>';

            return response()->json(['status'=>true,'output'=>$output]);

        }else{
            return response()->json(['status'=>false]);
        }

    }



    function add_over_view(Request $request){

        $request->validate(['over_view'=>'required']);

        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }

        $info = StudentInformation::where('student_id',Auth::guard('student')->user()->id)->get()->first();

        if($info){
            $info->update(['over_view'=>$request->over_view]);
        }else{
            StudentInformation::create([
                                        'student_id'=>Auth::guard('student')->user()->id,
                                        'over_view'=>$request->over_view
                                        ]);
        }



        $info = StudentInformation::where('student_id',Auth::guard('student')->user()->id)->get()->first();
        if($info){

            $output = '';

            $output .= isset($info->over_view) ? $info->over_view : '<span class="text-danger">Undefined</span>';
            $output .= '<a data-toggle="modal" data-target="#over_view_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a>';

            return response()->json(['status'=>true,'output'=>$output]);

        }else{
            return response()->json(['status'=>false]);
        }

    }


}
