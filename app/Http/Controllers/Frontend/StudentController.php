<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Student\StudentRegisterFormRequest;
use App\Models\Student;
use App\Models\StudentEducation;
use App\Models\StudentExperience;
use App\Models\StudentInformation;
use App\Models\StudentSkill;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    use UploadImageTrait;

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


    function cvSecond(Route $route){
        try {

            $auth = Auth::guard('student')->user();
            return view('front_end_inners.resume1',compact('auth'));

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




    function cvThird(Route $route){
        try {

            $auth = Auth::guard('student')->user();
            return view('front_end_inners.resume2',compact('auth'));

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

    function add_experience(Request $request){

        // return $request;
        $request->validate([
            'company_name'=>'required',
            'job_title'=>'required',
            'experience'=>'required',
            'untill_now'=>'required|numeric'
        ]);

        if($request->untill_now == 2){
            $request->validate([
                'from_date'=>'required|before:today|before:to_date',
                'to_date'=>'required|before:today|after:from_date'
            ]);
        }
        else{
            $request->validate([
            'from_date'=>'required|before:today'
            ]);
        }


        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


            StudentExperience::create([
                'student_id'=>Auth::guard('student')->user()->id,
                'company_name'=>$request->company_name,
                'job_title'=>$request->job_title,
                'experience'=>$request->experience,
                'from_date'=>$request->from_date,
                'untill_now'=>$request->untill_now,
                'to_date'=>$request->to_date
            ]);



        $experiences = StudentExperience::where('student_id',Auth::guard('student')->user()->id)->get();
        if(isset($experiences) && $experiences->count() > 0){
            $output = '';
            foreach($experiences as $experience){
                $output .='<div class="c_itme_ex">
                                        <div class="c_date">
                                            <p>'.date("F Y", strtotime($experience->from_date)).' - ';
                                            if($experience->untill_now == 1){
                                                $output.='Till Now';
                                            }else{
                                                $output.=date("F Y", strtotime($experience->to_date));
                                            }
                                            $output.='</p>
                                            <a class="float-right text-danger delete_ex" style="cursor: pointer;" data-id="'.$experience->id.'"><i class="fa fa-trash"></i></a>
                                        </div>
                                        <div class="c_company">
                                            <p>
                                                '.$experience->company_name.'
                                            </p>
                                        </div>
                                        <div class="c_postionss">
                                            <span>
                                                '.$experience->job_title.'
                                            </span>
                                        </div>
                                        <ul>
                                            <li class="font-weight-normal">'.$experience->experience.'</li>
                                        </ul>
                                    </div>';
            }

            return response()->json(['status'=>true,'output'=>$output]);

        }else{
            return response()->json(['status'=>false]);
        }

    }


    function delete_experience(Request $request){

        // return $request;
        $request->validate([
            'id'=>'required'
        ]);


        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


            $experience_delete = StudentExperience::find($request->id);


            if($experience_delete){
                if($experience_delete->student_id == Auth::guard('student')->user()->id){
                    $experience_delete->delete();
                }
                else{
                    return response()->json(['status'=>false]);
                }
            }
            else{
                return response()->json(['status'=>false]);
            }


        $experiences = StudentExperience::where('student_id',Auth::guard('student')->user()->id)->get();
        $output = '';
        if(isset($experiences) && $experiences->count() > 0){
            foreach($experiences as $experience){
                $output .='<div class="c_itme_ex">
                                        <div class="c_date">
                                            <p>'.date("F Y", strtotime($experience->from_date)).' - ';
                                            if($experience->untill_now == 1){
                                                $output.='Till Now';
                                            }else{
                                                $output.=date("F Y", strtotime($experience->to_date));
                                            }
                                            $output.='</p>
                                            <a class="float-right text-danger delete_ex" style="cursor: pointer;" data-id="'.$experience->id.'"><i class="fa fa-trash"></i></a>
                                        </div>
                                        <div class="c_company">
                                            <p>
                                                '.$experience->company_name.'
                                            </p>
                                        </div>
                                        <div class="c_postionss">
                                            <span>
                                                '.$experience->job_title.'
                                            </span>
                                        </div>
                                        <ul>
                                            <li class="font-weight-normal">'.$experience->experience.'</li>
                                        </ul>
                                    </div>';
            }


        }
        return response()->json(['status'=>true,'output'=>$output]);

    }



    function add_contact_info(Request $request){

        $request->validate([
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required'
        ]);

        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }

        $info = StudentInformation::where('student_id',Auth::guard('student')->user()->id)->get()->first();

        if($info){
            $info->update([
                'email'=>$request->email,
                'phone'=>$request->phone,
                'link'=>$request->link,
                'address'=>$request->address
            ]);
        }else{
            StudentInformation::create([
                                        'student_id'=>Auth::guard('student')->user()->id,
                                        'email'=>$request->email,
                                        'phone'=>$request->phone,
                                        'link'=>$request->link,
                                        'address'=>$request->address
                                        ]);
        }



        $info = StudentInformation::where('student_id',Auth::guard('student')->user()->id)->get()->first();
        if($info){

            $output = '';

            $output .='<li><i class="fas fa-phone-alt"></i><span>'.$info->phone.'</span></li>';
            $output .='<li><i class="fas fa-envelope"></i><span>'.$info->email.'</span></li>';
            if(isset($info->link)){
                $output .='<li><i class="fas fa-globe"></i><span>'.$info->link.'</span></li>';
            }
            $output .= '<li><i class="fas fa-home"></i><span>'.$info->address.'</span></li>';

            return response()->json(['status'=>true,'output'=>$output]);

        }else{
            return response()->json(['status'=>false]);
        }

    }



    function add_skills(Request $request){

        // return $request;
        $request->validate([
            'skill_name'=>'required',
            'range'=>'required|numeric',
        ]);


        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


            StudentSkill::create([
                'student_id'=>Auth::guard('student')->user()->id,
                'skill_name'=>$request->skill_name,
                'range'=>$request->range
            ]);



        $skills = StudentSkill::where('student_id',Auth::guard('student')->user()->id)->get();
        if(isset($skills) && $skills->count() > 0){
            $output = '';
            foreach($skills as $skill){
                $output .='<div class="c_temem">
                <a class="float-right text-danger delete_skill" style="cursor: pointer;" data-id="'.$skill->id.'"><i class="fa fa-trash"></i></a>
                                <h5>'.$skill->skill_name.'</h5>
                                <div class="c_progress" style="margin-top:10px;">
                                    <div class="c_bar" style="width:'.$skill->range.'%">
                                        <p class="c_percent"> '.$skill->range.'%</p>
                                    </div>
                                </div>
                            </div>';
            }

            return response()->json(['status'=>true,'output'=>$output]);

        }else{
            return response()->json(['status'=>false]);
        }

    }



    function delete_skill(Request $request){

        // return $request;
        $request->validate([
            'id'=>'required'
        ]);


        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


            $skill_delete = StudentSkill::find($request->id);


            if($skill_delete){
                if($skill_delete->student_id == Auth::guard('student')->user()->id){
                    $skill_delete->delete();
                }
                else{
                    return response()->json(['status'=>false]);
                }
            }
            else{
                return response()->json(['status'=>false]);
            }


            $skills = StudentSkill::where('student_id',Auth::guard('student')->user()->id)->get();
            $output = '';
            if(isset($skills) && $skills->count() > 0){
                foreach($skills as $skill){
                    $output .='<div class="c_temem">
                    <a class="float-right text-danger delete_skill" style="cursor: pointer;" data-id="'.$skill->id.'"><i class="fa fa-trash"></i></a>
                                    <h5>'.$skill->skill_name.'</h5>
                                    <div class="c_progress" style="margin-top:10px;">
                                        <div class="c_bar" style="width:'.$skill->range.'%">
                                            <p class="c_percent"> '.$skill->range.'%</p>
                                        </div>
                                    </div>
                                </div>';
                }


            }
            return response()->json(['status'=>true,'output'=>$output]);

    }


    function add_education(Request $request){

        // return $request;
        $request->validate([
            'institution_name'=>'required',
            'section'=>'required',
            'degree'=>'required',
            'from_date'=>'required|before:today|before:to_date',
            'to_date'=>'required|before:today|after:from_date'
        ]);



        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


            StudentEducation::create([
                'student_id'=>Auth::guard('student')->user()->id,
                'institution_name'=>$request->institution_name,
                'section'=>$request->section,
                'degree'=>$request->degree,
                'from_date'=>$request->from_date,
                'to_date'=>$request->to_date
            ]);



        $educations = StudentEducation::where('student_id',Auth::guard('student')->user()->id)->get();
        $output = '';
        if(isset($educations) && $educations->count() > 0){
            foreach($educations as $education){
                $output .='<div class="c_itme_ex">
                                <div class="c_date">
                                <a class="float-right text-danger delete_education" style="cursor: pointer;" data-id="'.$education->id.'"><i class="fa fa-trash"></i></a>
                                    <p>'.date("Y", strtotime($education->from_date)).' - '.date("Y", strtotime($education->to_date)).'</p>
                                </div>
                                <div class="c_company">
                                    <p>
                                    '.$education->institution_name.'
                                    </p>
                                </div>
                                <div class="c_postionss">
                                    <span>'.$education->section.' - '.$education->degree.'
                                    </span>
                                </div>
                            </div>';
            }

            return response()->json(['status'=>true,'output'=>$output]);

        }else{
            return response()->json(['status'=>false]);
        }

    }


    function delete_education(Request $request){

        // return $request;
        $request->validate([
            'id'=>'required'
        ]);


        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


            $education_delete = StudentEducation::find($request->id);


            if($education_delete){
                if($education_delete->student_id == Auth::guard('student')->user()->id){
                    $education_delete->delete();
                }
                else{
                    return response()->json(['status'=>false]);
                }
            }
            else{
                return response()->json(['status'=>false]);
            }


            $educations = StudentEducation::where('student_id',Auth::guard('student')->user()->id)->get();
            $output = '';
            if(isset($educations) && $educations->count() > 0){
                foreach($educations as $education){
                    $output .='<div class="c_itme_ex">
                                    <div class="c_date">
                                    <a class="float-right text-danger delete_education" style="cursor: pointer;" data-id="'.$education->id.'"><i class="fa fa-trash"></i></a>
                                        <p>'.date("Y", strtotime($education->from_date)).' - '.date("Y", strtotime($education->to_date)).'</p>
                                    </div>
                                    <div class="c_company">
                                        <p>
                                        '.$education->institution_name.'
                                        </p>
                                    </div>
                                    <div class="c_postionss">
                                        <span>'.$education->section.' - '.$education->degree.'
                                        </span>
                                    </div>
                                </div>';
                }
            }

            return response()->json(['status'=>true,'output'=>$output]);

    }



    function update_image(Request $request){
        $request->validate([
            'image'=>'required|mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048'
        ]);


        if(!Auth::guard('student')->check()){
            return response()->json(['status'=>false]);
        }


        $user = Student::find(Auth::guard('student')->user()->id);
        if($user){
            $user_image = $user->profile_photo_path;
            if (isset($request->image)) {
                $orginal_image = $request->file('image');
                $upload_location = 'storage/blogs/';
                $original_name = $orginal_image->getClientOriginalName();
                $file_name = $this->saveFile($orginal_image,$upload_location);
                File::delete($user->profile_photo_path);
                $user_image = $file_name;
            }
            $user->update([
                'profile_photo_path'=>$user_image
            ]);

            return response()->json(['status'=>true,'image'=>asset($user_image)]);
        }else{
            return response()->json(['status'=>false]);
        }

    }

}
