<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debilidads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numero_control')->default(0);

            $table->string('debilidads_1')->default('');
            $table->string('debilidads_2')->default('');
            $table->string('debilidads_3')->default('');
            $table->string('debilidads_4')->default('');

            $table->string('retro_1')->default('');
            $table->string('retro_2')->default('');
            $table->string('retro_3')->default('');
            $table->string('retro_4')->default('');

            $table->integer('cal_1')->default(0);
            $table->integer('cal_2')->default(0);
            $table->integer('cal_3')->default(0);
            $table->integer('cal_4')->default(0);

            $table->integer('entregado')->default(0);

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
        Schema::dropIfExists('debilidads');
    }
}
