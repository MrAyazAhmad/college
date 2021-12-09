<?php

namespace App\Http\Controllers;

use App\Models\StudentRecord;
use App\Models\Class_session;
use App\Models\FeeStructer;
use App\Models\Bachelor_Academic;
use App\Models\Inter_Academic;
use App\Models\Matric_Academic;
use Illuminate\Http\Request;
use Validator;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Exports\StudentRecordExport1;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use PDF;
use Redirect;


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
        // dd($request->all());
        // $request->validate([
        //     'CNIC' => 'required|unique:student_records',
        //     'canidate_name' => 'required',
        //     'dob' => 'required',
        //     'covid' => 'required',
        //     'f_name' => 'required',
        //     'm_name' => 'required',
        //     'f_cnic' => 'required',
        //     'contact_number' => 'required',
        //     'address' => 'required',
        //     'religion' => 'required',
        //     'nationality' => 'required',
        //     'specialty' => 'required',
        //     'group' => 'required',
        //     'optional_subject_one' => 'required',
        //     'optional_subject_two' => 'required',
        //     'optional_subject_three' => 'required',
        //     'Applied' =>'required',
        //     'section_name' =>'required',
        //     'class_year' =>'required',
        //     'section_id' =>'required',
        //     'bgroup' =>'required',
        //      'roll_no' => 'required',
        //     'Passing_Year' => 'required',
        //     'exam_Type' => 'required',
        //     'Marks_Obt' => 'required',
        //     'totall_marks' => 'required',
        //     'percentage' => 'required',
        //     'insitute_name' => 'required',
        //     'grade' => 'required',
        // ]); 


 /*       $validator = Validator::make($input, $rules, $message = [
    'required' => 'The :attribute field is requiredddddddddddd.',
]);*/

        $studentinfo = New StudentRecord();
        $studentinfo->section_id = $request->section_id;
        $feestructer = FeeStructer::where('section_id', $request->section_id)->first();
        $classsession = Class_session::where('id', $request->section_id)->first();
        $studentinfo->fee_id =$feestructer->id;
        $studentinfo->CNIC = $request->CNIC;
        $studentinfo->Applied = $request->Applied;
        $studentinfo->class_year = $request->class_year;
        $studentinfo->canidate_name = $request->canidate_name;
        $studentinfo->dob = $request->dob;
        $studentinfo->f_name = $request->f_name;
        $studentinfo->m_name = $request->m_name;
        $studentinfo->f_cnic = $request->f_cnic;
        $studentinfo->contact_number = $request->contact_number;
        $studentinfo->address = $request->address;
        $studentinfo->religion = $request->religion;
        $studentinfo->nationality = $request->nationality;
        $studentinfo->specialty = $request->specialty;
        $studentinfo->covid = $request->covid;
        $studentinfo->bgroup = $request->bgroup;
        $studentinfo->previous_roll_no = $request->previous_roll_no;
        $studentinfo->previous_year = $request->previous_year;
        $studentinfo->previous_session = $request->previous_session;
        $studentinfo->previous_board = $request->previous_board;
        $studentinfo->reg_no = $request->reg_no;
        if($request->Applied=="BS(hons)"){
        $studentinfo->optional_subject_one = $request->section_name;
        $studentinfo->optional_subject_two = $request->section_name;
        $studentinfo->optional_subject_three = $request->section_name;
        $studentinfo->group = $request->section_name;

        }else{
        $checkcnic=StudentRecord::where('CNIC',$request->CNIC)->get()->first();
        if(isset($checkcnic->id)){
            dd("student already Registor");
        }else{

        $studentinfo->optional_subject_one = $request->optional_subject_one;
        $studentinfo->optional_subject_two = $request->optional_subject_two;
        $studentinfo->optional_subject_three = $request->optional_subject_three;
        $studentinfo->group = $request->group;
        }

        }
            if ($image_name = $request->file('image_name')) {
            $destinationPath = 'public/image/canidatephoto/';
            $canidateImage = date('YmdHis') . $request->canidate_name ."." . $image_name->getClientOriginalExtension();
            $image_name->move($destinationPath, $canidateImage);
            $input['image_name'] = 
        $studentinfo->image_name = "$canidateImage";

        }else{
           $studentinfo->image_name="avatar.jpg";
       
           File::copy(public_path('image/canidatephoto/avatar/avatar.jpg'), public_path('image/canidatephoto/avatar.jpg')); 
        }
        $studentinfo->save();
        if($request->Applied=="Intermediate"){

  
        $matric_academic = New Matric_Academic();
        $matric_academic->stu_id =$studentinfo->id;
        $matric_academic->roll_no =$request->roll_no;
        $matric_academic->passing_year = $request->Passing_Year;
        $matric_academic->exam_Type = $request->exam_Type;
        $matric_academic->marks_obtian = $request->Marks_Obt;
        $matric_academic->total_marks = $request->totall_marks;
        $matric_academic->percentage = $request->percentage;
        $matric_academic->insitute_name = $request->insitute_name;
        $matric_academic->grade = $request->grade;
        $matric_academic->save();
    }else{
        


        

         if($request->Inter_Roll_No || $request->Inter_insitute_name){
             $request->validate([
            'Inter_Roll_No' => 'required',
            'Inter_Year' => 'required',
            'Inter_Exam_Type' => 'required',
            'class_year' => 'required',
            'Inter_Marks_Obt' => 'required',
            'Inter_totall_marks' => 'required',
            'Inter_percentage' => 'required',
            'Inter_insitute_name' => 'required',
        ]); 
        $Inter_academic = New Inter_Academic();
        $Inter_academic->stu_id =$studentinfo->id;
        $Inter_academic->roll_no =$request->Inter_Roll_No;
        $Inter_academic->passing_year = $request->Inter_Year;
        $Inter_academic->exam_type = $request->Inter_Exam_Type;
        $Inter_academic->marks_obtian = $request->Inter_Marks_Obt;
        $Inter_academic->total_marks = $request->Inter_totall_marks;
        $Inter_academic->percentage = $request->Inter_percentage;
        $Inter_academic->insitute_name = $request->Inter_insitute_name;
        $Inter_academic->grade = $request->Inter_grade;
        $Inter_academic->subject_marks = $request->Inter_subject_marks;
        // dd($matric_academic);       
        $Inter_academic->save();
        // die();

        }
    }
        //  if($request->Bachelor_Roll_No || $request->Bachelor_insitute_name){
        //     $request->validate([
        //     'Bachelor_Roll_No' => 'required',
        //     'Bachelor_Year' => 'required',
        //     'Bachelor_Exam_Type' => 'required',
        //     'class_year' => 'required',
        //     'Bachelor_Marks_Obt' => 'required',
        //     'Bachelor_totall_marks' => 'required',
        //     'Bachelor_percentage' => 'required',
        //     'Bachelor_insitute_name' => 'required',
        // ]); 
        // $Bachelor_academic = New Bachelor_Academic();
        // $Bachelor_academic->stu_id =$studentinfo->id;
        // $Bachelor_academic->roll_no =$request->Bachelor_Roll_No;
        // $Bachelor_academic->Passing_Year = $request->Bachelor_Year;
        // $Bachelor_academic->exam_type = $request->Bachelor_Exam_Type;
        // $Bachelor_academic->marks_obtian = $request->Bachelor_Marks_Obt;
        // $Bachelor_academic->total_marks = $request->Bachelor_totall_marks;
        // $Bachelor_academic->percentage = $request->Bachelor_percentage;
        // $Bachelor_academic->insitute_name = $request->Bachelor_insitute_name;
        // $matric_academic->grade = $request->Bachelor_grade;
        // $Bachelor_academic->save();
   

        // }

        return Redirect()->route('generate-pdf', [$studentinfo->id])->with('success', 'student added successully.');

         // return Redirect::back()->with('errors', 'The Message');

        // $data = ['title' => $studentinfo->canidate_name,'fname' => $studentinfo->f_name ,'image' => $studentinfo->image_name ,'id' => $studentinfo->id,'class_name' => $classsession->class_name];
        // $pdf = PDF::loadView('myPDF', $data);
        // $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        // $pdf = PDF::loadView('myPDF', $data);
  
        // return $pdf->download('itsolutionstuff.pdf');

        // return $pdf->download('itsolutionstuff.pdf');
        // Redirect::away($pdf->download('itsolutionstuff.pdf'));
  
        // return $pdf->stream('itsolutionstuff.pdf');
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
        $feestructer =  FeeStructer::find($studentinfo->fee_id);
        // dd($feestructer);        
        $studentinfo->challan_print = 1;    
        $studentinfo->save();    
        $class_section = Class_session::find($studentinfo->section_id);
        $wordFile=new TemplateProcessor('word/Fee Voucher.docx');
        $name= $studentinfo->canidate_name;
        $wordFile->setValue('name',$name);
        $wordFile->setValue('f_name',$studentinfo->f_name);
        $wordFile->setValue('m_name',$studentinfo->m_name);
        $wordFile->setValue('id',$studentinfo->id);
        $wordFile->setValue('class',$class_section->class_name);
        $session=$class_section->start_year." ".$class_section->end_year;
        $wordFile->setValue('session',$session);
        $date= date('d-M-Y');
        $wordFile->setValue('date',$date);
        $fileName=$studentinfo->canidate_name.'_'.$studentinfo->CNIC;
        $wordFile->setValue('admission_fee',$feestructer->admission_fee);
        $wordFile->setValue('tution_fee',$feestructer->tution_fee);
        $wordFile->setValue('genral_fund',$feestructer->genral_fund);
        $wordFile->setValue('medical_fund',$feestructer->medical_fund);
        $wordFile->setValue('red_cross_fund',$feestructer->red_cross_fund);
        $wordFile->setValue('welfare_fund',$feestructer->welfare_fund);
        $wordFile->setValue('magazine_fund',$feestructer->magazine_fund);
        $wordFile->setValue('library_security',$feestructer->library_security);
        $wordFile->setValue('affiliation_fund',$feestructer->affiliation_fund);
        $wordFile->setValue('burf',$feestructer->board_universty_registration_fee);
        $wordFile->setValue('secience_fund',$feestructer->secience_fund);
        $wordFile->setValue('masjjid_fund',$feestructer->masjjid_fund);
        $wordFile->setValue('fine_fund',$feestructer->fine_fund);
        $wordFile->setValue('parking_fee',$feestructer->parking_fee);
        $wordFile->setValue('sports_fund',$feestructer->sports_fund);
        $wordFile->setValue('id_card_fee',$feestructer->id_card_fee);
        $wordFile->setValue('computer_fee',$feestructer->computer_fee);
        $wordFile->setValue('exam_fund',$feestructer->exam_fund);
        $wordFile->setValue('total_fee',$feestructer->total_fee);
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
