<?php

namespace App\Http\Requests\Backend\Banners;

use App\Models\Banner;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateBannerFormRequest extends FormRequest
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
        $validation_rule = [
            // Banner 1
            // 'banner_1_url' => 'nullable|url|required_with:image_1,status_1',
            'status_1' => 'required|numeric|required_with:image_1,banner_1_url',

            // Banner 2
            // 'banner_2_url' => 'nullable|url|required_with:image_2,status_2',
            'status_2' => 'required|nullable|numeric|required_with:image_2,banner_2_url',

            // Banner 3
            // 'banner_3_url' => 'nullable|url|required_with:image_3,status_3',
            'status_3' => 'required|nullable|numeric|required_with:image_3,banner_3_url',

            // Banner 4
            // 'banner_4_url' => 'nullable|url|required_with:image_4,status_4',
            'status_4' => 'required|nullable|numeric|required_with:image_4,banner_4_url',

            // Banner 5
            // 'banner_5_url' => 'nullable|url|required_with:image_5,status_5',
            'status_5' => 'required|nullable|numeric|required_with:image_5,banner_5_url',

            // Banner 6
            // 'banner_6_url' => 'nullable|url|required_with:image_6,status_6',
            'status_6' => 'required|nullable|numeric|required_with:image_6,banner_6_url',

            // Banner 7
            // 'banner_7_url' => 'nullable|url|required_with:image_7,status_7',
            'status_7' => 'required|nullable|numeric|required_with:image_7,banner_7_url',

            // Banner 8
            // 'banner_8_url' => 'nullable|url|required_with:image_8,status_8',
            'status_8' => 'required|nullable|numeric|required_with:image_8,banner_8_url',

            // Banner 9
            // 'banner_9_url' => 'nullable|url|required_with:image_9,status_9',
            'status_9' => 'required|nullable|numeric|required_with:image_9,banner_9_url',
        ];

        $banner = Banner::first();
        // Banner 1
        if ($banner->image_1 == NULL) {
            $validation_rule['image_1'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_1,banner_1_url';
        } else {
            $validation_rule['image_1'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 2
        if ($banner->image_2 == NULL) {
            $validation_rule['image_2'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_2,banner_2_url';
        } else {
            $validation_rule['image_2'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 3
        if ($banner->image_3 == NULL) {
            $validation_rule['image_3'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_3,banner_3_url';
        } else {
            $validation_rule['image_3'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 4
        if ($banner->image_4 == NULL) {
            $validation_rule['image_4'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_4,banner_4_url';
        } else {
            $validation_rule['image_4'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 5
        if ($banner->image_5 == NULL) {
            $validation_rule['image_5'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_5,banner_5_url';
        } else {
            $validation_rule['image_5'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 6
        if ($banner->image_6 == NULL) {
            $validation_rule['image_6'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_6,banner_6_url';
        } else {
            $validation_rule['image_6'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 7
        if ($banner->image_7 == NULL) {
            $validation_rule['image_7'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_7,banner_7_url';
        } else {
            $validation_rule['image_7'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 8
        if ($banner->image_8 == NULL) {
            $validation_rule['image_8'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_8,banner_8_url';
        } else {
            $validation_rule['image_8'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }
        // Banner 9
        if ($banner->image_9 == NULL) {
            $validation_rule['image_9'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048|required_with:status_9,banner_9_url';
        } else {
            $validation_rule['image_9'] = 'mimes:g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif|max:4048';
        }

        return $validation_rule;
    }

    public function messages()
    {
        return [
            // Banner 1
            'banner_1_url.required' => 'Banner(270*510) URL must be URL !!',
            'banner_1_url.required_with' => 'Banner(270*510) URL Is Required When Banner(270*510) Image or Status Is Not Empty !!',

            'status_1.numeric' => 'Banner(270*510) Status must be number !!',
            'status_1.required_with' => 'Banner(270*510) Status Is Required When Banner(270*510) Image or URL Is Not Empty !!',

            'image_1.mimes' => 'Banner(270*510) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_1.max' =>  'Banner(270*510) Image size must be less than : (4 MB)',
            'image_1.required_with' => 'Banner(270*510) Image Is Required When Banner(270*510) Status or URL Is Not Empty !!',

            // Banner 2
            'banner_2_url.required' => 'Banner(570*240) URL must be URL !!',
            'banner_2_url.required_with' => 'Banner(570*240) URL Is Required When Banner(570*240) Image or Status Is Not Empty !!',

            'status_2.numeric' => 'Banner(570*240) Status must be number !!',
            'status_2.required_with' => 'Banner(570*240) Status Is Required When Banner(570*240) Image or URL Is Not Empty !!',

            'image_2.mimes' => 'Banner(570*240) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_2.max' =>  'Banner(570*240) Image size must be less than : (4 MB)',
            'image_2.required_with' => 'Banner(570*240) Image Is Required When Banner(570*240) Status or URL Is Not Empty !!',

            // Banner 3
            'banner_3_url.required' => 'Banner(270*240) URL must be URL !!',
            'banner_3_url.required_with' => 'Banner(270*240) URL Is Required When Banner(270*240) Image or Status Is Not Empty !!',

            'status_3.numeric' => 'Banner(270*240) Status must be number !!',
            'status_3.required_with' => 'Banner(270*240) Status Is Required When Banner(270*240) Image or URL Is Not Empty !!',

            'image_3.mimes' => 'Banner(270*240) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_3.max' =>  'Banner(270*240) Image size must be less than : (4 MB)',
            'image_3.required_with' => 'Banner(270*240) Image Is Required When Banner(270*240) Status or URL Is Not Empty !!',

            // Banner 4
            'banner_4_url.required' => 'Banner(270*240) URL must be URL !!',
            'banner_4_url.required_with' => 'Banner(270*240) URL Is Required When Banner(270*240) Image or Status Is Not Empty !!',

            'status_4.numeric' => 'Banner(270*240) Status must be number !!',
            'status_4.required_with' => 'Banner(270*240) Status Is Required When Banner(270*240) Image or URL Is Not Empty !!',

            'image_4.mimes' => 'Banner(270*240) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_4.max' =>  'Banner(270*240) Image size must be less than : (4 MB)',
            'image_4.required_with' => 'Banner(270*240) Image Is Required When Banner(270*240) Status or URL Is Not Empty !!',

            // Banner 5
            'banner_5_url.required' => 'Banner(270*240) URL must be URL !!',
            'banner_5_url.required_with' => 'Banner(270*240) URL Is Required When Banner(270*240) Image or Status Is Not Empty !!',

            'status_5.numeric' => 'Banner(270*240) Status must be number !!',
            'status_5.required_with' => 'Banner(270*240) Status Is Required When Banner(270*240) Image or URL Is Not Empty !!',

            'image_5.mimes' => 'Banner(270*240) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_5.max' =>  'Banner(270*240) Image size must be less than : (4 MB)',
            'image_5.required_with' => 'Banner(270*240) Image Is Required When Banner(270*240) Status or URL Is Not Empty !!',

            // Banner 6
            'banner_6_url.required' => 'Banner(270*240) URL must be URL !!',
            'banner_6_url.required_with' => 'Banner(270*240) URL Is Required When Banner(270*240) Image or Status Is Not Empty !!',

            'status_6.numeric' => 'Banner(270*240) Status must be number !!',
            'status_6.required_with' => 'Banner(270*240) Status Is Required When Banner(270*240) Image or URL Is Not Empty !!',

            'image_6.mimes' => 'Banner(270*240) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_6.max' =>  'Banner(270*240) Image size must be less than : (4 MB)',
            'image_6.required_with' => 'Banner(270*240) Image Is Required When Banner(270*240) Status or URL Is Not Empty !!',

            // Banner 7
            'banner_7_url.required' => 'Banner(570*430) URL must be URL !!',
            'banner_7_url.required_with' => 'Banner(570*430) URL Is Required When Banner(570*430) Image or Status Is Not Empty !!',

            'status_7.numeric' => 'Banner(570*430) Status must be number !!',
            'status_7.required_with' => 'Banner(570*430) Status Is Required When Banner(570*430) Image or URL Is Not Empty !!',

            'image_7.mimes' => 'Banner(570*430) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_7.max' =>  'Banner(570*430) Image size must be less than : (4 MB)',
            'image_7.required_with' => 'Banner(570*430) Image Is Required When Banner(570*430) Status or URL Is Not Empty !!',

            // Banner 8
            'banner_8_url.required' => 'Banner(570*200) URL must be URL !!',
            'banner_8_url.required_with' => 'Banner(570*200) URL Is Required When Banner(570*200) Image or Status Is Not Empty !!',

            'status_8.numeric' => 'Banner(570*200) Status must be number !!',
            'status_8.required_with' => 'Banner(570*200) Status Is Required When Banner(570*200) Image or URL Is Not Empty !!',

            'image_8.mimes' => 'Banner(570*200) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_8.max' =>  'Banner(570*200) Image size must be less than : (4 MB)',
            'image_8.required_with' => 'Banner(570*200) Image Is Required When Banner(570*200) Status or URL Is Not Empty !!',

            // Banner 9
            'banner_9_url.required' => 'Banner(570*200) URL must be URL !!',
            'banner_9_url.required_with' => 'Banner(570*200) URL Is Required When Banner(570*200) Image or Status Is Not Empty !!',

            'status_9.numeric' => 'Banner(570*200) Status must be number !!',
            'status_9.required_with' => 'Banner(570*200) Status Is Required When Banner(570*200) Image or URL Is Not Empty !!',

            'image_9.mimes' => 'Banner(570*200) Image type must be : (g3,gif,ief,jpeg,jpg,jpe,ktx,png,btif,sgi,svg,svgz,tiff,tif)',
            'image_9.max' =>  'Banner(570*200) Image size must be less than : (4 MB)',
            'image_9.required_with' => 'Banner(570*200) Image Is Required When Banner(570*200) Status or URL Is Not Empty !!',
        ];
    }
}
