<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncuentrosEquipos extends Model
{
    protected $table = 'encuentros_equipos';
    protected $fillable = ['equipo_id_1','equipo_id_2','fecha_encuentro','goles_1','goles_2','publico'];
    protected $guarded = ['id'];
}
