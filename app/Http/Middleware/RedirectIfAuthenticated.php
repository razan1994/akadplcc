<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null, ...$guards)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        if ($guard == 'super_admin' && Auth::guard($guard)->check()) {
            return redirect()->route('super_admin.dashboard');
        }
        if ($guard == 'seo_admin' && Auth::guard($guard)->check()) {
            return redirect()->route('seo.dashboard');
        }

        // ['Super Admin','Insurance Company','Hospital','Radiology Center','Medical Center','Lab','Doctor','Patient','Pharmacy','SEO Admin','Gym','Life Coach']

        if (Auth::guard($guard)->check()) {
            return redirect()->route('welcome');
        }

        return $next($request);
    }
}
