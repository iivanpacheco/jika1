<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTipoDispositivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_dispositivo',function(Blueprint $table)
        {
            $table->increments('id_tipo_dispositivo');
            $table->string('descripcion');
            $table->string('tipo_dispositivo');
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
