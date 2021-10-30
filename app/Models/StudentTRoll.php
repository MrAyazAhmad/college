<?php

namespace App\Models;
use App\Models\StudentRecord;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTRoll extends Model
{
    use HasFactory;
    protected $table = "studentrollno";
       public function Student()
    {
        return $this->belongsTo(StudentRecord::class, 'std_id', 'id');
    }
    
    
}
