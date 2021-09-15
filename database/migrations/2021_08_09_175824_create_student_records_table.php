<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('section_id');
            $table->foreign('section_id')->references('id')->on('class_session')->onDelete('cascade');
            $table->string('CNIC');
            $table->string('canidate_name');
            $table->string('dob');
            $table->string('f_name');
            $table->string('f_cnic');
            $table->string('contact_number');
            $table->string('address');
            $table->string('religion');
            $table->string('nationality');
            $table->string('specialty');
            $table->string('group');
            $table->string('optional_subject_one');
            $table->string('optional_subject_two');
            $table->string('optional_subject_three');
            $table->string('image_name');


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
        Schema::dropIfExists('student_records');
    }
}
