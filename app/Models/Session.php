<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
     protected $table = "class_session";

    protected $fillable = ["class_name","session_name","start_year","end_year","status_id"];
}
