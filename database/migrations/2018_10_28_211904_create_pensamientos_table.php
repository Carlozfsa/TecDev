<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');

            $table->integer('a')->default(0);
            $table->integer('b')->default(0);
            $table->integer('c')->default(0);
            $table->integer('d')->default(0);
            $table->integer('e')->default(0);
            $table->integer('f')->default(0);
            $table->integer('g')->default(0);
            $table->integer('h')->default(0);
            $table->integer('i')->default(0);

            $table->integer('avance_1')->default(0);
            $table->string('retro_1')->default('');
            $table->integer('cal_1')->default(0);

            $table->text('e2_p1')->nullable();
            $table->text('e2_p2')->nullable();
            $table->text('e2_p3')->nullable();
            $table->text('e2_p4')->nullable();
            $table->text('e2_p5')->nullable();

            $table->integer('avance_2')->default(0);;
            $table->string('retro_2')->default('');
            $table->integer('cal_2')->default(0);;

            $table->text('e3_1_1')->nullable();
            $table->text('e3_1_2')->nullable();
            $table->text('e3_1_3')->nullable();
            $table->text('e3_2_1')->nullable();
            $table->text('e3_2_2')->nullable();
            $table->text('e3_3_1')->nullable();
            $table->text('e3_3_2')->nullable();
            $table->text('e3_4_1')->nullable();
            $table->text('e3_4_2')->nullable();
            $table->text('e3_5_1')->nullable();
            $table->text('e3_5_2')->nullable();

            $table->integer('avance_3')->default(0);
            $table->string('retro_3')->default('');
            $table->integer('cal_3')->default(0);

            $table->string('o1')->default('');
            $table->string('o2')->default('');
            $table->string('o3')->default('');
            $table->string('o4')->default('');

            $table->integer('avance_4')->default(0);
            $table->string('retro_4')->default('');
            $table->integer('cal_4')->default(0);

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
        Schema::dropIfExists('pensamientos');
    }
}
