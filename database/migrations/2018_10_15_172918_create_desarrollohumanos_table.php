<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrollohumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrollohumanos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');


            $table->text('e1_difs')->nullable();
            $table->text('e2_difs')->nullable();
            $table->integer('avance_1')->default(0);


            $table->text('retro_1')->nullable();
            $table->integer('cal_1')->default(0);;


            $table->text('e2_a1')->nullable();
            $table->text('e2_a2')->nullable();
            $table->text('e2_a3')->nullable();
            $table->text('e2_a4')->nullable();
            $table->integer('avance_2')->default(0);;

            $table->text('retro_2')->nullable();
            $table->integer('cal_2')->default(0);;


            $table->text('e3_a1_1')->nullable();
            $table->text('e3_a1_2')->nullable();
            $table->text('e3_a2_1')->nullable();
            $table->text('e3_a2_2')->nullable();
            $table->integer('avance_3')->default(0);;


            $table->text('retro_3')->nullable();
            $table->integer('cal_3')->default(0);;


            $table->text('e4_a1_1')->nullable();
            $table->text('e4_a1_2')->nullable();
            $table->text('e4_a2_1')->nullable();
            $table->text('e4_a2_2')->nullable();
            $table->text('e4_a3_1')->nullable();
            $table->text('e4_a3_2')->nullable();
            $table->text('e4_a4_1')->nullable();
            $table->text('e4_a4_2')->nullable();
            $table->text('e4_a5_1')->nullable();
            $table->text('e4_a5_2')->nullable();
            $table->integer('avance_4')->default(0);;


            $table->text('retro_4')->nullable();
            $table->integer('cal_4')->default(0);


            $table->text('e5_a1')->nullable();
            $table->integer('avance_5')->default(0);


            $table->text('retro_5')->nullable();
            $table->integer('cal_5')->default(0);


            $table->text('e6_a1')->nullable();
            $table->integer('avance_6')->default(0);


            $table->text('retro_6')->nullable();
            $table->integer('cal_6')->default(0);

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
        Schema::dropIfExists('desarrollohumanos');
    }
}
