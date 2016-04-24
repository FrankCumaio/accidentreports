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
<<<<<<< HEAD
=======
            $table->string('categoria');
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
            $table->string('foto');
            $table->string('mensagem');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
<<<<<<< HEAD
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('idCategoria')->on('categorias');
=======
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
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
