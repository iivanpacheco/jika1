<?php
/** @file : registro.php
* @brief : Modelo para poder guardar datos en la base de dato haciendo referencia a la tabla registro
* @author : Ivan Pacheco
* @version : 1
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected $table = 'registro';
    protected $fillable=['fecha', 'hora_entrada', 'hora_salida'];
    public $timestamps = false;
}
