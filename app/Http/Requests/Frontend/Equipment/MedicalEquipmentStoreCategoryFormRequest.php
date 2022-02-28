<?php

namespace App\Http\Requests\Frontend\Equipment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MedicalEquipmentStoreCategoryFormRequest extends FormRequest
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
            'name_en'=>'required|unique:equipment_categories,name_en',
            'name_ar'=>'required|unique:equipment_categories,name_ar'
        ];
    }
}
