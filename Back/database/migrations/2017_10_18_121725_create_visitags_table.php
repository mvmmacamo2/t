<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitags', function (Blueprint $table) {
//            ->unsigned();
//            $table->integer('escola_id')->unsigned();
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('escola_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('NO ACTION');
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('NO ACTION');

            $table->date('data');
            $table->string('hora');
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
        Schema::dropIfExists('visitags');
    }
}
