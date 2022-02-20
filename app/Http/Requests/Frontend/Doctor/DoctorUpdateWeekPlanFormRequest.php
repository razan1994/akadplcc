<?php

namespace App\Http\Requests\Frontend\Doctor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DoctorUpdateWeekPlanFormRequest extends FormRequest
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
            // 'active_days'=>'required',
            'saterday_from'=>$this->active_days != null ? (in_array('saterday',$this->active_days) ?  'required|before:saterday_to' : '') : '',
            'saterday_to'=>$this->active_days != null ? (in_array('saterday',$this->active_days) ? 'required|after:saterday_from' : '') : '',
            'every_saterday'=>$this->active_days != null ? (in_array('saterday',$this->active_days) ? 'required|numeric' : '') : '',
            'sunday_from'=>$this->active_days != null ? (in_array('sunday',$this->active_days) ? 'required|before:sunday_to' : '') : '',
            'sunday_to'=>$this->active_days != null ? (in_array('sunday',$this->active_days) ? 'required|after:sunday_from' : '') : '',
            'every_sunday'=>$this->active_days != null ? (in_array('sunday',$this->active_days) ? 'required|numeric' : '') : '',
            'monday_from'=>$this->active_days != null ? (in_array('monday',$this->active_days) ? 'required|before:monday_to' : '') : '',
            'monday_to'=>$this->active_days != null ? (in_array('monday',$this->active_days) ? 'required|after:monday_from' : '') : '',
            'every_monday'=>$this->active_days != null ? (in_array('monday',$this->active_days) ? 'required|numeric' : '') : '',
            'tuseday_from'=>$this->active_days != null ? (in_array('tuseday',$this->active_days) ? 'required|before:tuseday_to' : '') : '',
            'tuseday_to'=>$this->active_days != null ? (in_array('tuseday',$this->active_days) ? 'required|after:tuseday_from' : '') : '',
            'every_tuseday'=>$this->active_days != null ? (in_array('tuseday',$this->active_days) ? 'required|numeric' : '') : '',
            'wednsday_from'=>$this->active_days != null ? (in_array('wednsday',$this->active_days) ? 'required|before:wednsday_to' : '') : '',
            'wednsday_to' =>$this->active_days != null ? (in_array('wednsday',$this->active_days) ? 'required|after:wednsday_from' : '') : '',
            'every_wednsday'=>$this->active_days != null ? (in_array('wednsday',$this->active_days) ? 'required|numeric' : '') : '',
            'thursday_from'=>$this->active_days != null ? (in_array('thursday',$this->active_days) ? 'required|before:thursday_to' : '') : '',
            'thursday_to'=>$this->active_days != null ? (in_array('thursday',$this->active_days) ? 'required|after:thursday_from' : '') : '',
            'every_thursday'=>$this->active_days != null ? (in_array('thursday',$this->active_days) ? 'required|numeric' : '') : '',
            'friday_from'=>$this->active_days != null ? (in_array('friday',$this->active_days) ? 'required|before:friday_to' : '') : '',
            'friday_to'=>$this->active_days != null ? (in_array('friday',$this->active_days) ? 'required|after:friday_from' : '') : '',
            'every_friday'=>$this->active_days != null ? (in_array('friday',$this->active_days) ? 'required|numeric' : '') : '',
        ];

    }
}
