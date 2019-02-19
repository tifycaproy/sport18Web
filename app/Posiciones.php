<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posiciones extends Model
{
    protected $table = 'posiciones';
    protected $fillable = ['descripcion'];
    protected $guarded = ['id'];
}
