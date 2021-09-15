<?php

namespace App\Http\Controllers;

use App\Models\StudentRecord;
use App\Models\Class_session;
use App\Models\FeeStructer;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Exports\StudentRecordExport1;
use Maatwebsite\Excel\Facades\Excel;
use PDF;



use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;


use File;


class StudentRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.info.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $class_section = Class_session::all();
        return view('student.info.create',compact('class_section'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentinfo = New StudentRecord();
        $studentinfo->section_id = $request->section_id;
        $feestructer = FeeStructer::where('section_id', $request->section_id)->first();
        $classsession = Class_session::where('id', $request->section_id)->first();
        // dd($classsession);
        // die();

        $studentinfo->fee_id =$feestructer->id;
        $studentinfo->CNIC = $request->CNIC;
        $studentinfo->canidate_name = $request->canidate_name;
        $studentinfo->dob = $request->dob;
        $studentinfo->f_name = $request->f_name;
        $studentinfo->f_cnic = $request->f_cnic;
        $studentinfo->contact_number = $request->contact_number;
        $studentinfo->address = $request->address;
        $studentinfo->religion = $request->religion;
        $studentinfo->nationality = $request->nationality;
        $studentinfo->specialty = $request->specialty;
        $studentinfo->group = $request->group;
        $studentinfo->optional_subject_one = $request->optional_subject_one;
        $studentinfo->optional_subject_two = $request->optional_subject_two;
        $studentinfo->optional_subject_three = $request->optional_subject_three;
            if ($image_name = $request->file('image_name')) {
            $destinationPath = 'public/image/canidatephoto/';
            $canidateImage = date('YmdHis') . $request->canidate_name ."." . $image_name->getClientOriginalExtension();
            $image_name->move($destinationPath, $canidateImage);
            $input['image_name'] = 
        $studentinfo->image_name = "$canidateImage";

        }
        // dd($studentinfo);
        // die();
        // $studentinfob=$studentinfo;
        $studentinfo->save();
        $data = ['title' => $studentinfo->canidate_name,'fname' => $studentinfo->f_name ,'image' => $studentinfo->image_name ,'id' => $studentinfo->id,'class_name' => $classsession->class_name];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->stream('itsolutionstuff.pdf');
        // return redirect()->route('generate-pdf',compact('studentinfob'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentRecord  $studentRecord
     * @return \Illuminate\Http\Response
     */
    public function show(StudentRecord $studentRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentRecord  $studentRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentRecord $studentRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentRecord  $studentRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentRecord $studentRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentRecord  $studentRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentRecord $studentRecord)
    {
        //
    }
    public function wordExport($student_id){

        $studentinfo =  StudentRecord::find($student_id);        
        $studentinfo->challan_print = 1;    
        $studentinfo->save();    
        $class_section = Class_session::find($studentinfo->section_id);
        $wordFile=new TemplateProcessor('word/Fee Voucher struck off.docx');
        $name= $studentinfo->canidate_name;
        $wordFile->setValue('name',$name);
        $wordFile->setValue('f_name',$studentinfo->f_name);
        $wordFile->setValue('class',$class_section->class_name);
        $session=$class_section->start_year." ".$class_section->end_year;
        $wordFile->setValue('session',$session);
        $date= date('d-M-Y');
        $wordFile->setValue('date',$date);
        $fileName=$studentinfo->canidate_name.'_'.$studentinfo->CNIC;
        $wordFile->saveAs($fileName.'.docx');
        return response()->download($fileName.'.docx')->deleteFileAfterSend(true);
        return redirect('feevoucherofficer')->with('success','challan created successfully.');



    }
    //         public function export() 
    // {
    //     $name='Cashbook'.date('M-d-Y_hia').'.xlsx';  
    //     return Excel::download(new StudentRecordExport1, $name);
    // }
}
