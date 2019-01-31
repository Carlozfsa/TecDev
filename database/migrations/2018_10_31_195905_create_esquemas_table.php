<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsquemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esquemas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numero_control');

            $table->string('ruta_1')->default('');

            $table->integer('avance_1')->default(0);
            $table->string('retro_1')->default('');
            $table->integer('cal_1')->default(0);


            $table->string('ruta_2')->default('');

            $table->integer('avance_2')->default(0);
            $table->string('retro_2')->default('');
            $table->integer('cal_2')->default(0);

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
        Schema::dropIfExists('esquemas');
    }
}
