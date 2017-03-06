<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDispositivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo',function(Blueprint $table)
        {
            $table->increments('id_dispositivo');
            $table->string('serial');
            $table->string('descripcion');
            $table->string('codigo_barra');
            $table->integer('fk_id_dispositivo');
            $table->integer ('fk_id_marca')
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
