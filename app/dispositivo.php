<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dispositivo extends Model
{
	protected $table = 'dispositivo';
    protected $fillable=['serial','descripcion','codigo_barra','fk_id_tipo_dispositivo','fk_id_marca'];
    public $timestamps = false;
}
