<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpperDenturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upper_dentures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->string("one")->nullable();;
            $table->string("two")->nullable();;
            $table->string("three")->nullable();;
            $table->string("four")->nullable();;
            $table->string("five")->nullable();;
            $table->string("six")->nullable();;
            $table->string("seven")->nullable();;
            $table->string("eight")->nullable();;
            $table->string("nine")->nullable();;
            $table->string("ten")->nullable();;
            $table->string("eleven")->nullable();;
            $table->string("twelve")->nullable();;
            $table->string("thirteen")->nullable();;
            $table->string("fourteen")->nullable();;
            $table->string("fifteen")->nullable();;
            $table->string("sixteen")->nullable();;
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
        Schema::dropIfExists('upper_dentures');
    }
}
