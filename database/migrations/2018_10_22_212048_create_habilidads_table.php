<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_control');
            $table->text('h1');
            $table->text('h2');
            $table->text('h3');
            $table->text('h4');
            $table->text('h5');
            $table->text('h6');
            $table->text('h7');
            $table->text('h8');
            $table->text('h9');
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
        Schema::dropIfExists('habilidads');
    }
}
