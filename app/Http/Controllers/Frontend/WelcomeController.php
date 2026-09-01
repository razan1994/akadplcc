<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\ApprovedBody;
use App\Models\Banner;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Course;
use App\Models\GalleryItem;
use App\Models\Slider;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    function welcome()
    {

        $about = AboutUs::get()->first();
        $contact = ContactUs::get()->first();
        $sliders = Slider::where('status', 1)->inRandomOrder()->limit(3)->get();
        $courses = Course::orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        $approved = ApprovedBody::orderBy('created_at', 'desc')->limit(12)->get();
        $banners = Banner::where('status', 1)->inRandomOrder()->get();
        $blogs = \App\Models\Blog::orderBy('created_at', 'desc')->limit(3)->get();

        // 2) Inside the function that returns welcome.blade.php, add:
        $galleryItems = GalleryItem::query()
            ->active()
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();


        return view('welcome', compact(
            'about',
            'contact',
            'sliders',
            'courses',
            'approved',
            'banners',
            'blogs',
            'galleryItems'
        ));
    }
}
