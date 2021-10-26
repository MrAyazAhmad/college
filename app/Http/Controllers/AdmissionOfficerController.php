<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRecord;
use App\Models\Class_session;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Models\Bachelor_Academic;
use App\Models\StudentTRoll;
use App\Models\Inter_Academic;
use App\Models\Matric_Academic;
use App\Models\StudentFeeRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Auth;
use PDF;

use Carbon\Carbon;


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
        $studentinfofee =  StudentFeeRecord::where('std_id',$student_id)->first();
        $studentroll =  StudentTRoll::where('std_id',$studentinfofee->std_id)->first();
        if(isset($studentroll)){

        $studentroll =  StudentTRoll::find($studentroll->id);

        }else{
        $studentroll = New StudentTRoll();

        }
         $studentroll->std_id = $studentinfo->id;
        $studentroll->std_feei = $studentinfofee->id;
        $studentroll->save();
        $studentinfo->roll_no= $studentroll->id;
        $studentinfo->save();
        $user = Auth::user()->name;
        

      

        $studentinfo->submissiondate = $request->submissiondate;
         if ($challan_file = $request->file('challan_file')) {
            $destinationPath = 'public/image/challan_file/';
            $canidateImage = date('YmdHis') . $request->canidate_name ."." . $challan_file->getClientOriginalExtension();
            $challan_file->move($destinationPath, $canidateImage);
            $input['challan_file'] = 
        $studentinfo->challan_file = "$canidateImage";
        $studentinfo->save();
        $studentinfo =  StudentRecord::find($student_id);
      $studentmatricinfo =  Matric_Academic::where('stu_id',$student_id)->first();
      $studentinterinfo =  Inter_Academic::where('stu_id',$student_id)->first();
      $studentbachelorcinfo =  Bachelor_Academic::where('stu_id',$student_id)->first();
      
        $class_section = Class_session::find($studentinfo->section_id);
     

        $wordFile=new TemplateProcessor('word/AdmissionForm .docx');
        $name= $studentinfo->canidate_name;
        $wordFile->setValue('name',$name);
        $wordFile->setValue('user',$user);
        $wordFile->setValue('cnic',$studentinfo->CNIC);
        $wordFile->setValue('dob',$studentinfo->dob);
        $wordFile->setValue('fname',$studentinfo->f_name);
        $wordFile->setValue('fcnic',$studentinfo->f_cnic);
        $wordFile->setValue('contact_number',$studentinfo->contact_number);
        $wordFile->setValue('address',$studentinfo->address);
        $wordFile->setValue('specialty',$studentinfo->specialty);
        $wordFile->setValue('religion',$studentinfo->religion);
        $wordFile->setValue('nationality',$studentinfo->nationality);
        $wordFile->setValue('applied',$studentinfo->Applied);
        $wordFile->setValue('bgroup',$studentinfo->bgroup);
        $wordFile->setValue('covid',$studentinfo->covid);
        $wordFile->setValue('group',$studentinfo->group);
        $wordFile->setValue('optional_subject_one',$studentinfo->optional_subject_one);
        $wordFile->setValue('optional_subject_two',$studentinfo->optional_subject_two);
        $wordFile->setValue('optional_subject_three',$studentinfo->optional_subject_three);
        // $wordFile->setValue('image_name',$studentinfo->image_name);
        $wordFile->setImageValue('ticketimage',array('path' =>public_path().'/image/canidatephoto/'.$studentinfo->image_name, 'width' => 140, 'height' => 140, 'ratio' => true));
        $wordFile->setValue('updated_at',$studentinfo->updated_at);
        $wordFile->setValue('roll_no',$studentinfo->roll_no);
        $wordFile->setValue('newid',$studentinfo->id);

        $wordFile->setValue('submissiondate',$request->submissiondate);

        if(isset($studentmatricinfo)){
        $wordFile->setValue('rollno',$studentmatricinfo->roll_no);
        $wordFile->setValue('passing_year',$studentmatricinfo->passing_year);
        $wordFile->setValue('exam_type',$studentmatricinfo->exam_type);
        $wordFile->setValue('marks_obtian',$studentmatricinfo->marks_obtian);
        $wordFile->setValue('total_marks',$studentmatricinfo->total_marks);
        $wordFile->setValue('percentage',$studentmatricinfo->percentage);
        $wordFile->setValue('grade',$studentmatricinfo->grade);
        $wordFile->setValue('insitute_name',$studentmatricinfo->insitute_name);

        } else{
         $wordFile->setValue('rollno','');

        $wordFile->setValue('passing_year','');

        $wordFile->setValue('exam_type','');;

        $wordFile->setValue('marks_obtian','');

        $wordFile->setValue('total_marks','');

        $wordFile->setValue('percentage','');

        $wordFile->setValue('insitute_name','');

    }
        if(isset($studentinterinfo)){      

        $wordFile->setValue('irollno',$studentinterinfo->roll_no);
        $wordFile->setValue('ipassing_year',$studentinterinfo->passing_year);
        $wordFile->setValue('iexam_type',$studentinterinfo->exam_type);
        $wordFile->setValue('imarks_obtian',$studentinterinfo->marks_obtian);
        $wordFile->setValue('itotal_marks',$studentinterinfo->total_marks);
        $wordFile->setValue('ipercentage',$studentinterinfo->percentage);
        $wordFile->setValue('igrade',$studentinterinfo->grade);
        $wordFile->setValue('iinsitute_name',$studentinterinfo->insitute_name);
        $wordFile->setValue('iclass',$class_section->class_name);
        $session=$class_section->start_year." ".$class_section->end_year;
    }
    else{
        
         $wordFile->setValue('irollno','');

        $wordFile->setValue('ipassing_year','');

        $wordFile->setValue('iexam_type','');;

        $wordFile->setValue('imarks_obtian','');

        $wordFile->setValue('itotal_marks','');

        $wordFile->setValue('ipercentage','');
        $wordFile->setValue('igrade','');


        $wordFile->setValue('iinsitute_name','');

    }
        if(isset($studentbachelorcinfo)){      


        $wordFile->setValue('brollno',$studentbachelorcinfo->roll_no);

        $wordFile->setValue('bpassing_year',$studentbachelorcinfo->passing_year);

        $wordFile->setValue('bexam_type',$studentbachelorcinfo->exam_type);

        $wordFile->setValue('bmarks_obtian',$studentbachelorcinfo->marks_obtian);

        $wordFile->setValue('btotal_marks',$studentbachelorcinfo->total_marks);

        $wordFile->setValue('bpercentage',$studentbachelorcinfo->percentage);
        $wordFile->setValue('bgrade',$studentbachelorcinfo->grade);

        $wordFile->setValue('binsitute_name',$studentbachelorcinfo->insitute_name);
    }else{
        
         $wordFile->setValue('brollno','');

        $wordFile->setValue('bpassing_year','');
        $wordFile->setValue('bgrade','');


        $wordFile->setValue('bexam_type','');;

        $wordFile->setValue('bmarks_obtian','');

        $wordFile->setValue('btotal_marks','');

        $wordFile->setValue('bpercentage','');

        $wordFile->setValue('binsitute_name','');

    }

        $wordFile->setValue('start_year',$class_section->start_year);

        $wordFile->setValue('session',$class_section->class_name);
        $date= date('d-M-Y');
        $wordFile->setValue('date',$date);
        $fileName=$studentinfo->canidate_name.'_'.$studentinfo->CNIC;
        $wordFile->saveAs($fileName.'.docx');
      
        return response()->download($fileName.'.docx')->deleteFileAfterSend(true);

        }    
        return redirect::to('admissionofficer')->with('message', 'please upload challan image and selecte date!');;


    }
       public function studentrecordupload(Request $request)
    {
        $studentinfo = StudentRecord::where('id' , $request->stdid)->get()->first();
        return view('student.info.upload',compact('studentinfo'));
       
    }
      public function printaplication( $student_id){

      $studentinfo =  StudentRecord::find($student_id);
      $studentmatricinfo =  Matric_Academic::where('stu_id',$student_id)->first();
      $studentinterinfo =  Inter_Academic::where('stu_id',$student_id)->first();
      $studentbachelorcinfo =  Bachelor_Academic::where('stu_id',$student_id)->first();
      
        $class_section = Class_session::find($studentinfo->section_id);
      // dd($class_section);

        // dd($class_section->class_name);
        $wordFile=new TemplateProcessor('word/AdmissionForm .docx');
        $name= $studentinfo->canidate_name;
        $wordFile->setValue('name',$name);
        $wordFile->setValue('cnic',$studentinfo->CNIC);
        $wordFile->setValue('dob',$studentinfo->dob);
        $wordFile->setValue('fname',$studentinfo->f_name);
        $wordFile->setValue('fcnic',$studentinfo->f_cnic);
        $wordFile->setValue('contact_number',$studentinfo->contact_number);
        $wordFile->setValue('address',$studentinfo->address);
        $wordFile->setValue('specialty',$studentinfo->specialty);
        $wordFile->setValue('religion',$studentinfo->religion);
        $wordFile->setValue('nationality',$studentinfo->nationality);
        $wordFile->setValue('applied',$studentinfo->Applied);
        $wordFile->setValue('bgroup',$studentinfo->bgroup);
        $wordFile->setValue('covid',$studentinfo->covid);
        $wordFile->setValue('group',$studentinfo->group);
        $wordFile->setValue('optional_subject_one',$studentinfo->optional_subject_one);
        $wordFile->setValue('optional_subject_two',$studentinfo->optional_subject_two);
        $wordFile->setValue('optional_subject_three',$studentinfo->optional_subject_three);
        // $wordFile->setValue('image_name',$studentinfo->image_name);
        $wordFile->setImageValue('ticketimage',array('path' =>public_path().'/image/canidatephoto/'.$studentinfo->image_name, 'width' => 140, 'height' => 140, 'ratio' => true));
        $wordFile->setValue('updated_at',$studentinfo->updated_at);
        $wordFile->setValue('roll_no',$studentinfo->roll_no);
        if(isset($studentmatricinfo)){
        $wordFile->setValue('rollno',$studentmatricinfo->roll_no);
        $wordFile->setValue('passing_year',$studentmatricinfo->passing_year);
        $wordFile->setValue('exam_type',$studentmatricinfo->exam_type);
        $wordFile->setValue('marks_obtian',$studentmatricinfo->marks_obtian);
        $wordFile->setValue('total_marks',$studentmatricinfo->total_marks);
        $wordFile->setValue('percentage',$studentmatricinfo->percentage);
        $wordFile->setValue('grade',$studentmatricinfo->grade);
        $wordFile->setValue('insitute_name',$studentmatricinfo->insitute_name);
        } else{
         $wordFile->setValue('rollno','');

        $wordFile->setValue('passing_year','');

        $wordFile->setValue('exam_type','');;

        $wordFile->setValue('marks_obtian','');

        $wordFile->setValue('total_marks','');

        $wordFile->setValue('percentage','');

        $wordFile->setValue('insitute_name','');

    }
        if(isset($studentinterinfo)){      

        $wordFile->setValue('irollno',$studentinterinfo->roll_no);
        $wordFile->setValue('ipassing_year',$studentinterinfo->passing_year);
        $wordFile->setValue('iexam_type',$studentinterinfo->exam_type);
        $wordFile->setValue('imarks_obtian',$studentinterinfo->marks_obtian);
        $wordFile->setValue('itotal_marks',$studentinterinfo->total_marks);
        $wordFile->setValue('ipercentage',$studentinterinfo->percentage);
        $wordFile->setValue('igrade',$studentinterinfo->grade);
        $wordFile->setValue('iinsitute_name',$studentinterinfo->insitute_name);
        $wordFile->setValue('iclass',$class_section->class_name);
        $session=$class_section->start_year." ".$class_section->end_year;
    }
    else{
        
         $wordFile->setValue('irollno','');

        $wordFile->setValue('ipassing_year','');

        $wordFile->setValue('iexam_type','');;

        $wordFile->setValue('imarks_obtian','');

        $wordFile->setValue('itotal_marks','');

        $wordFile->setValue('ipercentage','');
        $wordFile->setValue('igrade','');


        $wordFile->setValue('iinsitute_name','');

    }
        if(isset($studentbachelorcinfo)){      


        $wordFile->setValue('brollno',$studentbachelorcinfo->roll_no);

        $wordFile->setValue('bpassing_year',$studentbachelorcinfo->passing_year);

        $wordFile->setValue('bexam_type',$studentbachelorcinfo->exam_type);

        $wordFile->setValue('bmarks_obtian',$studentbachelorcinfo->marks_obtian);

        $wordFile->setValue('btotal_marks',$studentbachelorcinfo->total_marks);

        $wordFile->setValue('bpercentage',$studentbachelorcinfo->percentage);
        $wordFile->setValue('bgrade',$studentbachelorcinfo->grade);

        $wordFile->setValue('binsitute_name',$studentbachelorcinfo->insitute_name);
    }else{
        
         $wordFile->setValue('brollno','');

        $wordFile->setValue('bpassing_year','');
        $wordFile->setValue('bgrade','');


        $wordFile->setValue('bexam_type','');;

        $wordFile->setValue('bmarks_obtian','');

        $wordFile->setValue('btotal_marks','');

        $wordFile->setValue('bpercentage','');

        $wordFile->setValue('binsitute_name','');

    }

        $wordFile->setValue('start_year',$class_section->start_year);

        $wordFile->setValue('session',$class_section->class_name);
        $date= date('d-M-Y');
        $wordFile->setValue('date',$date);
        $fileName=$studentinfo->canidate_name.'_'.$studentinfo->CNIC;
        $wordFile->saveAs($fileName.'.docx');
        //  $domPdfPath = base_path('vendor/dompdf/dompdf');
        // \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        // \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
         
        // //Load word file
        // $Content = \PhpOffice\PhpWord\IOFactory::load(public_path($fileName.'.docx')); 
 
        // //Save it into PDF
        // $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
        // $PDFWriter->save(public_path('new-result.pdf')); 
        // echo 'File has been successfully converted';
        // die();
        return response()->download($fileName.'.docx')->deleteFileAfterSend(true);
        return redirect('feevoucherofficer')->with('success','challan created successfully.');
    }



}
