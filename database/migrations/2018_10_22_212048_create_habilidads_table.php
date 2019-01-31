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
            $table->text('h1')->nullable();
            $table->text('h2')->nullable();
            $table->text('h3')->nullable();
            $table->text('h4')->nullable();
            $table->text('h5')->nullable();
            $table->text('h6')->nullable();
            $table->text('h7')->nullable();
            $table->text('h8')->nullable();
            $table->text('h9')->nullable();

            $table->text('retro')->nullable();
            $table->integer('cal_final')->dafault(0);


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
