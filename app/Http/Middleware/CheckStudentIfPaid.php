<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStudentIfPaid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $student = auth('student')->user();
        $lastPayment = $student->payments()->latest()->first();
        if ($lastPayment && $lastPayment->payment_status == 'paid' && $lastPayment->due_at > now()) {
            return $next($request);
        } else {
            return redirect()->back()->with('danger', 'الطالب غير مسجل');
        }
    }
}
