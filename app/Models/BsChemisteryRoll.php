<?php

namespace App\Models;
use App\Models\StudentRecord;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsChemisteryRoll extends Model
{
    use HasFactory;
     protected $table = "bschemistery";
       public function ChemisteryStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
        public function ChemisteryFee()
    {
        return $this->belongsTo(StudentFeeRecord::class, 'std_feei', 'id');
    }


}
