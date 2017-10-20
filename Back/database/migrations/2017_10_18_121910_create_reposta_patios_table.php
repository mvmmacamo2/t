<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepostaPatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposta_patios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('apatio_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('NO ACTION');
            $table->foreign('apatio_id')->references('id')->on('apatios')->onDelete('NO ACTION');
            $table->string('estado');
            $table->string('descricao');
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
        Schema::dropIfExists('reposta_patios');
    }
}
