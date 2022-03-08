<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFeeRecord extends Model
{
    use HasFactory;
    protected $table = "studentfeerecords";

      public function StudentRecord()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
    
}
