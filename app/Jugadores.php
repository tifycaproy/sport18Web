<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    protected $table = 'jugadores';
    protected $fillable = ['cedula','nombres','telefono','coreo','lugar_nacimiento','fecha_nacimiento','tipo','trayectoria','nivel_academico','talla_zapato','peso','altura','cedula_representante','nombre_representante','telefono_representante','facebook','instagram','twiter','img','publico','id_equipo','id_posicion','id_clasificacion'];
    protected $guarded = ['id'];


    public function scopeIndex($query){
    	return $query->join('posiciones', 'posiciones.id', 'jugadores.id_posicion')
    				->join('equipos', 'equipos.id', 'jugadores.id_equipo')
    				->join('clasificaciones', 'clasificaciones.id', 'jugadores.id_clasificacion')
    				->select('jugadores.*', 'posiciones.descripcion as posicion', 'equipos.descripcion as equipo', 'equipos.img as logo_equipo', 'clasificaciones.descripcion as clasificacion')
    				->where('jugadores.publico', 1);
    }
}
