<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    protected $table = 'clasificaciones';
    protected $fillable = ['descripcion'];
    protected $guarded = ['id'];
}
