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
            $table->string("1");
            $table->string("2");
            $table->string("3");
            $table->string("4");
            $table->string("5");
            $table->string("6");
            $table->string("7");
            $table->string("8");
            $table->string("9");
            $table->string("10");
            $table->string("11");
            $table->string("12");
            $table->string("13");
            $table->string("14");
            $table->string("15");
            $table->string("16");
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
