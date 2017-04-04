<?php
/** @file : tipo_dispositivo.php
* @brief : Modelo para poder guardar datos en la base de dato haciendo referencia a la tabla tipo_dispositivo
* @author : Ivan Pacheco
* @version : 1
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_dispositivo extends Model
{
     protected $table = 'tipo_dispositivo';
    protected $fillable=['tipo_dispositivo'];
    public $timestamps = false;
}
