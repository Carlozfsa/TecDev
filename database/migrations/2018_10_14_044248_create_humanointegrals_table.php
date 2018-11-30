<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumanointegralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanointegrals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numero_control');
            $table->text('pres_per');
            $table->text('salud');
            $table->text('simpatia');

            $table->text('retro');
            $table->integer('cal_final');

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
        Schema::dropIfExists('humanointegrals');
    }
}
