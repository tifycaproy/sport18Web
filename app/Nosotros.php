<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $table = 'nosotros';
    protected $fillable = ['nombres', 'cargo', 'publico', 'url_imagen'];
    protected $guarded = ['id'];
}
