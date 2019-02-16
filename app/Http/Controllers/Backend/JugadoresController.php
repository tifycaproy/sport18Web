<?php

namespace App\Http\Controllers\Backend;

use App\Jugadores;
use App\Equipos;
use App\Posiciones;
use App\Clasificaciones;
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
        $jugadores=Jugadores::select(DB::raw('jugadores.id, nombres, jugadores.img,  IF (publico = "1", "Si", "No") as publico, equipos.descripcion as equipo, posiciones.descripcion as posicion, clasificaciones.descripcion as clasificacion, jugadores.updated_at'))
                            ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
                            ->join('posiciones', 'jugadores.id_posicion','=','posiciones.id')
                            ->join('clasificaciones', 'jugadores.id_clasificacion','=','clasificaciones.id')
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
        $equipos = Equipos::pluck('descripcion','id');           
        $posiciones = Posiciones::pluck('descripcion','id');           
        $clasificaciones = Clasificaciones::pluck('descripcion','id'); 
        $tipos = collect([
            ['id' => 'Titular', 'descripcion' => 'Titular'],
            ['id' => 'Suplente', 'descripcion' => 'Suplente'],            
        ]);            
        $tipos_sel = $tipos->pluck('descripcion','id');           
        return view('Backend.form.formjugador',['equipos'=>$equipos,'posiciones'=>$posiciones,'clasificaciones'=>$clasificaciones,'tipos_sel'=>$tipos_sel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
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
          $jugador->img = $archivo_img;
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
        $jugador = Jugadores::where('id', $jugadores->id)
        ->first();

        if (!$jugador){
        return view('Backend.index');
        }
        else{

            $jugador = Jugadores::find($jugadores->id)
                        ->fill($request->input());
            if($request->hasFile('url_imagen')){
                    $nombreArchivo = "img_jugadores";
                    $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                    $path = public_path().'/images/jugadores/';
                    $request["url_imagen"]->move($path, $archivo_img);
                    $jugador->img = $archivo_img;
            }
            if($request["publico"]){
                $jugador->publico= "1";
            }
            else {
            $jugador->publico = "0";
            }
                $jugador->id_usuario = Auth::id();
                $jugador->save();
            return redirect()->route("verjugadores");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugadores $jugadores)
    {
        Jugadores::where('id', $jugadores->id)->delete();
        return redirect()->route("verjugadores");
    }
}
