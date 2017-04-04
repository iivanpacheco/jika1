<?php
/** @file : rol.php
* @brief : Modelo para poder guardar datos en la base de dato haciendo referencia a la tabla rol
* @author : Ivan Pacheco
* @version : 1
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
     protected $table = 'rol';
    protected $fillable=['rol'];
    public $timestamps = false;
}
