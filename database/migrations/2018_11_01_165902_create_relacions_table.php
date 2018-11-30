<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numero_control');
            $table->text('e1_1');
            $table->text('e1_2');
            $table->text('e1_3');
            $table->text('e1_4');
            $table->text('e1_5');
            $table->text('e1_6');
            $table->text('e1_7');
            $table->text('e1_8');

            $table->text('retro_1');
            $table->integer('cal_1');

            $table->text('e2_1');
            $table->text('e2_2');
            $table->text('e2_3');
            $table->text('e2_4');
            $table->text('e2_5');
            $table->text('e2_6');
            $table->text('e2_7');

            $table->text('retro_2');
            $table->integer('cal_2');

            $table->text('e3_1');

            $table->text('retro_3');
            $table->integer('cal_3');

            $table->text('e4_1');
            $table->text('e4_2');
            $table->text('e4_3');

            $table->text('retro_4');
            $table->integer('cal_4');

            $table->text('e5_1');

            $table->text('retro_5');
            $table->integer('cal_5');

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
        Schema::dropIfExists('relacions');
    }
}
