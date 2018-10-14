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

            $table->text('lunes_h1');
            $table->text('lunes_h2');
            $table->text('lunes_h3');
            $table->text('lunes_h4');
            $table->text('lunes_h5');
            $table->text('lunes_h6');
            $table->text('lunes_h7');
            $table->text('lunes_h8');
            $table->text('lunes_h9');
            $table->text('lunes_h10');
            $table->text('lunes_h11');
            $table->text('lunes_h12');
            $table->text('lunes_h13');

            $table->text('martes_h1');
            $table->text('martes_h2');
            $table->text('martes_h3');
            $table->text('martes_h4');
            $table->text('martes_h5');
            $table->text('martes_h6');
            $table->text('martes_h7');
            $table->text('martes_h8');
            $table->text('martes_h9');
            $table->text('martes_h10');
            $table->text('martes_h11');
            $table->text('martes_h12');
            $table->text('martes_h13');

            $table->text('miercoles_h1');
            $table->text('miercoles_h2');
            $table->text('miercoles_h3');
            $table->text('miercoles_h4');
            $table->text('miercoles_h5');
            $table->text('miercoles_h6');
            $table->text('miercoles_h7');
            $table->text('miercoles_h8');
            $table->text('miercoles_h9');
            $table->text('miercoles_h10');
            $table->text('miercoles_h11');
            $table->text('miercoles_h12');
            $table->text('miercoles_h13');

            $table->text('jueves_h1');
            $table->text('jueves_h2');
            $table->text('jueves_h3');
            $table->text('jueves_h4');
            $table->text('jueves_h5');
            $table->text('jueves_h6');
            $table->text('jueves_h7');
            $table->text('jueves_h8');
            $table->text('jueves_h9');
            $table->text('jueves_h10');
            $table->text('jueves_h11');
            $table->text('jueves_h12');
            $table->text('jueves_h13');

            $table->text('viernes_h1');
            $table->text('viernes_h2');
            $table->text('viernes_h3');
            $table->text('viernes_h4');
            $table->text('viernes_h5');
            $table->text('viernes_h6');
            $table->text('viernes_h7');
            $table->text('viernes_h8');
            $table->text('viernes_h9');
            $table->text('viernes_h10');
            $table->text('viernes_h11');
            $table->text('viernes_h12');
            $table->text('viernes_h13');

            $table->text('sabado_h1');
            $table->text('sabado_h2');
            $table->text('sabado_h3');
            $table->text('sabado_h4');
            $table->text('sabado_h5');
            $table->text('sabado_h6');
            $table->text('sabado_h7');
            $table->text('sabado_h8');
            $table->text('sabado_h9');
            $table->text('sabado_h10');
            $table->text('sabado_h11');
            $table->text('sabado_h12');
            $table->text('sabado_h13');

            $table->text('domingo_h1');
            $table->text('domingo_h2');
            $table->text('domingo_h3');
            $table->text('domingo_h4');
            $table->text('domingo_h5');
            $table->text('domingo_h6');
            $table->text('domingo_h7');
            $table->text('domingo_h8');
            $table->text('domingo_h9');
            $table->text('domingo_h10');
            $table->text('domingo_h11');
            $table->text('domingo_h12');
            $table->text('domingo_h13');

            $table->text('sueno_1');
            $table->text('comida_1');
            $table->text('clase_1');
            $table->text('estudio_1');
            $table->text('rel_1');
            $table->text('soc_1');
            $table->text('dep_1');
            $table->text('per_1');

            $table->text('sueno_2');
            $table->text('comida_2');
            $table->text('clase_2');
            $table->text('estudio_2');
            $table->text('rel_2');
            $table->text('soc_2');
            $table->text('dep_2');
            $table->text('per_2');

            $table->text('sueno_3');
            $table->text('comida_3');
            $table->text('clase_3');
            $table->text('estudio_3');
            $table->text('rel_3');
            $table->text('soc_3');
            $table->text('dep_3');
            $table->text('per_3');

            $table->text('sueno_4');
            $table->text('comida_4');
            $table->text('clase_4');
            $table->text('estudio_4');
            $table->text('rel_4');
            $table->text('soc_4');
            $table->text('dep_4');
            $table->text('per_4');

            $table->text('sueno_5');
            $table->text('comida_5');
            $table->text('clase_5');
            $table->text('estudio_5');
            $table->text('rel_5');
            $table->text('soc_5');
            $table->text('dep_5');
            $table->text('per_5');

            $table->text('sueno_6');
            $table->text('comida_6');
            $table->text('clase_6');
            $table->text('estudio_6');
            $table->text('rel_6');
            $table->text('soc_6');
            $table->text('dep_6');
            $table->text('per_6');

            $table->text('sueno_7');
            $table->text('comida_7');
            $table->text('clase_7');
            $table->text('estudio_7');
            $table->text('rel_7');
            $table->text('soc_7');
            $table->text('dep_7');
            $table->text('per_7');


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
