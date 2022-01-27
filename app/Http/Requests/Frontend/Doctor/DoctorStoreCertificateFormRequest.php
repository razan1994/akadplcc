<?php

namespace App\Http\Requests\Frontend\Doctor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DoctorStoreCertificateFormRequest extends FormRequest
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
            'name_ar'=>['required',
            Rule::unique('doctor_certificates')->where(function ($query){
                return $query->where('doctor_id', Auth::guard('doctor')->user()->id);
            })],
            'name_en'=>['required',
            Rule::unique('doctor_certificates')->where(function ($query){
                return $query->where('doctor_id', Auth::guard('doctor')->user()->id);
            })],
            'institution_name_ar'=>'required',
            'institution_name_en'=>'required'
        ];
    }
}
