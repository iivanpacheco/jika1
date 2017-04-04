<?php
/** @file : usuario.php
* @brief : Modelo para poder guardar datos en la base de dato haciendo referencia a la tabla usuarios
* @author : Ivan Pacheco
* @version : 1
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
	protected $table = 'usuario';
    protected $fillable=['nombre','apellido','identificacion','celular','genero','correo','fecha_nacimiento','fk_id_rol'];
    public $timestamps = false;
}
