<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = 'equipos';
    protected $fillable = ['descripcion','img'];
    protected $guarded = ['id'];
}
