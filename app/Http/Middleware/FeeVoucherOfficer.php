<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class FeeVoucherOfficer
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

        if (Auth::user()->role == 5) {
            return redirect()->route('academy');
        }

        if (Auth::user()->role == 6) {
            return redirect()->route('scout');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('deo');

        }

        if (Auth::user()->role == 4) {
            return $next($request);
        }
    }
}
