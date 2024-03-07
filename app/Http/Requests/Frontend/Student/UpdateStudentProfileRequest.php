<?php

namespace App\Http\Requests\Frontend\Student;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('student')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150', 'regex:/^[a-zA-Z\s]+$/u'],
            'email' => ['required', 'email', 'unique:students,email,' . auth('student')->id()],
            'phone' => ['required', 'string', 'unique:students,phone,' . auth('student')->id()],
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'اسم المستخدم مطلوب',
            'name.string' => 'اسم المستخدم يجب ان يكون نص',
            'name.regex' => 'اسم المستخدم يجب ان يكون حروف انجليزية فقط',
            'name.max' => 'اسم المستخدم يجب ان لا يزيد عن 150 حرف',
            'email.required' => 'البريد الالكتروني مطلوب',
            'email.email' => 'البريد الالكتروني يجب ان يكون بريد الكتروني صحيح',
            'email.unique' => 'البريد الالكتروني موجود مسبقا',
            'phone.required' => 'رقم الهاتف مطلوب',
            'phone.string' => 'رقم الهاتف يجب ان يكون نص',
            'phone.unique' => 'رقم الهاتف موجود مسبقا',
        ];
    }
}
