<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteligenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inteligencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');

            $table->integer('t_ling')->default(0);
            $table->integer('t_mat')->default(0);
            $table->integer('t_esp')->default(0);
            $table->integer('t_cin')->default(0);
            $table->integer('t_mus')->default(0);
            $table->integer('t_inter')->default(0);
            $table->integer('t_intra')->default(0);

            $table->string('retro_1')->default('');
            $table->integer('cal_1')->default(0);


            $table->integer('num_1')->default(0);
            $table->float('num_2')->default(0);
            $table->integer('num_3')->default(0);

            $table->string('retro_2')->default('');
            $table->integer('cal_2')->default(0);


            $table->string('log_1')->default('');

            $table->string('retro_3')->default('');
            $table->integer('cal_3')->default(0);


            $table->string('prob_1')->default('');

            $table->string('retro_4')->default('');
            $table->integer('cal_4')->default(0);

            $table->integer('cal_general')->default(0);
            $table->string('intel')->default('');


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
        Schema::dropIfExists('inteligencias');
    }
}
