<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->string('nombres')->default('');
            $table->string('apellidop')->default('');
            $table->string('apellidom')->default('');
            $table->integer('carr')->default(0);

            $table->integer('tut_nivel')->default(0);
            $table->integer('grupo_l')->default(0);
            $table->integer('turn')->default(0);
            $table->string('grupo')->default('');


            $table->integer('sem')->default(0);
            $table->string('telcasa')->default('');
            $table->string('cel')->default('');
            $table->string('dir')->default('');
            $table->string('nss')->default('');
            $table->integer('ts')->default(0);
            $table->integer('ec')->default(0);
            $table->integer('trabajo')->default(0);
            $table->integer('horas')->default(0);
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
        Schema::dropIfExists('alumnos');
    }
}
