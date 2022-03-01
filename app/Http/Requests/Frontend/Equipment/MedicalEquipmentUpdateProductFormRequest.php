<?php

namespace App\Http\Requests\Frontend\Equipment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class MedicalEquipmentUpdateProductFormRequest extends FormRequest
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
            'category_id'=>'required',
            'name_ar' => ['required',
            Rule::unique('equipment_products')->where(function ($query){
                return $query->where('category_id', $this->category_id)->where('id','!=',$this->id);
            })],
            'name_en' => ['required',
            Rule::unique('equipment_products')->where(function ($query){
                return $query->where('category_id', $this->category_id)->where('id','!=',$this->id);
            })],
            'description_en'=>'required',
            'description_ar'=>'required',
            'image'=>'required|image|mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif,webp|max:4048',
        ];
    }
}
