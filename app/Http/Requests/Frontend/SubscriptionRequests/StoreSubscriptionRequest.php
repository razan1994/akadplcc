<?php

namespace App\Http\Requests\Frontend\SubscriptionRequests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriptionRequest extends FormRequest
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
            'wallet_id' => ['required', 'exists:payment_wallets,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:255'],
        ];
    }


    public function messages()
    {
        return [
            'wallet_id.required' => 'الرجاء اختيار المحفظة',
            'wallet_id.exists' => 'المحفظة المختارة غير موجودة',
            'name.required' => 'الرجاء ادخال الاسم',
            'name.string' => 'الاسم يجب ان يكون نص',
            'name.max' => 'الاسم يجب ان لا يتجاوز 255 حرف',
            'email.required' => 'الرجاء ادخال البريد الالكتروني',
            'email.email' => 'البريد الالكتروني يجب ان يكون صحيح',
            'email.max' => 'البريد الالكتروني يجب ان لا يتجاوز 255 حرف',
            'phone.required' => 'الرجاء ادخال رقم الهاتف',
            'phone.string' => 'رقم الهاتف يجب ان يكون نص',
            'phone.max' => 'رقم الهاتف يجب ان لا يتجاوز 255 حرف',
            'message.string' => 'الرسالة يجب ان تكون نص',
            'message.max' => 'الرسالة يجب ان لا تتجاوز 255 حرف',
        ];
    }
}
