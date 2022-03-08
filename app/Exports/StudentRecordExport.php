<?php

namespace App\Exports;

use App\Models\StudentRecord;
use App\Models\StudentFeeRecord;
use App\Models\FeeStructer;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentRecordExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function view(): View
    {
       // $stdfee=StudentFeeRecord::all();
       // $std=StudentRecord::all();
        $student_records = DB::table('student_records')
            ->join('fee_structers', 'student_records.fee_id', '=', 'fee_structers.id')
            ->join('class_session', 'student_records.section_id', '=', 'class_session.id')
            ->selectRaw('fee_structers.* fee_structers.id as fid','student_records','student_records.id as sid','student_records.submissiondate', 'student_records.roll_no', 'student_records.canidate_name', 'class_session.class_name')
            ->get();
          
        // return $student_records;
        //             return view('admin',[
        //     'student_records'=>$student_records,
        // ]);
        // TODO: Implement view() method.
    }
}
