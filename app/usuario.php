<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
	protected $table = 'usuario';
    protected $fillable=['nombre','apellido','celular','genero','correo','fecha_nacimiento','fk_id_rol'];
    public $timestamps = false;
}
