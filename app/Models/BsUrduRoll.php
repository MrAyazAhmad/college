<?php

namespace App\Models;
use App\Models\StudentRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsUrduRoll extends Model
{
    use HasFactory;
     protected $table = "bsurdu";
       public function UrduStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
     public function UrduFee()
    {
        return $this->belongsTo(StudentFeeRecord::class, 'std_feei', 'id');
    }

}
