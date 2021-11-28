<?php

namespace App\Http\Requests\Frontend\Carts;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartFormRequest extends FormRequest
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
            'quantity' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'quantity.required' => 'Quantity is Required !!',
            'quantity.numeric' => 'Quantity must be numbers only !!',
        ];
    }
}
