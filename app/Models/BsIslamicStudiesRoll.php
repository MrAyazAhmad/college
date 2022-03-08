<?php

namespace App\Models;
use App\Models\StudentRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsIslamicStudiesRoll extends Model
{
    use HasFactory;
     protected $table = "bsislamicstudies";
       public function IslamStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
      public function IsmlamicFee()
    {
        return $this->belongsTo(StudentFeeRecord::class, 'std_feei', 'id');
    }

}
