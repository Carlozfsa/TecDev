<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');


            $table->integer('a');
            $table->integer('b');
            $table->integer('c');
            $table->integer('d');
            $table->integer('e');
            $table->integer('f');
            $table->integer('g');
            $table->integer('h');
            $table->integer('i');

            $table->string('retro_1');
            $table->integer('cal_1');

            $table->text('e2_p1');
            $table->text('e2_p2');
            $table->text('e2_p3');
            $table->text('e2_p4');
            $table->text('e2_p5');

            $table->string('retro_2');
            $table->integer('cal_2');

            $table->text('e3_1_1');
            $table->text('e3_1_2');
            $table->text('e3_1_3');
            $table->text('e3_2_1');
            $table->text('e3_2_2');
            $table->text('e3_3_1');
            $table->text('e3_3_2');
            $table->text('e3_4_1');
            $table->text('e3_4_2');
            $table->text('e3_5_1');
            $table->text('e3_5_2');

            $table->string('retro_3');
            $table->integer('cal_3');

            $table->string('o1');
            $table->string('o2');
            $table->string('o3');
            $table->string('o4');

            $table->string('retro_4');
            $table->integer('cal_4');

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
        Schema::dropIfExists('pensamientos');
    }
}
