<?php

namespace App\Http\Requests\Frontend\Equipment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MedicalEquipmentUpdateProfileFormRequest extends FormRequest
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

        if($this->password != null){
            if(strlen($this->password) < 8){
                return ['password'=>'min:8'];
            }
        }

        return[
        'name_ar' => 'required|unique:users,name_ar|unique:insurance_companies,name_ar|unique:hospitals,name_ar|unique:medical_equipments,name_ar,'.$this->id.'|unique:radiology_centers,name_ar|unique:pharmacies,name_ar|unique:labs,name_ar|unique:doctors,name_ar|unique:seo_admins,name_ar|unique:life_coutches,name_ar|unique:gyms,name_ar|unique:medical_centers,name_ar|unique:patients,name_ar',
        'name_en' => 'required|unique:users,name_en|unique:insurance_companies,name_en|unique:hospitals,name_en|unique:medical_equipments,name_en,'.$this->id.'|unique:radiology_centers,name_en|unique:pharmacies,name_en|unique:labs,name_en|unique:doctors,name_en|unique:seo_admins,name_en|unique:life_coutches,name_en|unique:gyms,name_en|unique:medical_centers,name_en|unique:patients,name_en',
        'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:medical_equipments,email,'.$this->id.'|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
        'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:medical_equipments,phone,'.$this->id.'|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
        'password' => 'confirmed',
        "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
    ];
    }


    public function messages()
    {
        return [
            'name_ar.required' => trans('custom_validation.name_ar_required'),
            'name_en.required' => trans('custom_validation.name_en_required'),
            'name_ar.unique' => trans('custom_validation.name_ar_unique'),
            'name_en.unique' => trans('custom_validation.name_en_unique'),
            'email.required' => trans('custom_validation.email_required'),
            'email.unique' => trans('custom_validation.email_unique'),
            'phone.required' => trans('custom_validation.phone_required'),
            'phone.unique' => trans('custom_validation.phone_unique'),
            'phone.numeric' => trans('custom_validation.phone_numeric'),
            'password.confirmed' => trans('custom_validation.password_confirmed'),
            'profile_photo_path.mimes' => 'Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'profile_photo_path.max' => trans('custom_validation.profile_photo_path_max'),
        ];
    }
}
