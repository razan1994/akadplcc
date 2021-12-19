<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
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
        // Super Admin
        if (Auth::guard('super_admin')->check()) {
            return redirect()->route('super_admin.dashboard');
        }
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'asc')->get();
        $slider_random = Slider::where('status', 1)->inRandomOrder()->limit(2)->get();


        return view('welcome', compact('sliders','slider_random'));
    }
}
