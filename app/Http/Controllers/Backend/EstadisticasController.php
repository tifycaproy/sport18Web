<?php

namespace App\Http\Controllers\Backend;

use App\Estadisticas;
use App\Jugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadisticas=Estadisticas::select(DB::raw('estadisticas.id, id_jugador, jugadores.img, jugadores.nombres, pjugados, pganados, pperdidos, pempatados, goles, mj, v_a, amarilla, roja, titular, suplente, convocatoria, estadisticas.updated_at'))
                            ->join('jugadores', 'estadisticas.id_jugador','=','jugadores.id')
                            ->orderBy('estadisticas.updated_at','desc')
                            ->get();
   
    return view('Backend.estadisticas',['estadisticas'=>$estadisticas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $jugadores_estadisticas = Estadisticas::pluck('id_jugador')->toArray();        
        $jugadores = Jugadores::whereNotIn('id',$jugadores_estadisticas)->pluck('nombres','id');     
        return view('Backend.form.formestadistica',['jugadores'=>$jugadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estadistica = new Estadisticas();
        $estadistica->fill($request->input());  
        $estadistica->role_user_id = Auth::id();
        $estadistica->save();

        return redirect()->route("verestadisticas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function show(Estadisticas $estadisticas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadisticas $estadisticas)
    {
        $estadistica = Estadisticas::where('id', $estadisticas->id)
        ->first();

        if (!$estadistica){
        return view('Backend.index');
        }
        else{
        $estadistica = Estadisticas::select(DB::raw('estadisticas.id, id_jugador, jugadores.img, jugadores.nombres, pjugados, pganados, pperdidos, pempatados, goles, mj, v_a, amarilla, roja, titular, suplente, convocatoria, estadisticas.updated_at'))
                        ->join('jugadores', 'estadisticas.id_jugador','=','jugadores.id')
                        ->where('estadisticas.id', $estadisticas->id)
                    ->first();        
        return view('Backend.form.formestadisticaupdate',['estadistica'=>$estadistica]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadisticas $estadisticas)
    {
        $estadistica = Estadisticas::where('id', $estadisticas->id)
        ->first();

        if (!$estadistica){
        return view('Backend.index');
        }
        else{
            $estadistica = Estadisticas::find($estadisticas->id)
                                ->fill($request->input());
            $estadistica->role_user_id = Auth::id();
            $estadistica->save();
            return redirect()->route("verestadisticas");
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadisticas  $estadisticas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadisticas $estadisticas)
    {
        Estadisticas::where('id', $estadisticas->id)->delete();
        return redirect()->route("verestadisticas");
    }
}
