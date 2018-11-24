<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcessoCria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('datacriacao');
            $table->string('valorcobrado');
            $table->integer('idtipoprocesso')->unsigned();
            $table->foreign("idtipoprocesso")->references('id')->on('tipoprocesso')->onDelete('cascade');
            $table->integer('idcliente')->unsigned();
            $table->foreign("idcliente")->references('id')->on('cliente')->onDelete('cascade');
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
        Schema::dropIfExists('processo');
    }
}
