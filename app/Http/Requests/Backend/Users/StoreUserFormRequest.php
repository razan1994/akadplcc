<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreUserFormRequest extends FormRequest
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
            'name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users|unique:insurance_companies|unique:hospitals|unique:radiology_centers|unique:pharmacies|unique:labs|unique:doctors|unique:seo_admins|unique:life_coutches|unique:gyms',
            'email' => 'required|unique:users|unique:insurance_companies|unique:hospitals|unique:radiology_centers|unique:pharmacies|unique:labs|unique:doctors|unique:seo_admins|unique:life_coutches|unique:gyms',
            'phone' => 'required|unique:users|unique:insurance_companies|unique:hospitals|unique:radiology_centers|unique:pharmacies|unique:labs|unique:doctors|unique:seo_admins|unique:life_coutches|unique:gyms',
            'password' => 'required|min:8|confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required' => trans('custom_validation.name_ar_required'),
            'name_en.required' => trans('custom_validation.name_en_required'),
            'username.required' => trans('custom_validation.username_required'),
            'username.unique' => trans('custom_validation.username_unique'),
            'email.required' => trans('custom_validation.email_required'),
            'email.unique' => trans('custom_validation.email_unique'),
            'phone.required' => trans('custom_validation.phone_required'),
            'phone.unique' => trans('custom_validation.phone_unique'),
            'phone.numeric' => trans('custom_validation.phone_numeric'),
            'password.required' => trans('custom_validation.password_required'),
            'password.min' => trans('custom_validation.password_min'),
            'password.confirmed' => trans('custom_validation.password_confirmed'),
            'profile_photo_path.mimes' => 'Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'profile_photo_path.max' => trans('custom_validation.profile_photo_path_max'),
            'user_type.required' => trans('custom_validation.user_type_required'),
            'user_status.required' => trans('custom_validation.user_status_required'),
        ];
    }
}
