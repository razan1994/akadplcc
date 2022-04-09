<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Courses\StoreCourseFormRequest;
use App\Http\Requests\Backend\Courses\StoreCourseSectionFormRequest;
use App\Http\Requests\Backend\Courses\UpdateCourseFormRequest;
use App\Models\Course;
use App\Models\CourseSection;
use App\Models\SupportTicket;
use App\Traits\GeneralTrait;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
            ini_set('upload_max_filesize', '10000M');
            ini_set('post_max_size', '10000M');
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





    // ================================================================
    // ======================== show Function =========================
    // Created By : Mohammed Salah
    // ================================================================
    public function show($id, Route $route)
    {


        try {
            $course = Course::find($id);

            if ($course) {
                $sections = CourseSection::where('course_id',$course->id)->orderBy('created_at','desc')->paginate(21);
                return view('admin.cources.show', compact('course','sections'));
            } else {
                return redirect()->route('super_admin.cources-index')->with('danger', 'This record is not in the records');
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
    // Created By : Mohammed Salah
    // ================================================================
    public function edit($id, Route $route)
    {
        try {
            $course = Course::find($id);

            if ($course) {
                return view('admin.cources.edit', compact('course'));
            } else {
                return redirect()->route('super_admin.courses-index')->with('danger', 'This record is not in the records');
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
    // Created By : Mohammed Salah
    // ================================================================
    public function update($id, UpdateCourseFormRequest $request, Route $route)
    {
        try {
            $course = Course::find($id);
            if ($course) {

            $update_data = [
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
                File::delete($course->main_image);
                $update_data['main_image']=$last_image;
            }

            // Upload Video Section :
            if (isset($request->main_video)) {
                $orginal_image = $request->file('main_video');
                $upload_location = 'storage/courses/videos/';
                $last_video = $this->saveFile($orginal_image,$upload_location);
                File::delete($course->main_video);
                $update_data['main_video']=$last_video;
            }

            DB::transaction(function () use ($update_data, $id) {
                Course::find($id)->update($update_data);
            });


            return redirect()->route('super_admin.cources-index')->with('success','Created Successfully...');

            } else {
                return redirect()->route('super_admin.courses-index')->with('danger', 'This record does not exist in the records');
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
    // ======================== softDelete Function ===================
    // Created By : Mohammed Salah
    // ================================================================
    public function softDelete($id, Route $route)
    {
        try {
            $course = Course::find($id);
            if ($course) {
                DB::transaction(function () use ($course) {
                    $course->delete();
                });
                return redirect()->route('super_admin.courses-index')->with('success', 'The deletion process has been successful');
            } else {
                return redirect()->route('super_admin.courses-index')->with('danger', 'This record is not in the records');
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
    // ====================== show Soft Delete ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function showSoftDelete(Request $request, Route $route)
    {
        try {
            $courses = new Course();
            $courses = $courses->onlyTrashed()->select('*')->orderBy('created_at', 'asc')->get();
            // return $courses;
            return view('admin.cources.trashed', compact(
                'courses',
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
    // ==================== soft Delete Restore =======================
    // Created By : Mohammed Salah
    // ================================================================
    public function softDeleteRestore($id, Route $route)
    {
        try {
            $course = Course::onlyTrashed()->find($id);
            if ($course) {
                DB::transaction(function () use ($course) {
                    $course->restore();
                });
                return redirect()->route('super_admin.courses-index')->with('success', 'Restore Completed Successfully');
            } else {
                return redirect()->route('super_admin.courses-index')->with('danger', 'This section does not exist in the records');
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
    // ==================== addCourseSection ==========================
    // Created By : Mohammed Salah
    // ================================================================
    public function addCourseSection(Route $route,$id,StoreCourseSectionFormRequest $request)
    {
        // return $request;
        try {
            $course = Course::find($id);
            if ($course) {

            $created_data = [
                'course_id'=>$course->id,
                'title_ar'=>$request->title_ar
            ];

            // Upload Video Section :
            if (isset($request->video)) {
                $orginal_image = $request->file('video');
                $upload_location = 'storage/course_sections/videos/';
                $last_video = $this->saveFile($orginal_image,$upload_location);
                $created_data['video']=$last_video;
            }

                DB::transaction(function () use ($created_data) {
                    CourseSection::create($created_data);
                });
                return redirect()->route('super_admin.cources-show',$id)->with('success', 'Restore Completed Successfully');
            } else {
                return redirect()->route('super_admin.cources-index')->with('danger', 'This section does not exist in the records');
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
    // ==================== delete-course-section ==========================
    // Created By : Mohammed Salah
    // ================================================================
    public function deleteCourseSection(Route $route,$id)
    {
        // return $request;
        try {
            $section = CourseSection::find($id);
            if ($section) {


                DB::transaction(function () use ($section) {
                    File::delete($section->video);
                    $section->delete();
                });
                return redirect()->route('super_admin.cources-show',$id)->with('success', 'Restore Completed Successfully');
            } else {
                return redirect()->route('super_admin.cources-index')->with('danger', 'This section does not exist in the records');
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
