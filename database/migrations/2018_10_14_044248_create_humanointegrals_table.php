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
            $table->text('pres_per')->nullable();
            $table->text('salud')->nullable();
            $table->text('simpatia')->nullable();

            $table->text('retro')->nullable();
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
        Schema::dropIfExists('humanointegrals');
    }
}
