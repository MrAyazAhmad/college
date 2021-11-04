<?php

namespace App\Exports;
use App\Models\StudentTRoll;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\FromCollection;

class StudentListExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
       $student_records=StudentTRoll::orderBy('std_id', 'ASC')->get();
       // dd($student_records);

         return view('list', [
            'student_records' => $student_records
        ]);
        
    }
}
