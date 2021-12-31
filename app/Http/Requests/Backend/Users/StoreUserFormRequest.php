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
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone',
            'password' => 'required|min:8|confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''
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
