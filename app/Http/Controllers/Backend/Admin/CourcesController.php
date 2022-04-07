<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Courses\StoreCourseFormRequest;
use App\Models\Course;
use App\Models\SupportTicket;
use App\Traits\GeneralTrait;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class CourcesController extends Controller
{

    use UploadImageTrait;
    use GeneralTrait;

    // ================================================================
    // ======================== index Function ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function index(Request $request, Route $route)
    {


        try {
            $cources = new Course();
            $cources = $cources->select('*')->orderBy('created_at', 'asc')->get();

            return view('admin.cources.index', compact(
                'cources',
            ));
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
    // Created By : Mohammed Salah
    // ================================================================
    public function create(Route $route)
    {
        try {
            return view('admin.cources.create');
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
    // ======================= store Function ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function store(Route $route,StoreCourseFormRequest $request)
    {
        try {

            $created_data = [
                'title_ar'=>$request->title_ar,
                'desc_ar'=>$request->desc_ar,
                'teacher_ar'=>$request->teacher_ar,
                'section_count'=>$request->section_count,
                'section_time'=>$request->section_time,
                'course_date'=>$request->course_date,
                'status'=>$request->status,
            ];


            // Upload Image Section :
            if (isset($request->main_image)) {
                $orginal_image = $request->file('main_image');
                $upload_location = 'storage/courses/images/';
                $last_image = $this->saveFile($orginal_image,$upload_location);
                $created_data['main_image']=$last_image;
            }

            // Upload Video Section :
            if (isset($request->main_video)) {
                $orginal_image = $request->file('main_video');
                $upload_location = 'storage/courses/videos/';
                $last_video = $this->saveFile($orginal_image,$upload_location);
                $created_data['main_video']=$last_video;
            }


            DB::transaction(function () use ($created_data) {
                Course::create($created_data);
            });

            return redirect()->route('super_admin.cources-index')->with('success','Created Successfully...');

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
