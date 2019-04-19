<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    protected $table = 'estadisticas';
    protected $fillable = ['id_jugador','pjugados','pganados','pperdidos','pempatados','goles','t_a','p_j','a_p','mj','v_a','amarilla','roja','titular','suplente','convocatoria'];
    protected $guarded = ['id'];
}
