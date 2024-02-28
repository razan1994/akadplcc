<?php

namespace App\Http\Requests\Backend\Courses;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateCourseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_ar' => 'required',
            'title_en' => 'required |regex:/^[a-zA-Z\s]+$/u',
            'desc_ar' => 'required',
            'teacher_ar' => 'required',
            'section_count' => 'required|numeric',
            'section_time' => 'required|numeric',
            'course_date' => 'required|date',
            'status' => 'required',
            'main_image' => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'teacher_image' => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'main_video' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv|max:10480',
            // 'price' => 'required|numeric|between:0,999999.99',
        ];
    }


    public function messages()
    {
        return [
            'title_en.regex' => 'The title must be in English letters only',
        ];
    }
}
