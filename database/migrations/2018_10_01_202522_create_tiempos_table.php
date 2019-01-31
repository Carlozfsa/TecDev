<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiemposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');

            $table->text('lunes_h1')->nullable();
            $table->text('lunes_h2')->nullable();
            $table->text('lunes_h3')->nullable();
            $table->text('lunes_h4')->nullable();
            $table->text('lunes_h5')->nullable();
            $table->text('lunes_h6')->nullable();
            $table->text('lunes_h7')->nullable();
            $table->text('lunes_h8')->nullable();
            $table->text('lunes_h9')->nullable();
            $table->text('lunes_h10')->nullable();
            $table->text('lunes_h11')->nullable();
            $table->text('lunes_h12')->nullable();
            $table->text('lunes_h13')->nullable();

            $table->float('avance_lunes_1')->default(0.0);

            $table->text('martes_h1')->nullable();
            $table->text('martes_h2')->nullable();
            $table->text('martes_h3')->nullable();
            $table->text('martes_h4')->nullable();
            $table->text('martes_h5')->nullable();
            $table->text('martes_h6')->nullable();
            $table->text('martes_h7')->nullable();
            $table->text('martes_h8')->nullable();
            $table->text('martes_h9')->nullable();
            $table->text('martes_h10')->nullable();
            $table->text('martes_h11')->nullable();
            $table->text('martes_h12')->nullable();
            $table->text('martes_h13')->nullable();

            $table->float('avance_martes_1')->default(0.0);

            $table->text('miercoles_h1')->nullable();
            $table->text('miercoles_h2')->nullable();
            $table->text('miercoles_h3')->nullable();
            $table->text('miercoles_h4')->nullable();
            $table->text('miercoles_h5')->nullable();
            $table->text('miercoles_h6')->nullable();
            $table->text('miercoles_h7')->nullable();
            $table->text('miercoles_h8')->nullable();
            $table->text('miercoles_h9')->nullable();
            $table->text('miercoles_h10')->nullable();
            $table->text('miercoles_h11')->nullable();
            $table->text('miercoles_h12')->nullable();
            $table->text('miercoles_h13')->nullable();

            $table->float('avance_miercoles_1')->default(0.0);

            $table->text('jueves_h1')->nullable();
            $table->text('jueves_h2')->nullable();
            $table->text('jueves_h3')->nullable();
            $table->text('jueves_h4')->nullable();
            $table->text('jueves_h5')->nullable();
            $table->text('jueves_h6')->nullable();
            $table->text('jueves_h7')->nullable();
            $table->text('jueves_h8')->nullable();
            $table->text('jueves_h9')->nullable();
            $table->text('jueves_h10')->nullable();
            $table->text('jueves_h11')->nullable();
            $table->text('jueves_h12')->nullable();
            $table->text('jueves_h13')->nullable();

            $table->float('avance_jueves_1')->default(0.0);


            $table->text('viernes_h1')->nullable();
            $table->text('viernes_h2')->nullable();
            $table->text('viernes_h3')->nullable();
            $table->text('viernes_h4')->nullable();
            $table->text('viernes_h5')->nullable();
            $table->text('viernes_h6')->nullable();
            $table->text('viernes_h7')->nullable();
            $table->text('viernes_h8')->nullable();
            $table->text('viernes_h9')->nullable();
            $table->text('viernes_h10')->nullable();
            $table->text('viernes_h11')->nullable();
            $table->text('viernes_h12')->nullable();
            $table->text('viernes_h13')->nullable();

            $table->float('avance_viernes_1')->default(0.0);

            $table->text('sabado_h1')->nullable();
            $table->text('sabado_h2')->nullable();
            $table->text('sabado_h3')->nullable();
            $table->text('sabado_h4')->nullable();
            $table->text('sabado_h5')->nullable();
            $table->text('sabado_h6')->nullable();
            $table->text('sabado_h7')->nullable();
            $table->text('sabado_h8')->nullable();
            $table->text('sabado_h9')->nullable();
            $table->text('sabado_h10')->nullable();
            $table->text('sabado_h11')->nullable();
            $table->text('sabado_h12')->nullable();
            $table->text('sabado_h13')->nullable();

            $table->float('avance_sabado_1')->default(0.0);


            $table->text('domingo_h1')->nullable();
            $table->text('domingo_h2')->nullable();
            $table->text('domingo_h3')->nullable();
            $table->text('domingo_h4')->nullable();
            $table->text('domingo_h5')->nullable();
            $table->text('domingo_h6')->nullable();
            $table->text('domingo_h7')->nullable();
            $table->text('domingo_h8')->nullable();
            $table->text('domingo_h9')->nullable();
            $table->text('domingo_h10')->nullable();
            $table->text('domingo_h11')->nullable();
            $table->text('domingo_h12')->nullable();
            $table->text('domingo_h13')->nullable();

            $table->float('avance_domingo_1')->default(0.0);


            $table->text('retro_1')->nullable();
            $table->text('retro_2')->nullable();
            $table->text('retro_3')->nullable();
            $table->text('retro_4')->nullable();
            $table->text('retro_5')->nullable();
            $table->text('retro_6')->nullable();
            $table->text('retro_7')->nullable();

            $table->integer('cal_1')->default(0);
            $table->integer('cal_2')->default(0);
            $table->integer('cal_3')->default(0);
            $table->integer('cal_4')->default(0);
            $table->integer('cal_5')->default(0);
            $table->integer('cal_6')->default(0);
            $table->integer('cal_7')->default(0);

            $table->text('sueno_1')->nullable();
            $table->text('comida_1')->nullable();
            $table->text('clase_1')->nullable();
            $table->text('estudio_1')->nullable();
            $table->text('rel_1')->nullable();
            $table->text('soc_1')->nullable();
            $table->text('dep_1')->nullable();
            $table->text('per_1')->nullable();

            $table->float('avance_lunes_2')->default(0.0);

            $table->text('sueno_2')->nullable();
            $table->text('comida_2')->nullable();
            $table->text('clase_2')->nullable();
            $table->text('estudio_2')->nullable();
            $table->text('rel_2')->nullable();
            $table->text('soc_2')->nullable();
            $table->text('dep_2')->nullable();
            $table->text('per_2')->nullable();

            $table->float('avance_martes_2')->default(0.0);

            $table->text('sueno_3')->nullable();
            $table->text('comida_3')->nullable();
            $table->text('clase_3')->nullable();
            $table->text('estudio_3')->nullable();
            $table->text('rel_3')->nullable();
            $table->text('soc_3')->nullable();
            $table->text('dep_3')->nullable();
            $table->text('per_3')->nullable();

            $table->float('avance_miercoles_2')->default(0.0);

            $table->text('sueno_4')->nullable();
            $table->text('comida_4')->nullable();
            $table->text('clase_4')->nullable();
            $table->text('estudio_4')->nullable();
            $table->text('rel_4')->nullable();
            $table->text('soc_4')->nullable();
            $table->text('dep_4')->nullable();
            $table->text('per_4')->nullable();

            $table->float('avance_jueves_2')->default(0.0);

            $table->text('sueno_5')->nullable();
            $table->text('comida_5')->nullable();
            $table->text('clase_5')->nullable();
            $table->text('estudio_5')->nullable();
            $table->text('rel_5')->nullable();
            $table->text('soc_5')->nullable();
            $table->text('dep_5')->nullable();
            $table->text('per_5')->nullable();

            $table->float('avance_viernes_2')->default(0.0);

            $table->text('sueno_6')->nullable();
            $table->text('comida_6')->nullable();
            $table->text('clase_6')->nullable();
            $table->text('estudio_6')->nullable();
            $table->text('rel_6')->nullable();
            $table->text('soc_6')->nullable();
            $table->text('dep_6')->nullable();
            $table->text('per_6')->nullable();

            $table->float('avance_sabado_2')->default(0.0);


            $table->text('sueno_7')->nullable();
            $table->text('comida_7')->nullable();
            $table->text('clase_7')->nullable();
            $table->text('estudio_7')->nullable();
            $table->text('rel_7')->nullable();
            $table->text('soc_7')->nullable();
            $table->text('dep_7')->nullable();
            $table->text('per_7')->nullable();

            $table->float('avance_domingo_2')->default(0.0);


            $table->text('retro_8')->nullable();
            $table->text('retro_9')->nullable();
            $table->text('retro_10')->nullable();
            $table->text('retro_11')->nullable();
            $table->text('retro_12')->nullable();
            $table->text('retro_13')->nullable();
            $table->text('retro_14')->nullable();

            $table->integer('cal_8')->default(0);
            $table->integer('cal_9')->default(0);
            $table->integer('cal_10')->default(0);
            $table->integer('cal_11')->default(0);
            $table->integer('cal_12')->default(0);
            $table->integer('cal_13')->default(0);
            $table->integer('cal_14')->default(0);

            $table->integer('cal_general')->default(0);


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
        Schema::dropIfExists('tiempos');
    }
}
