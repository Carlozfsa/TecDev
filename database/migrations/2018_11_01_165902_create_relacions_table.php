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
            $table->text('e1_1')->nullable();
            $table->text('e1_2')->nullable();
            $table->text('e1_3')->nullable();
            $table->text('e1_4')->nullable();
            $table->text('e1_5')->nullable();
            $table->text('e1_6')->nullable();
            $table->text('e1_7')->nullable();
            $table->text('e1_8')->nullable();

            $table->integer('avance_1')->default(0);
            $table->text('retro_1')->nullable();
            $table->integer('cal_1')->default(0);

            $table->text('e2_1')->nullable();
            $table->text('e2_2')->nullable();
            $table->text('e2_3')->nullable();
            $table->text('e2_4')->nullable();
            $table->text('e2_5')->nullable();
            $table->text('e2_6')->nullable();
            $table->text('e2_7')->nullable();

            $table->integer('avance_2')->default(0);
            $table->text('retro_2')->nullable();
            $table->integer('cal_2')->default(0);

            $table->text('e3_1')->nullable();

            $table->integer('avance_3')->default(0);
            $table->text('retro_3')->nullable();
            $table->integer('cal_3')->default(0);

            $table->text('e4_1')->nullable();
            $table->text('e4_2')->nullable();
            $table->text('e4_3')->nullable();

            $table->integer('avance_4')->default(0);
            $table->text('retro_4')->nullable();
            $table->integer('cal_4')->default(0);

            $table->text('e5_1')->nullable();

            $table->integer('avance_5')->default(0);
            $table->text('retro_5')->nullable();
            $table->integer('cal_5')->default(0);

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
        Schema::dropIfExists('relacions');
    }
}
