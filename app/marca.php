<?php
/** @file : marca.php
* @brief : Modelo para poder guardar datos en la base de dato haciendo referencia a la tabla marca
* @author : Ivan Pacheco
* @version : 1
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $table = 'marca';
    protected $fillable=['marca'];
    public $timestamps = false;
}
