<?php

namespace App\Http\Requests\Backend\Specialities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSpecialityFormRequest extends FormRequest
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
            'name_ar' => 'required|unique:doctor_specialities',
            'name_en' => 'required|unique:doctor_specialities',
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required' => trans('custom_validation.name_ar_required'),
            'name_en.required' => trans('custom_validation.name_en_required'),
            'username.unique' => trans('custom_validation.name_ar_unique'),
            'username.unique' => trans('custom_validation.name_en_unique'),
        ];
    }
}
