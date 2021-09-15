<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassSession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_session', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->string('session_name');
            $table->string('start_year');
            $table->string('end_year');
            $table->integer('status_id')->nullable();
            $table->timestamps();
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_session');
    }
}
