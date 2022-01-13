<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProdSzeClrRelation;
use App\Models\Product;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    function aboutUs(){
        return view('front_end_inners.about_us');
    }


    function doctorDetails($alias_name){
        return view('front_end_inners.doctor-details');
    }

}
