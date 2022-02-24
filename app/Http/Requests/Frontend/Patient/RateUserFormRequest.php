<?php

namespace App\Http\Requests\Frontend\Patient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RateUserFormRequest extends FormRequest
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
            'rating_value'=>'required',
            'rating_user_type'=>'required',
            'rating_user_id'=>'required',
            'rating_message'=>'required'
        ];
    }
}
