<?php

namespace App\Models;
use App\Models\StudentRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsMathematicsRoll extends Model
{
    use HasFactory;
     protected $table = "bsmathematics";
       public function MathStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }

}
