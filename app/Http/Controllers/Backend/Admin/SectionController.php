<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Courses\StoreCourseSectionFormRequest;
use App\Models\CourseSection;
use App\Models\SupportTicket;
use App\Traits\GeneralTrait;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\File;

class SectionController extends Controller
{
    use UploadImageTrait;
    use GeneralTrait;

    public function edit($id, Route $route)
    {
        $section = CourseSection::findOrFail($id);


        if ($section) {
            return view('admin.sections.edit', compact('section'));
        } else {
            return redirect()->back()->with('danger', 'This section is not in the records');
        }
        try {
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


    public function update(StoreCourseSectionFormRequest $request, $id)
    {
        try {
            $section = CourseSection::findOrFail($id);
            $data = [
                'title_ar' => $request->title_ar,
                'video' => $request->video,
                'text_ar' => $request->text_ar,
                'section_image' => $section->section_image,
            ];

            if ($request->hasFile('section_image')) {
                // delete old image
                File::delete($section->section_image);
                $orginal_image = $request->file('section_image');
                $upload_location = 'storage/course_sections/images/';
                $new_image = $this->saveFile($orginal_image, $upload_location);
                $data['section_image'] = $new_image;
            }

            $section->update($data);
            return redirect()->route('super_admin.cources-show', $section->course_id)->with('success', 'Section updated successfully');
        } catch (\Throwable $th) {
            $function_name =  'App\Http\Controllers\Backend\Admin\SectionController@update';
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
