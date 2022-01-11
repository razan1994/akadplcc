<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserFormRequest extends FormRequest
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

        if($this->user_type == "Super Admin"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username,'.$this->id.'|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email,'.$this->id.'|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone,'.$this->id.'|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required'
        ];
        }

        else if($this->user_type == "Insurance Company"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username,'.$this->id.'|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email,'.$this->id.'|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone,'.$this->id.'|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
        ];
        }

        else if($this->user_type == "Hospital"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username,'.$this->id.'|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email,'.$this->id.'|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone,'.$this->id.'|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
        ];
            }

        else if($this->user_type == "Radiology Center"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username,'.$this->id.'|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email,'.$this->id.'|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone,'.$this->id.'|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
        ];
        }

        else if($this->user_type == "Medical Center"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username,'.$this->id.'|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email,'.$this->id.'|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone,'.$this->id.'|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }

        else if($this->user_type == "Lab"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username,'.$this->id.'|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email,'.$this->id.'|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone,'.$this->id.'|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
        ];
        }

        else if($this->user_type == "Doctor"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username,'.$this->id.'|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email,'.$this->id.'|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone,'.$this->id.'|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }

        else if($this->user_type == "Patient"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username,'.$this->id,
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email,'.$this->id,
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone,'.$this->id,
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }

        else if($this->user_type == "Pharmacy"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username,'.$this->id.'|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email,'.$this->id.'|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone,'.$this->id.'|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }

        else if($this->user_type == "SEO Admin"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username,'.$this->id.'|unique:life_coutches,username|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email,'.$this->id.'|unique:life_coutches,email|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone,'.$this->id.'|unique:life_coutches,phone|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }

        else if($this->user_type == "Gym"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username|unique:gyms,username,'.$this->id.'|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email|unique:gyms,email,'.$this->id.'|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone|unique:gyms,phone,'.$this->id.'|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }

        else if($this->user_type == "Life Coach"){
            return['name_ar' => 'required',
            'name_en' => 'required',
            'username' => 'required|unique:users,username,|unique:insurance_companies,username|unique:hospitals,username|unique:radiology_centers,username|unique:pharmacies,username|unique:labs,username|unique:doctors,username|unique:seo_admins,username|unique:life_coutches,username,'.$this->id.'|unique:gyms,username|unique:medical_centers,username|unique:patients,username',
            'email' => 'required|unique:users,email,|unique:insurance_companies,email|unique:hospitals,email|unique:radiology_centers,email|unique:pharmacies,email|unique:labs,email|unique:doctors,email|unique:seo_admins,email|unique:life_coutches,email,'.$this->id.'|unique:gyms,email|unique:medical_centers,email|unique:patients,email',
            'phone' => 'required|unique:users,phone,|unique:insurance_companies,phone|unique:hospitals,phone|unique:radiology_centers,phone|unique:pharmacies,phone|unique:labs,phone|unique:doctors,phone|unique:seo_admins,phone|unique:life_coutches,phone,'.$this->id.'|unique:gyms,phone|unique:medical_centers,phone|unique:patients,phone',
            'password' => 'confirmed',
            "profile_photo_path" => 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
            'user_type' => 'required',
            'user_status' => 'required',
            'speciality_id'=>$this->user_type == "Doctor" ? 'required' : ''];
        }
        else{
            return[
                'user_type' => 'required',
            ];
        }


    }

    public function messages()
    {
        return [
            'name_ar.required' => trans('custom_validation.name_ar_required'),
            'name_ar.unique' => trans('custom_validation.name_en_unique'),

            'name_en.required' => trans('custom_validation.name_en_required'),
            'name_en.unique' => trans('custom_validation.name_en_unique'),

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

            'country_id.required' => trans('custom_validation.country_id_required'),
            'country_id.numeric' => trans('custom_validation.country_id_numeric'),

            'region_id.required' => trans('custom_validation.region_id_required'),
            'region_id.numeric' => trans('custom_validation.region_id_numeric'),

            'profile_photo_path.mimes' => 'Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'profile_photo_path.max' => trans('custom_validation.profile_photo_path_max'),

            'user_type.required' => trans('custom_validation.user_type_required'),

            'user_status.required' => trans('custom_validation.user_status_required'),
        ];
    }
}
