<?php

namespace App\Models;
use App\Models\StudentRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsIslamicStudiesRoll extends Model
{
    use HasFactory;
     protected $table = "bsislamicstudies";
       public function IslamicStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }

}
