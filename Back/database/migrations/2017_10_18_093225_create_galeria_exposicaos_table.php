<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaExposicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_exposicaos', function (Blueprint $table) {
            $table->increments('id');
//            >unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->integer('exposicao_id')->unsigned();
            $table->foreign('exposicao_id')->references('id')->on('exposicaos');
            $table->string('nome');
            $table->string('imagem');
            $table->string('descricao');
            $table->string('estado');
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
        Schema::dropIfExists('galeria_exposicaos');
    }
}
