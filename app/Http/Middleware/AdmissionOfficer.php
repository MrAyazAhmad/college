<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class AdmissionOfficer
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
       if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('feevoucherofficer');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('deo');

        }
        if (Auth::user()->role == 2) {
            return redirect()->route('admin');

        }

        if (Auth::user()->role == 5) {
            return $next($request);
        }
    }
}
