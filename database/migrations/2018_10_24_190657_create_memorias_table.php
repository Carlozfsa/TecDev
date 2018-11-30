<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->string('ve');
            $table->string('vi');
            $table->string('c');

            $table->string('retro_1');
            $table->integer('cal_1');



            $table->text('c1');
            $table->text('con1');

            $table->string('retro_2');
            $table->integer('cal_2');

            $table->text('c2');
            $table->text('con2');

            $table->string('retro_3');
            $table->integer('cal_3');

            $table->text('esc');

            $table->string('retro_4');
            $table->integer('cal_4');

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
        Schema::dropIfExists('memorias');
    }
}
