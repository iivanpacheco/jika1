<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
     protected $table = 'rol';
    protected $fillable=['rol', 'descripcion'];
    public $timestamps = false;
}
