<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcategoria');
             $table->foreign('idcategoria')->references('id')->on('categoria');
            $table->integer('idtienda');
            $table->foreign('idtienda')->references('id')->on('tienda');
            $table->integer('codigo');
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('obsv');
            $table->string('serial');
            $table->decimal('precio');
            $table->decimal('precioweb');
            $table->string('vitrina');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articulo');
    }
}
