<?php

namespace App\Exports;

use App\Models\StudentRecord;
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
       $std=StudentRecord::all();
        $student_records = DB::table('student_records')
            ->join('fee_structers', 'student_records.fee_id', '=', 'fee_structers.id')
            ->join('class_session', 'student_records.section_id', '=', 'class_session.id')
            ->select('student_records.*', 'fee_structers.*','class_session.*')
            ->get();
        //        dd($student_records);
        // die();
        return $student_records;
        //             return view('admin',[
        //     'student_records'=>$student_records,
        // ]);
        // TODO: Implement view() method.
    }
}
