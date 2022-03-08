<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inter_Academic;
use App\Models\StudentFeeRecord;

class StudentRecord extends Model
{
    use HasFactory;
    protected $table = "student_records";
    public function InterMarks()
    {
        return $this->belongsTo(Inter_Academic::class, 'stu_id', 'id');
    }
      public function FeeRecord()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }

   
}
