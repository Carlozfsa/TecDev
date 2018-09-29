<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFortalezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fortalezas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->string('fortalezas_1');
            $table->string('fortalezas_2');
            $table->string('fortalezas_3');
            $table->string('fortalezas_4');
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
        Schema::dropIfExists('fortalezas');
    }
}
