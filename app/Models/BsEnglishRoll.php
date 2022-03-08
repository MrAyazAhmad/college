<?php

namespace App\Models;
use App\Models\StudentRecord;
use App\Models\StudentFeeRecord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsEnglishRoll extends Model
{
    use HasFactory;
    protected $table = "bsenglishroll";
       public function EnglishStudent()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
        public function EnglishFee()
    {
        return $this->belongsTo(StudentFeeRecord::class, 'std_feei', 'id');
    }
}
