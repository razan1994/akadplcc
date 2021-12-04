<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\CartOperation;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\SharedMethod;

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

        $banner = Banner::first();
        $brands = Brand::where('status',1)->get();
        $onSaleProducts = Product::where('on_sale_price_status', 1)->get(); // 1 => Active
        // $bestSellers = CartOperation::selectRaw('count(id) as number_of_orders, product_id')
        //     ->groupBy('product_id')
        //     ->take(20)
        //     ->orderBy('number_of_orders', 'desc')
        //     ->get();
        // foreach ($bestSellers as $key => $bestSeller) {
        //     return $bestSeller->product;
        // }
        return view('welcome', compact('sliders', 'banner', 'onSaleProducts','slider_random','brands'));
    }
}
