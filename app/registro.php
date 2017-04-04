<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected $table = 'registro';
    protected $fillable=['fecha', 'hora_entrada', 'hora_salida'];
    public $timestamps = false;
}
