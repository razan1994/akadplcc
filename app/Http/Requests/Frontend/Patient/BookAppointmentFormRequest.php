<?php

namespace App\Http\Requests\Frontend\Patient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BookAppointmentFormRequest extends FormRequest
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
            'user_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required|numeric',
            'age'=>'required|numeric',
            'time'=>'required'
        ];
    }
}
