<?php
use App\Models\Class_session;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructer extends Model
{
    use HasFactory;
    protected $table = "fee_structers";


    public function Section()
    {
        return $this->belongsTo(Class_session::class, 'section_id', 'id');
    }
    
}
