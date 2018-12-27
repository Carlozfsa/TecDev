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
            $table->integer('carrera')->default(0);
            $table->integer('sem')->default(0);
            $table->integer('telcasa')->default(0);
            $table->integer('cel')->default(0);
            $table->string('dir')->default('');
            $table->integer('nss')->default(0);
            $table->integer('ts')->default(0);
            $table->integer('ec')->default(0);
            $table->integer('trabajo')->default(0);
            $table->integer('horas')->default(0);
            $table->integer('reg_completo')->default(0);

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
