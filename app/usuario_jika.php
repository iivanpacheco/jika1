<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_jika extends Model
{
    protected $fillable=['nombre','apellido','celular','genero','correo','fecha_nacimiento','fk_id_rol'];
}
