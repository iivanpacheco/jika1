 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRegistro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro',function(Blueprint $table)
        {
            $table->increments('id_registro');
            $table->string('fecha');
            $table->string('hora_entrada');
            $table->string('hora_salida');
            $table->integer('fk_id_dispositivo');
            $table->integer('fk_id_usuario');
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
