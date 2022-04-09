<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function aboutUs(){
        $about = AboutUs::first();

        return view('front_end_inners.about',compact('about'));
    }
}
