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

            $table->integer('p1')->default(0);
            $table->integer('p2')->default(0);
            $table->integer('p3')->default(0);
            $table->integer('p4')->default(0);
            $table->integer('p5')->default(0);
            $table->integer('p6')->default(0);
            $table->integer('p7')->default(0);
            $table->integer('p8')->default(0);
            $table->integer('p9')->default(0);
            $table->integer('p10')->default(0);

            $table->integer('avance_1')->default(0);
            $table->text('retro_1')->nullable();
            $table->integer('cal_1')->default(0);

            $table->integer('a')->default(0);
            $table->integer('b')->default(0);
            $table->integer('c')->default(0);

            $table->text('t1')->nullable();
            $table->text('t2')->nullable();
            $table->text('t3')->nullable();
            $table->text('t4')->nullable();
            $table->text('t5')->nullable();
            $table->text('t6')->nullable();

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
        Schema::dropIfExists('mats');
    }
}
