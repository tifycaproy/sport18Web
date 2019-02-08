<?php

namespace App\Http\Controllers\Backend;

use App\Jugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores=Jugadores::select(DB::raw('jugadores.id, nombres,  IF (publico = "1", "Si", "No") as publico, equipos.descripcion,  jugadores.updated_at'))
                            ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
                            ->orderBy('jugadores.updated_at','desc')
                            ->get();
   
    return view('Backend.jugadores',['jugadores'=>$jugadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.form.formjugador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request["publico"]){
            $publico= "1";
        }
        else {
            $publico = "0";
        }
        $jugador = new Jugadores();
        $jugador->fill($request->input());
        if($request->hasFile('url_imagen')){
          $nombreArchivo = "img_jugador";
          $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                  $path = public_path().'/images/jugadores/';
                  $request["url_imagen"]->move($path, $archivo_img);
          $jugador->url_imagen = $archivo_img;
        }
        $jugador->publico=$publico;
        $jugador->id_usuario = Auth::id();
        $jugador->save();
    
        return redirect()->route("verjugadores");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function show(Jugadores $jugadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugadores $jugadores)
    {
        $jugador = Jugadores::where('id', $jugadores->id)
        ->first();

        if (!$jugador){
        return view('Backend.index');
        }
        else{
        $jugador = Jugadores::select(DB::raw('id, nombres, IF (publico = "1", "checked", "") as publico, cargo, url_imagen,  updated_at'))
                        ->where('id', $jugadores->id)
                    ->first();
        return view('Backend.form.formjugadorupdate',['jugador'=>$jugador]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugadores $jugadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugadores $jugadores)
    {
        //
    }
}
