<?php
namespace App\Exports;
use App\Models\StudentRecord;
use App\Models\FeeStructer;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentRecordExport1 implements FromView
{
    public function view(): View
    {
          $student_records = DB::table('student_records')
            ->join('fee_structers', 'student_records.fee_id', '=', 'fee_structers.id')
            ->join('class_session', 'student_records.section_id', '=', 'class_session.id')
            ->select('student_records.*', 'fee_structers.*','class_session.*')
            ->get();
        return view('test', [
            'student_records' => $student_records
        ]);
    }
}
