<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debilidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->string('debilidads_1');
            $table->string('debilidads_2');
            $table->string('debilidads_3');
            $table->string('debilidads_4');
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
        Schema::dropIfExists('debilidads');
    }
}
