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

        $banner = Banner::inRandomOrder()->get()->first();
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

        $products = Product::where('status',1)->inRandomOrder()->limit(20)->get();
        $main_categories_rand = SuperCategory::where('status',1)->inRandomOrder()->limit(5)->get();
        $recent_products = Product::where('status',1)->where('created_at', '>=', Carbon::now()->subDays(30)->toDateTimeString())->inRandomOrder()->limit(12)->get();



        return view('welcome', compact('sliders', 'banner', 'onSaleProducts','slider_random','brands','products','recent_products','main_categories_rand'));
    }
}
