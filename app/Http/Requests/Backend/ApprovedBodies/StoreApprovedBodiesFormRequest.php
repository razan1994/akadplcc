<?php

namespace App\Http\Requests\Backend\ApprovedBodies;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreApprovedBodiesFormRequest extends FormRequest
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
            'name'=>'required',
            'image'=>'required|mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048'
        ];
    }
}
