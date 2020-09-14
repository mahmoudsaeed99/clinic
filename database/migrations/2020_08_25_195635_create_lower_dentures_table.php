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
            $table->string("seventeen")->nullable();;
            $table->string("eighteen")->nullable();;
            $table->string("nineteen")->nullable();;
            $table->string("twenty")->nullable();;
            $table->string("twentyone")->nullable();;
            $table->string("twentytwo")->nullable();;
            $table->string("twentythree")->nullable();;
            $table->string("twentyfour")->nullable();;
            $table->string("twentyfive")->nullable();;
            $table->string("twentysix")->nullable();;
            $table->string("twentyseven")->nullable();;
            $table->string("twentyeight")->nullable();;
            $table->string("twentynine")->nullable();;
            $table->string("thirty")->nullable();;
            $table->string("thirtyone")->nullable();;
            $table->string("thirtytwo")->nullable();;
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
