<?php

namespace App\Http\Controllers\Backend;

use App\EstadisticasEquipos;
use App\Equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EstadisticasEquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ult_estadistica=EstadisticasEquipos::orderBy('fecha_ano','desc')
                        ->first();

        $estadisticas=EstadisticasEquipos::select(DB::raw('estadisticas_equipos.id, equipo_id, equipos.img, descripcion, p_jugado, p_ganado, p_empatado, p_perdido, g_favor, g_contra, (p_ganado*3)+p_empatado as puntos, g_favor-g_contra as d_goles, estadisticas_equipos.updated_at'))
                            ->join('equipos', 'estadisticas_equipos.equipo_id','=','equipos.id')
                            ->where('fecha_ano',$ult_estadistica->fecha_ano)
                            ->orderBy('puntos')
                            ->orderBy('d_goles')
                            ->get();

        // dd($estadisticas);
        
        
   
    return view('Backend.posicionesequipos.index',['estadisticas'=>$estadisticas,'ult_estadistica'=>$ult_estadistica]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipos::pluck('descripcion','id');           
                        
        return view('Backend.posicionesequipos.create',['equipos'=>$equipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estadistica = new EstadisticasEquipos();
        $estadistica->fill($request->input());  
        $estadistica->role_user_id = Auth::id();
        $estadistica->save();

        return redirect()->route("verposicionesequipos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function show(EstadisticasEquipos $estadisticasEquipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function edit(EstadisticasEquipos $estadisticasEquipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadisticasEquipos $estadisticasEquipos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadisticasEquipos $estadisticasEquipos)
    {
        //
    }
}
