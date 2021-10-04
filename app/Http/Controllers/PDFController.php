<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use App\Models\StudentRecord;
use App\Models\Class_session;

  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($studentinfob)
    {
        $studentinfo =  StudentRecord::find($studentinfob);                
        $classsession = Class_session::where('id', $studentinfo->section_id)->first();

         $data = ['title' => $studentinfo->canidate_name,'fname' => $studentinfo->f_name ,'image' => $studentinfo->image_name ,'id' => $studentinfo->id,'class_name' => $classsession->class_name];
        $pdf = PDF::loadView('myPDF', $data);  
        return $pdf->stream($studentinfo->canidate_name.'_'.$studentinfo->CNIC);

    }
}