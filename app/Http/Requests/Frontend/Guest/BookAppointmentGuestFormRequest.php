<?php

namespace App\Http\Requests\Frontend\Guest;

use Illuminate\Foundation\Http\FormRequest;

class BookAppointmentGuestFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            'user_type'=>'required',
            'name'=>'required',
            'phone'=>'required|numeric',
            'age'=>'required|numeric',
            'time'=>'required'
        ];
    }
}
