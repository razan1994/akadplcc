<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\CartOperation;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SuperCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\SharedMethod;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    use SharedMethod;

    // ========================================================================
    // ========================== Welcome Function ============================
    // ========================================================================
    public function welcome()
    {
        // $startDate = Carbon::now();
        // $endDate = Carbon::today()->addDays(7);
        // return $startDate;
        // Super Admin
        if (Auth::guard('super_admin')->check()) {
            return redirect()->route('super_admin.dashboard');
        }

        $blogs = Blog::where('status',1)->inRandomOrder()->limit(3)->get();


        return view('welcome', compact('blogs'));
    }
}
