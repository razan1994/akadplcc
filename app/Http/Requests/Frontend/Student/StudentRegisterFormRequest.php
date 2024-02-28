<?php

namespace App\Http\Requests\Frontend\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class StudentRegisterFormRequest extends FormRequest
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
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'mid_first_name' => 'nullable|regex:/^[a-zA-Z\s]+$/u',
            'last_name' => 'required |regex:/^[a-zA-Z\s]+$/u',
            'mid_last_name' => 'nullable|regex:/^[a-zA-Z\s]+$/u',
            'email' => 'required|unique:students,email|unique:users,email',
            'phone' => 'required|numeric|unique:students,phone|unique:users,phone',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
                'confirmed'
            ]
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'الاسم الاول مطلوب',
            'first_name.regex' => 'الاسم الاول يجب ان يكون حروف انجليزية فقط',
            'mid_first_name.regex' => 'الاسم الثاني يجب ان يكون حروف انجليزية فقط',
            'last_name.required' => 'الاسم الاخير مطلوب',
            'last_name.regex' => 'الاسم الاخير يجب ان يكون حروف انجليزية فقط',
            'mid_last_name.regex' => 'الاسم الثالث يجب ان يكون حروف انجليزية فقط',
            'email.required' => 'البريد الالكتروني مطلوب',
            'email.unique' => 'البريد الالكتروني مستخدم من قبل',
            'phone.required' => 'رقم الهاتف مطلوب',
            'phone.numeric' => 'رقم الهاتف يجب ان يكون ارقام فقط',
            'phone.unique' => 'رقم الهاتف مستخدم من قبل',
            'password.required' => 'كلمة المرور مطلوبة',
            'password.min' => 'كلمة المرور يجب ان تكون 8 احرف على الاقل',
            'password.numbers' => 'كلمة المرور يجب ان تحتوي على ارقام',
            'password.symbols' => 'كلمة المرور يجب ان تحتوي على رموز',
            'password.uncompromised' => 'كلمة المرور غير آمنة',
            'password.confirmed' => 'كلمة المرور غير متطابقة',
        ];
    }
}
