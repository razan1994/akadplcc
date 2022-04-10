<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\Course;
use App\Models\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function welcome(){

        $about = AboutUs::get()->first();
        $contact = ContactUs::get()->first();
        $slider = Slider::where('status',1)->inRandomOrder()->limit(3)->get();
        $courses = Course::where('status',2)->orderBy('created_at','desc')->limit(16)->get();

        return view('welcome',compact('about','contact','slider','courses'));

    }
}
