<?php
/** @file : dispositivo.php
* @brief : Modelo para poder guardar datos en la base de dato haciendo referencia a la tabla dispositivos
* @author : Ivan Pacheco
* @version : 1
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class dispositivo extends Model
{
	protected $table = 'dispositivo';
    protected $fillable=['serial','descripcion','codigo_barra','color','modelo','fk_id_tipo_dispositivo','fk_id_marca'];
    public $timestamps = false;
}
