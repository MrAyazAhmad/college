<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
            return redirect()->route('admissionofficer');

        }
    }

    public function handleAdmin()
    {
        return view('handleAdmin');
    }    
}