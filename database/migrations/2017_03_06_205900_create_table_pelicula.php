<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelicula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas',function(Blueprint$table)
        {
            $table->increments('id');
            $table->string('titulo');
            $table->string('genero');
            $table->string('protagonista');
            $table->string('idioma');
            $table->string('duracion');
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
