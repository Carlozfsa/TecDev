<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numero_control');
            $table->string('edad')->default('');
            $table->string('evento')->default('');
            $table->string('nivel')->default('');

            $table->string('data')->default('');

            $table->integer('avance_1')->default(0);
            $table->text('retro_1')->nullable();
            $table->integer('cal_1')->default(0);

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
        Schema::dropIfExists('lineas');
    }
}
