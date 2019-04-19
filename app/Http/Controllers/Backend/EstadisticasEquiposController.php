<?php

namespace App\Http\Controllers\Backend;

use App\EstadisticasEquipos;
use App\EncuentrosEquipos;
use App\Estadisticas;
use App\Equipos;
use App\Jugadores;
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
    public function index($apertura_cierre,$fecha_ano)
    {
        $select_fecha_ano=EstadisticasEquipos::groupBy('fecha_ano')->pluck('fecha_ano','fecha_ano');
        
            if($fecha_ano=='1'){
                $fecha_ano=EstadisticasEquipos::orderBy('fecha_ano','desc')
                ->first();
                $fecha_ano=$fecha_ano->fecha_ano;
            }
            // dd($fecha_ano);

            if($apertura_cierre=='2'){
                $apertura_cierre=NULL;
            }      
            $input_apertura_cierre='';
            $texto_apertura_cierre='Apertura';      
            // dd($apertura_cierre);

        $estadisticas=EstadisticasEquipos::select(DB::raw('estadisticas_equipos.id, equipo_id, equipos.img, descripcion, p_jugado, p_ganado, p_empatado, p_perdido, g_favor, g_contra, (p_ganado*3)+p_empatado as puntos, IF ((g_favor-g_contra) > 0, CAST(concat("+",g_favor-g_contra) as char), CAST(g_favor-g_contra as char)) as d_goles , estadisticas_equipos.updated_at'))
                            ->join('equipos', 'estadisticas_equipos.equipo_id','=','equipos.id')
                            ->where('fecha_ano',$fecha_ano)
                            ->where('apertura_cierre',$apertura_cierre)                            
                            ->orderBy('puntos','desc')
                            ->orderBy('d_goles','desc')
                            ->get();

        // dd($estadisticas);
        
    $goleadores=Estadisticas::select(DB::raw('estadisticas.id, id_jugador, equipos.img, descripcion, jugadores.nombres, goles, estadisticas.updated_at'))
                        ->join('jugadores', 'estadisticas.id_jugador','=','jugadores.id')
                        ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
                        ->where('goles','>',0)
                        ->orderBy('goles','desc')
                        ->get();

    $asistencias=Estadisticas::select(DB::raw('estadisticas.id, id_jugador, equipos.img, descripcion, jugadores.nombres, t_a, p_j, a_p, estadisticas.updated_at'))
            ->join('jugadores', 'estadisticas.id_jugador','=','jugadores.id')
            ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
            ->where('t_a','>',0)
            ->orderBy('t_a','desc')
            ->get();

    $once_ideal=Jugadores::select(DB::raw('jugadores.id, nombres, jugadores.img as img_jugador, equipos.img as img_equipo, equipos.descripcion as equipo, tipo, posiciones.descripcion as posicion, clasificaciones.descripcion as clasificacion, jugadores.updated_at'))
            ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
            ->join('posiciones', 'jugadores.id_posicion','=','posiciones.id')
            ->join('clasificaciones', 'jugadores.id_clasificacion','=','clasificaciones.id')
            ->where('tipo','Titular')
            ->orderBy('posiciones.descripcion','desc')
            ->get();

    $encuentros_equipos=EncuentrosEquipos::select(DB::raw('encuentros_equipos.id, a.img as img_equipo_1, b.img as img_equipo_2, a.descripcion as descripcion_equipo_1, b.descripcion as descripcion_equipo_2, goles_1, goles_2, fecha_encuentro'))
                        ->join('equipos as a', 'encuentros_equipos.equipo_id_1','=','a.id')
                        ->join('equipos as b', 'encuentros_equipos.equipo_id_2','=','b.id')
                        ->where('goles_1','!=',NULL)
                        ->where('goles_2','!=',NULL)                        
                        ->orderBy('fecha_encuentro','desc')
                        ->get();

    $proximos_encuentros=EncuentrosEquipos::select(DB::raw('encuentros_equipos.id, a.img as img_equipo_1, b.img as img_equipo_2, a.descripcion as descripcion_equipo_1, b.descripcion as descripcion_equipo_2, goles_1, goles_2, fecha_encuentro'))
                        ->join('equipos as a', 'encuentros_equipos.equipo_id_1','=','a.id')
                        ->join('equipos as b', 'encuentros_equipos.equipo_id_2','=','b.id')
                        ->where('goles_1',NULL)
                        ->where('goles_2',NULL)                        
                        ->orderBy('fecha_encuentro','desc')
                        ->get();
    
    // dd($proximos_encuentros);
    
        return view('Backend.posicionesequipos.index',['estadisticas'=>$estadisticas,'fecha_ano'=>$fecha_ano,'select_fecha_ano'=>$select_fecha_ano,'input_apertura_cierre'=>$input_apertura_cierre,'texto_apertura_cierre'=>$texto_apertura_cierre,'goleadores'=>$goleadores,'asistencias'=>$asistencias,'once_ideal'=>$once_ideal,'encuentros_equipos'=>$encuentros_equipos,'proximos_encuentros'=>$proximos_encuentros]);
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
        if($request["apertura_cierre"]){
            $apertura_cierre= "1";
        }
        else {
            $apertura_cierre = NULL;
        }

        if($request["publico"]){
            $publico= "1";
        }
        else {
            $publico = NULL;
        }

        $estadistica = new EstadisticasEquipos();
        $estadistica->fill($request->input());  
        $estadistica->apertura_cierre=$apertura_cierre;
        $estadistica->publico=$publico;
        $estadistica->role_user_id = Auth::id();
        $estadistica->save();

        if($estadistica->apertura_cierre==NULL){
            $apertura_cierre=2;
        }
        else{
            $apertura_cierre=$estadistica->apertura_cierre;
        }

        return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$estadistica->fecha_ano]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // dd($request);
        $select_fecha_ano=EstadisticasEquipos::groupBy('fecha_ano')->pluck('fecha_ano','fecha_ano');
        
                $fecha_ano=$request["fecha_ano"];
          
            if($request["apertura_cierre"]!=NULL){
                $input_apertura_cierre='checked';
                $texto_apertura_cierre='Clausura';
                $apertura_cierre=1;
            }
            else{
                $input_apertura_cierre='';
                $texto_apertura_cierre='Apertura';
                $apertura_cierre=NULL;
            }
                    
            // dd($apertura_cierre);

        $estadisticas=EstadisticasEquipos::select(DB::raw('estadisticas_equipos.id, equipo_id, equipos.img, descripcion, p_jugado, p_ganado, p_empatado, p_perdido, g_favor, g_contra, (p_ganado*3)+p_empatado as puntos, IF ((g_favor-g_contra) > 0, CAST(concat("+",g_favor-g_contra) as char), CAST(g_favor-g_contra as char)) as d_goles , estadisticas_equipos.updated_at'))
                            ->join('equipos', 'estadisticas_equipos.equipo_id','=','equipos.id')
                            ->where('fecha_ano',$fecha_ano)
                            ->where('apertura_cierre',$apertura_cierre)
                            ->orderBy('puntos','desc')
                            ->orderBy('d_goles','desc')
                            ->get();

        $goleadores=Estadisticas::select(DB::raw('estadisticas.id, id_jugador, equipos.img, descripcion, jugadores.nombres, goles, estadisticas.updated_at'))
        ->join('jugadores', 'estadisticas.id_jugador','=','jugadores.id')
        ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
        ->where('goles','>',0)
        ->orderBy('goles','desc')
        ->get();
    
        $asistencias=Estadisticas::select(DB::raw('estadisticas.id, id_jugador, equipos.img, descripcion, jugadores.nombres, t_a, p_j, a_p, estadisticas.updated_at'))
                ->join('jugadores', 'estadisticas.id_jugador','=','jugadores.id')
                ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
                ->where('t_a','>',0)
                ->orderBy('t_a','desc')
                ->get();
        // dd($estadisticas);
        
        $once_ideal=Jugadores::select(DB::raw('jugadores.id, nombres, jugadores.img as img_jugador, equipos.img as img_equipo, equipos.descripcion as equipo, tipo, posiciones.descripcion as posicion, clasificaciones.descripcion as clasificacion, jugadores.updated_at'))
            ->join('equipos', 'jugadores.id_equipo','=','equipos.id')
            ->join('posiciones', 'jugadores.id_posicion','=','posiciones.id')
            ->join('clasificaciones', 'jugadores.id_clasificacion','=','clasificaciones.id')
            ->where('tipo','Titular')
            ->orderBy('posiciones.descripcion','desc')
            ->get();

        $encuentros_equipos=EncuentrosEquipos::select(DB::raw('encuentros_equipos.id, a.img as img_equipo_1, b.img as img_equipo_2, a.descripcion as descripcion_equipo_1, b.descripcion as descripcion_equipo_2, goles_1, goles_2, fecha_encuentro'))
            ->join('equipos as a', 'encuentros_equipos.equipo_id_1','=','a.id')
            ->join('equipos as b', 'encuentros_equipos.equipo_id_2','=','b.id')
            ->where('goles_1','!=',NULL)
            ->where('goles_2','!=',NULL)
            ->orderBy('fecha_encuentro','desc')
            ->get();

        $proximos_encuentros=EncuentrosEquipos::select(DB::raw('encuentros_equipos.id, a.img as img_equipo_1, b.img as img_equipo_2, a.descripcion as descripcion_equipo_1, b.descripcion as descripcion_equipo_2, goles_1, goles_2, fecha_encuentro'))
            ->join('equipos as a', 'encuentros_equipos.equipo_id_1','=','a.id')
            ->join('equipos as b', 'encuentros_equipos.equipo_id_2','=','b.id')
            ->where('goles_1',NULL)
            ->where('goles_2',NULL)
            ->orderBy('fecha_encuentro','desc')
            ->get();

            
   
    return view('Backend.posicionesequipos.index',['estadisticas'=>$estadisticas,'fecha_ano'=>$fecha_ano,'select_fecha_ano'=>$select_fecha_ano,'input_apertura_cierre'=>$input_apertura_cierre,'texto_apertura_cierre'=>$texto_apertura_cierre,'goleadores'=>$goleadores,'asistencias'=>$asistencias,'once_ideal'=>$once_ideal,'encuentros_equipos'=>$encuentros_equipos,'proximos_encuentros'=>$proximos_encuentros]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function edit($estadisticasEquipos)
    {
        // dd($estadisticasEquipos);
        $estadistica_equipo = EstadisticasEquipos::where('id', $estadisticasEquipos)
        ->first();

        if (!$estadistica_equipo){
            return view('Backend.index');
        }
        else{
                   

        $estadistica_equipo=EstadisticasEquipos::select(DB::raw('estadisticas_equipos.id, equipo_id, equipos.img, p_jugado, p_ganado, p_empatado, p_perdido, g_favor, g_contra, descripcion, IF (publico = "1", "checked", "") as publico, IF (apertura_cierre = "1", "Clausura", "Apertura") as apertura_cierre, IF (apertura_cierre = "1", "1", "2") as apertura_cierre_retorno, fecha_ano, estadisticas_equipos.created_at, estadisticas_equipos.updated_at'))
                            ->join('equipos', 'estadisticas_equipos.equipo_id','=','equipos.id')                            
                            ->orderBy('estadisticas_equipos.updated_at','desc')
                            ->where('estadisticas_equipos.id', $estadisticasEquipos)
                            ->first();

        $equipos = Equipos::where('id',$estadistica_equipo->equipo_id)->first();

        return view('Backend.posicionesequipos.edit',['equipos'=>$equipos,'estadistica_equipo'=>$estadistica_equipo]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $estadisticasEquipos)
    {
        $estadistica_equipo = EstadisticasEquipos::where('id', $estadisticasEquipos)
        ->first();

        if (!$estadistica_equipo){
            return view('Backend.index');
        }
        else{
    
            if($request["publico"]){
                $publico= "1";
            }
            else {
                $publico = NULL;
            }


            $estadistica_equipo = EstadisticasEquipos::find($estadisticasEquipos)
                                ->fill($request->input());
            $estadistica_equipo->publico=$publico;
            $estadistica_equipo->role_user_id = Auth::id();
            $estadistica_equipo->save();

            if($estadistica_equipo->apertura_cierre==NULL){
                $apertura_cierre=2;
            }
            else{
                $apertura_cierre=$estadistica_equipo->apertura_cierre;
            }

            return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$estadistica_equipo->fecha_ano]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstadisticasEquipos  $estadisticasEquipos
     * @return \Illuminate\Http\Response
     */
    public function destroy($estadisticasEquipos)
    {
        EstadisticasEquipos::where('id', $estadisticasEquipos)->delete();
        
            $apertura_cierre=2;
            $fecha_ano=1;
        
        return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$fecha_ano]);
    }
}
