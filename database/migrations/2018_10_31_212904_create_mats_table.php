<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->integer('p1');
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->integer('p5');
            $table->integer('p6');
            $table->integer('p7');
            $table->integer('p8');
            $table->integer('p9');
            $table->integer('p10');

            $table->text('retro_1');
            $table->integer('cal_1');

            $table->integer('a');
            $table->integer('b');
            $table->integer('c');

            $table->text('t1');
            $table->text('t2');
            $table->text('t3');
            $table->text('t4');
            $table->text('t5');
            $table->text('t6');

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
        Schema::dropIfExists('mats');
    }
}
