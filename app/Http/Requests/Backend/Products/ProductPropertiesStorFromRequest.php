<?php

namespace App\Http\Requests\Backend\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductPropertiesStorFromRequest extends FormRequest
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
            'main_color_id'=>['required',
            Rule::unique('prod_sze_clr_relations')->where(function ($query){
                return $query->where('main_size_id', $this->main_size_id)
                    ->where('product_id',$this->product_id);
            })
        ],
            'main_size_id'=>['required',
            Rule::unique('prod_sze_clr_relations')->where(function ($query){
                return $query->where('main_color_id', $this->main_color_id)
                    ->where('product_id',$this->product_id);
            })
        ],
            'product_id'=>['required',
            Rule::unique('prod_sze_clr_relations')->where(function ($query){
                return $query->where('main_color_id', $this->main_size_id)
                    ->where('main_size_id',$this->main_size_id);
            })
        ],
        ];
    }


    public function messages()
    {
        return [];
    }
}
