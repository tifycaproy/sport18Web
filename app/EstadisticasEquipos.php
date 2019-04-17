<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadisticasEquipos extends Model
{
    protected $table = 'estadisticas_equipos';
    protected $fillable = ['equipo_id','p_jugado','p_ganado','p_empatado','p_perdido','g_favor','g_contra','apertura_cierre','fecha_ano'];
    protected $guarded = ['id'];
}
