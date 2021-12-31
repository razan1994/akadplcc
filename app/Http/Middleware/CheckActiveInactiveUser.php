<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckActiveInactiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->user_status == 'Inactive') {
            if (Auth::guard('individual')->check()) {
                return redirect()->route('individual.individualProfile');
            } elseif (Auth::guard('company')->check()) {
                return redirect()->route('company.companyProfile');
            } elseif (Auth::guard('super_admin')->check()) {
                # code...
            } elseif (Auth::guard('data_entry')->check()) {
                return redirect()->route('data_entry.dashboard');
            } elseif (Auth::guard('job_supervisor')->check()) {
                return redirect()->route('job_supervisor.dashboard');
            }
        }
        return $next($request);
        // ['Super Admin','Insurance Company','Hospital','Radiology Center','Medical Center','Lab','Doctor','Patient','Pharmacy','SEO Admin','Gym','Life Coach']
    }
}
