<?php

namespace App\Http\Controllers;
use App\Models\Class_session;

use Illuminate\Http\Request;

class DeoController extends Controller
{
        public function index()
    {
        $class_section = Class_session::all();
        return view('student.info.create',compact('class_section'));
    }
}
