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

            $table->integer('r_1')->default(0);
            $table->integer('r_2')->default(0);
            $table->integer('r_3')->default(0);
            $table->integer('r_4')->default(0);
            $table->integer('r_5')->default(0);
            $table->integer('r_6')->default(0);
            $table->integer('r_7')->default(0);
            $table->integer('r_8')->default(0);
            $table->integer('r_9')->default(0);
            $table->integer('r_10')->default(0);
            $table->integer('r_11')->default(0);
            $table->integer('r_12')->default(0);
            $table->integer('r_13')->default(0);
            $table->integer('r_14')->default(0);
            $table->integer('r_15')->default(0);
            $table->integer('r_16')->default(0);
            $table->integer('r_17')->default(0);
            $table->integer('r_18')->default(0);


            $table->string('ve')->default('');
            $table->string('vi')->default('');
            $table->string('c')->default('');

            $table->string('retro_1')->default('');
            $table->integer('cal_1')->default(0);



            $table->text('c1')->nullable();
            $table->text('con1')->nullable();

            $table->integer('avance_2')->default(0);
            $table->string('retro_2')->default('');
            $table->integer('cal_2')->default(0);

            $table->text('c2')->nullable();
            $table->text('con2')->nullable();

            $table->integer('avance_3')->default(0);
            $table->string('retro_3')->default('');
            $table->integer('cal_3')->default(0);

            $table->text('esc')->nullable();

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
        Schema::dropIfExists('memorias');
    }
}
