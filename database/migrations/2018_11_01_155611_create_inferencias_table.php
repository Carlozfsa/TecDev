<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inferencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');

            $table->integer('o1');
            $table->integer('o2');
            $table->integer('o3');
            $table->integer('o4');
            $table->integer('o5');
            $table->integer('o6');
            $table->integer('o7');
            $table->integer('o8');
            $table->integer('o9');
            $table->integer('o10');
            $table->integer('o11');
            $table->integer('o12');

            $table->text('retro_1');
            $table->integer('cal_1');

            $table->text('t1');
            $table->text('t2');
            $table->text('t3');
            $table->text('t4');
            $table->text('t5');
            $table->text('t6');
            $table->text('t7');

            $table->text('retro_2');
            $table->integer('cal_2');

            $table->integer('cal_final');

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
        Schema::dropIfExists('inferencias');
    }
}
