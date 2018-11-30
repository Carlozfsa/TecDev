<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->string('oportunidads_1');
            $table->string('oportunidads_2');
            $table->string('oportunidads_3');
            $table->string('oportunidads_4');

            $table->string('retro_1');
            $table->string('retro_2');
            $table->string('retro_3');
            $table->string('retro_4');

            $table->integer('cal_1');
            $table->integer('cal_2');
            $table->integer('cal_3');
            $table->integer('cal_4');

            $table->integer('cal_general');

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
        Schema::dropIfExists('oportunidads');
    }
}
