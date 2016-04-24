<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacao', function (Blueprint $table) {
            $table->increments('idPublicacao');
            $table->string('local');
            $table->string('foto');
            $table->string('mensagem');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('idCategoria')->on('categorias');
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
        //
    }
}
