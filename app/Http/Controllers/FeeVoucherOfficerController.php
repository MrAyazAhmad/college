<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRecord;
use App\Models\FeeStructer;
use App\Models\StudentFeeRecord;
use App\Models\Class_session;
use PhpOffice\PhpWord\TemplateProcessor;

class FeeVoucherOfficerController extends Controller
{
        public function index()
    {
        $students = StudentRecord::orWhereNull('challan_print')->get();

        return view('feevoucherofficer',compact('students'));
       
    }
       public function studentrecord(Request $request)
    {
        $students = StudentRecord::where('id' , $request->stdid)->get()->first();
        $feestructure = FeeStructer::find($students->fee_id);
        // dd($feestructure);
        return view('searchrecord',compact('students','feestructure'));
       
    }
       public function studentfeevoucher(Request $request ,$id )
    {
       $feeStructer = New StudentFeeRecord();
        $feeStructer->std_id  = $id;
        $feeStructer->admission_fee = $request->admission_fee;
        $feeStructer->tution_fee = $request->tution_fee;
        $feeStructer->genral_fund = $request->genral_fund;
        $feeStructer->medical_fund = $request->medical_fund;
        $feeStructer->red_cross_fund = $request->red_cross_fund;
        $feeStructer->welfare_fund = $request->welfare_fund;
        $feeStructer->magazine_fund = $request->magazine_fund;
        $feeStructer->library_security = $request->library_security;
        $feeStructer->affiliation_fund = $request->affiliation_fund;
        $feeStructer->board_universty_registration_fee = $request->board_universty_registration_fee;
        $feeStructer->secience_fund = $request->secience_fund;
        $feeStructer->masjjid_fund =$request->masjjid_fund;
        $feeStructer->fine_fund = $request->fine_fund;
        $feeStructer->parking_fee = $request->parking_fee;
        $feeStructer->sports_fund = $request->sports_fund;
        $feeStructer->id_card_fee = $request->id_card_fee;
        $feeStructer->computer_fee = $request->computer_fee;
        $feeStructer->exam_fund = $request->exam_fund;
        $feeStructer->total_fee = $request->total_fee;
        $feeStructer->bank_name = $request->bank_name;
        $feeStructer->account_title = $request->account_title;
        $feeStructer->account_number = $request->account_number;
        $feeStructer->due_date = $request->due_date;
        $sum = $request->admission_fee+$request->tution_fee+ $request->genral_fund+$request->medical_fund+$request->red_cross_fund+$request->welfare_fund+$request->magazine_fund+$request->library_security+$request->affiliation_fund+$request->board_universty_registration_fee+$request->secience_fund+$request->masjjid_fund+$request->fine_fund+$request->parking_fee+$request->sports_fund+$request->id_card_fee+$request->computer_fee+$request->exam_fund;
        // dd($sum);     
        $feeStructer->total_fee = $sum;
        // dd($feeStructer);
        $feeStructer->save();
        // die();
       $studentinfo =  StudentRecord::find($id);
             
        // $studentinfo->challan_print = 1;    
        // $studentinfo->save();    
        $class_section = Class_session::find($studentinfo->section_id);
        $wordFile=new TemplateProcessor('word/Fee Voucher.docx');
        $name= $studentinfo->canidate_name;
        $wordFile->setValue('name',$name);
        $wordFile->setValue('f_name',$studentinfo->f_name);
        $wordFile->setValue('id',$studentinfo->id);
        $wordFile->setValue('class',$class_section->class_name);
        $session=$class_section->start_year." ".$class_section->end_year;
        $wordFile->setValue('session',$session);
        $date= date('d-M-Y');
        $wordFile->setValue('date',$date);
        $fileName=$studentinfo->canidate_name.'_'.$studentinfo->CNIC;
        $wordFile->setValue('admission_fee',$feeStructer->admission_fee);
        $wordFile->setValue('tution_fee',$feeStructer->tution_fee);
        $wordFile->setValue('genral_fund',$feeStructer->genral_fund);
        $wordFile->setValue('medical_fund',$feeStructer->medical_fund);
        $wordFile->setValue('red_cross_fund',$feeStructer->red_cross_fund);
        $wordFile->setValue('welfare_fund',$feeStructer->welfare_fund);
        $wordFile->setValue('magazine_fund',$feeStructer->magazine_fund);
        $wordFile->setValue('library_security',$feeStructer->library_security);
        $wordFile->setValue('affiliation_fund',$feeStructer->affiliation_fund);
        $wordFile->setValue('burf',$feeStructer->board_universty_registration_fee);
        $wordFile->setValue('secience_fund',$feeStructer->secience_fund);
        $wordFile->setValue('masjjid_fund',$feeStructer->masjjid_fund);
        $wordFile->setValue('fine_fund',$feeStructer->fine_fund);
        $wordFile->setValue('parking_fee',$feeStructer->parking_fee);
        $wordFile->setValue('sports_fund',$feeStructer->sports_fund);
        $wordFile->setValue('id_card_fee',$feeStructer->id_card_fee);
        $wordFile->setValue('computer_fee',$feeStructer->computer_fee);
        $wordFile->setValue('exam_fund',$feeStructer->exam_fund);
        $wordFile->setValue('total_fee',$feeStructer->total_fee);
        $wordFile->setValue('bank_name',$feeStructer->bank_name);
        $wordFile->setValue('account_title',$feeStructer->account_title);
        $wordFile->setValue('account_number',$feeStructer->account_number);
        $wordFile->setValue('due_date',$feeStructer->due_date);
        $wordFile->saveAs($fileName.'.docx');
        return response()->download($fileName.'.docx')->deleteFileAfterSend(true);
        return redirect('feevoucherofficer')->with('success','challan created successfully.');

       
    }
}
