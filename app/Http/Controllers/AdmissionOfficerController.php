<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRecord;


class AdmissionOfficerController extends Controller
{
    public function index()
    {
         $students = StudentRecord::orWhereNull('challan_file')->get();

        return view('admissionofficer',compact('students'));
    }
      public function uploadrespit($student_id){

        $studentinfo =  StudentRecord::find($student_id);        
        return view('student.info.upload',compact('studentinfo'));


    }  
    public function postrespit(Request $request, $student_id){

        $studentinfo =  StudentRecord::find($student_id);
        // $studentinfo-> = $request->challan_file;
         if ($challan_file = $request->file('challan_file')) {
            $destinationPath = 'public/image/challan_file/';
            $canidateImage = date('YmdHis') . $request->canidate_name ."." . $challan_file->getClientOriginalExtension();
            $challan_file->move($destinationPath, $canidateImage);
            $input['challan_file'] = 
        $studentinfo->challan_file = "$canidateImage";
        $studentinfo->save();

        }    
        return redirect('admissionofficer')->with('success','user update successfully.');


    }
       public function studentrecordupload(Request $request)
    {
        $students = StudentRecord::where('id' , $request->stdid)->get();
        // dd($students);
        // die();

        return view('searchrecordupload',compact('students'));
       
    }
}
