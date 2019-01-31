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

            $table->string('ar_1')->default('');
            $table->string('ar_2')->default('');
            $table->string('ar_3')->default('');
            $table->string('ar_4')->default('');
            $table->string('ar_5')->default('');
            $table->string('ar_6')->default('');
            $table->string('ar_7')->default('');


            $table->integer('t_ling')->nullable();
            $table->integer('t_mat')->nullable();
            $table->integer('t_esp')->nullable();
            $table->integer('t_cin')->nullable();
            $table->integer('t_mus')->nullable();
            $table->integer('t_inter')->nullable();
            $table->integer('t_intra')->nullable();

            $table->integer('avance_1')->default(0);
            $table->string('retro_1')->default('');
            $table->integer('cal_1')->nullable();


            $table->integer('num_1')->nullable();
            $table->float('num_2')->nullable();
            $table->integer('num_3')->nullable();

            $table->integer('avance_2')->default(0);
            $table->string('retro_2')->default('');
            $table->integer('cal_2')->nullable();


            $table->string('log_1')->default('');

            $table->integer('avance_3')->default(0);
            $table->string('retro_3')->default('');
            $table->integer('cal_3')->default(0);


            $table->string('prob_1')->default('');

            $table->integer('avance_4')->default(0);
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
