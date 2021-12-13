<?php

namespace App\Models;
use App\Models\StudentRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsPhyicsRoll extends Model
{
    use HasFactory;
     protected $table = "bsphyics";
       public function PhyicsStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }

}
