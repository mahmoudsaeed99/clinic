<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowerDenturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lower_dentures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->string("seventeen");
            $table->string("eighteen");
            $table->string("nineteen");
            $table->string("twenty");
            $table->string("twentyone");
            $table->string("twentytwo");
            $table->string("twentythree");
            $table->string("twentyfour");
            $table->string("twentyfive");
            $table->string("twentysix");
            $table->string("twentyseven");
            $table->string("twentyeight");
            $table->string("twentynine");
            $table->string("thirty");
            $table->string("thirtyone");
            $table->string("thirtytwo");
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
        Schema::dropIfExists('lower_dentures');
    }
}
