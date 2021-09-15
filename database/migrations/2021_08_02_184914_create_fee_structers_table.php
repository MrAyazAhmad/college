<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeStructersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_structers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('section_id');
            $table->foreign('section_id')->references('id')->on('class_session')->onDelete('cascade'); 
            $table->string('admission_fee');
            $table->string('tution_fee');
            $table->string('genral_fund');
            $table->string('medical_fund');
            $table->string('red_cross_fund');
            $table->string('welfare_fund');
            $table->string('magazine_fund');
            $table->string('library_security')->nullable();
            $table->string('affiliation_fund')->nullable();
            $table->string('board_universty_registration_fee')->nullable();
            $table->string('secience_fund')->nullable();
            $table->string('absence_fine')->nullable();
            $table->string('fine_fund')->nullable();
            $table->string('parking_fee');
            $table->string('sports_fund');
            $table->string('id_card_fee');
            $table->string('computer_fee');
            $table->string('exam_fund');
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
        Schema::dropIfExists('fee_structers');
    }
}
