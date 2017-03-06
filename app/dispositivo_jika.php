<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dispositivo_jika extends Model
{
    protected $fillable=['serial','descripcion','codigo_barra','fk_id_tipo_dispositivo','fk_id_marca'];
}
