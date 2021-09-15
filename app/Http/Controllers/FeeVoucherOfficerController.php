<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRecord;

class FeeVoucherOfficerController extends Controller
{
        public function index()
    {
        $students = StudentRecord::orWhereNull('challan_print')->get();

        return view('feevoucherofficer',compact('students'));
       
    }
       public function studentrecord(Request $request)
    {
        $students = StudentRecord::where('id' , $request->stdid)->get();
        // dd($students);
        // die();

        return view('searchrecord',compact('students'));
       
    }
}
