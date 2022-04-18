<?php

namespace App\Http\Requests\Backend\Courses;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCourseSectionFormRequest extends FormRequest
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
                'title_ar'=>'required',
                'video'=>'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
                'section_image'=>'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048'
            ];


    }
}

