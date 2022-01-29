<?php

namespace App\Http\Requests\Frontend\Radiology;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RadiologyUpdateWeekPlanFormRequest extends FormRequest
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
            'active_days'=>'required',
            'saterday_from'=>in_array('saterday',$this->active_days) ?  'required|before:saterday_to' : '',
            'saterday_to'=>in_array('saterday',$this->active_days) ? 'required|after:saterday_from' : '',
            'every_saterday'=>in_array('saterday',$this->active_days) ? 'required|numeric' : '',
            'sunday_from'=>in_array('sunday',$this->active_days) ? 'required|before:sunday_to' : '',
            'sunday_to'=>in_array('sunday',$this->active_days) ? 'required|after:sunday_from' : '',
            'every_sunday'=>in_array('sunday',$this->active_days) ? 'required|numeric' : '',
            'monday_from'=>in_array('monday',$this->active_days) ? 'required|before:monday_to' : '',
            'monday_to'=>in_array('monday',$this->active_days) ? 'required|after:monday_from' : '',
            'every_monday'=>in_array('monday',$this->active_days) ? 'required|numeric' : '',
            'tuseday_from'=>in_array('tuseday',$this->active_days) ? 'required|before:tuseday_to' : '',
            'tuseday_to'=>in_array('tuseday',$this->active_days) ? 'required|after:tuseday_from' : '',
            'every_tuseday'=>in_array('tuseday',$this->active_days) ? 'required|numeric' : '',
            'wednsday_from'=>in_array('wednsday',$this->active_days) ? 'required|before:wednsday_to' : '',
            'wednsday_to' =>in_array('wednsday',$this->active_days) ? 'required|after:wednsday_from' : '',
            'every_wednsday'=>in_array('wednsday',$this->active_days) ? 'required|numeric' : '',
            'thursday_from'=>in_array('thursday',$this->active_days) ? 'required|before:thursday_to' : '',
            'thursday_to'=>in_array('thursday',$this->active_days) ? 'required|after:thursday_from' : '',
            'every_thursday'=>in_array('thursday',$this->active_days) ? 'required|numeric' : '',
            'friday_from'=>in_array('friday',$this->active_days) ? 'required|before:friday_to' : '',
            'friday_to'=>in_array('friday',$this->active_days) ? 'required|after:friday_from' : '',
            'every_friday'=>in_array('friday',$this->active_days) ? 'required|numeric' : '',
        ];

    }
}
