<?php

namespace App\Http\Requests\Frontend\RequestPaymentOrder;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestOrderRequest extends FormRequest
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
            'type' => ['required', 'string', 'max:255', 'in:wallet,paypal'],
            'payment_wallet_id' => ['required_if:type,wallet', 'integer', 'exists:payment_wallets,id'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:255'],
            'email' => ['required_if:type,paypal', 'email']
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'يجب اختيار نوع الطلب',
            'type.max' => 'نوع الطلب يجب ان لا يتجاوز 255 حرف',
            'type.in' => 'نوع الطلب يجب ان يكون اما محفظة او بايبال',
            'payment_wallet_id.required_if' => 'يجب اختيار المحفظة',
            'payment_wallet_id.exists' => 'المحفظة المختارة غير موجودة',
            'name.required' => 'يجب ادخال الاسم',
            'name.max' => 'الاسم يجب ان لا يتجاوز 255 حرف',
            'phone.required' => 'يجب ادخال رقم الهاتف',
            'phone.max' => 'رقم الهاتف يجب ان لا يتجاوز 255 حرف',
            'message.max' => 'الرسالة يجب ان لا تتجاوز 255 حرف',
            'email.required_if' => 'يجب ادخال البريد الالكتروني',
            'email.email' => 'البريد الالكتروني يجب ان يكون صحيح'
        ];
    }
}
