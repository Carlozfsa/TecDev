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

            $table->integer('o1')->default(0);
            $table->integer('o2')->default(0);
            $table->integer('o3')->default(0);
            $table->integer('o4')->default(0);
            $table->integer('o5')->default(0);
            $table->integer('o6')->default(0);
            $table->integer('o7')->default(0);
            $table->integer('o8')->default(0);
            $table->integer('o9')->default(0);
            $table->integer('o10')->default(0);
            $table->integer('o11')->default(0);
            $table->integer('o12')->default(0);

            $table->integer('avance_1')->default(0);
            $table->text('retro_1')->nullable();
            $table->integer('cal_1')->default(0);

            $table->text('t1')->nullable();
            $table->text('t2')->nullable();
            $table->text('t3')->nullable();
            $table->text('t4')->nullable();
            $table->text('t5')->nullable();
            $table->text('t6')->nullable();
            $table->text('t7')->nullable();

            $table->integer('avance_2')->default(0);
            $table->text('retro_2')->nullable();
            $table->integer('cal_2')->default(0);

            $table->integer('cal_final')->default(0);

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
