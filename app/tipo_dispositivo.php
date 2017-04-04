<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_dispositivo extends Model
{
     protected $table = 'tipo_dispositivo';
    protected $fillable=['tipo_dispositivo', 'descripcion'];
    public $timestamps = false;
}
