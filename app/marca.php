<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $table = 'marca';
    protected $fillable=['marca', 'descripcion'];
    public $timestamps = false;
}
