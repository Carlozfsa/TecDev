<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrollohumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrollohumanos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');


            $table->text('e1_difs');

            $table->text('e2_a1');
            $table->text('e2_a2');
            $table->text('e2_a3');
            $table->text('e2_a4');

            $table->text('e3_a1_1');
            $table->text('e3_a1_2');
            $table->text('e3_a2_1');
            $table->text('e3_a2_2');

            $table->text('e4_a1_1');
            $table->text('e4_a1_2');
            $table->text('e4_a2_1');
            $table->text('e4_a2_2');
            $table->text('e4_a3_1');
            $table->text('e4_a3_2');
            $table->text('e4_a4_1');
            $table->text('e4_a4_2');
            $table->text('e4_a5_1');
            $table->text('e4_a5_2');

            $table->text('e5_a1');

            $table->text('e6_a1');

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
        Schema::dropIfExists('desarrollohumanos');
    }
}
