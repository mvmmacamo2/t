<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apatios', function (Blueprint $table) {
            $table->increments('id');
//            ->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->integer('entidade_servico_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('NO ACTION');
            $table->foreign('entidade_servico_id')->references('id')->on('entidade_servicos')->onDelete('NO ACTION');
            $table->string('descricao');
            $table->date('data');
            $table->string('hora');
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
        Schema::dropIfExists('apatios');
    }
}
