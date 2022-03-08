<?php

namespace App\Models;
use App\Models\StudentRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsComputerRoll extends Model
{
    use HasFactory;
     protected $table = "bscomputer";
       public function ComputerStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
        public function BscsFee()
    {
        return $this->belongsTo(StudentFeeRecord::class, 'std_feei', 'id');
    }

}
