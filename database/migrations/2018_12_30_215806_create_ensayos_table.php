<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnsayosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensayos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numero_control')->default(0);

            $table->text('ens')->nullable();
            $table->string('retro_1')->default('');
            $table->integer('cal_1')->default(0);

            $table->integer('entregado')->default(0);

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
        Schema::dropIfExists('ensayos');
    }
}
