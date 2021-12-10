<?php

namespace App\Providers;

use App\Models\CartTemp;
use App\Models\Category;
use App\Models\Product;
use App\Models\SuperCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $public_user_types = ['Super Admin', 'Customer'];
            $public_products = Product::where('status', 1)->orderBy('created_at', 'asc')->get();
            $public_super_categories = SuperCategory::where('status', 1)->orderBy('created_at', 'asc')->get();

            if (Auth::check() && Auth::guard('customer')->check()) {
                $public_customer_carts = CartTemp::where(['user_id' => auth()->user()->id, 'user_type' => 'Customer'])->get();
                $endTotal = 0;
                foreach ($public_customer_carts as $public_customer_cart) {
                    if ($public_customer_cart->product->on_sale_price_status == 'Active') {
                        $endTotal += $public_customer_cart->quantity * $public_customer_cart->product->on_sale_price;
                    } else {
                        $endTotal += $public_customer_cart->quantity * $public_customer_cart->product->sale_price;
                    }
                }
                $public_customer_carts->endTotal = $endTotal;
            } else {
                $public_customer_carts = null;
            }

            view()->share([
                'public_user_types' => $public_user_types,
                'public_products' => $public_products,
                'public_customer_carts' => $public_customer_carts,
                'public_super_categories'=>$public_super_categories
            ]);
        });
    }
}
