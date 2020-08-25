<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("age");
            $table->integer("totalMoney");
            $table->integer("remainingMoney");
            $table->string("address");
            $table->string("mobile");
            $table->text("note");
            $table->boolean("heart");
            $table->boolean("diabetes");
            $table->boolean("allergy");
            $table->boolean("bleed");
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
        Schema::dropIfExists('patients');
    }
}
