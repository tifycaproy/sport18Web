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
                            ->where('publico',1)
                            ->orderBy('puntos','desc')
                            ->orderBy('d_goles','desc')
                            ->get();

        // dd($estadisticas);
        
        
   
    return view('Backend.posicionesequipos.index',['estadisticas'=>$estadisticas,'fecha_ano'=>$fecha_ano,'select_fecha_ano'=>$select_fecha_ano,'input_apertura_cierre'=>$input_apertura_cierre,'texto_apertura_cierre'=>$texto_apertura_cierre]);
    }
    
    public function indexados(Request $request)
    {
        $select_fecha_ano=EstadisticasEquipos::groupBy('fecha_ano')->pluck('fecha_ano','fecha_ano');
        
                $fecha_ano=$request["fecha_ano"];
          

                $apertura_cierre=$request["apertura_cierre"];
                    
            // dd($apertura_cierre);

        $estadisticas=EstadisticasEquipos::select(DB::raw('estadisticas_equipos.id, equipo_id, equipos.img, descripcion, p_jugado, p_ganado, p_empatado, p_perdido, g_favor, g_contra, (p_ganado*3)+p_empatado as puntos, IF ((g_favor-g_contra) > 0, CAST(concat("+",g_favor-g_contra) as char), CAST(g_favor-g_contra as char)) as d_goles , estadisticas_equipos.updated_at'))
                            ->join('equipos', 'estadisticas_equipos.equipo_id','=','equipos.id')
                            ->where('fecha_ano',$fecha_ano)
                            ->where('apertura_cierre',$apertura_cierre)
                            ->where('publico',1)
                            ->orderBy('puntos','desc')
                            ->orderBy('d_goles','desc')
                            ->get();

        // dd($estadisticas);
        
        
   
    return view('Backend.posicionesequipos.index',['estadisticas'=>$estadisticas,'fecha_ano'=>$fecha_ano,'select_fecha_ano'=>$select_fecha_ano]);
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
                            ->where('publico',1)
                            ->orderBy('puntos','desc')
                            ->orderBy('d_goles','desc')
                            ->get();

        // dd($estadisticas);
        
        
   
    return view('Backend.posicionesequipos.index',['estadisticas'=>$estadisticas,'fecha_ano'=>$fecha_ano,'select_fecha_ano'=>$select_fecha_ano,'input_apertura_cierre'=>$input_apertura_cierre,'texto_apertura_cierre'=>$texto_apertura_cierre]);
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
        $equipos = Equipos::pluck('descripcion','id');           

        $estadistica_equipo=EstadisticasEquipos::select(DB::raw('estadisticas_equipos.id, equipo_id, equipos.img, p_jugado, p_ganado, p_empatado, p_perdido, g_favor, g_contra, descripcion, IF (publico = "1", "checked", "") as publico, IF (apertura_cierre = "1", "checked", "") as apertura_cierre, IF (apertura_cierre = "1", "1", "2") as apertura_cierre_retorno, fecha_ano, estadisticas_equipos.created_at, estadisticas_equipos.updated_at'))
                            ->join('equipos', 'estadisticas_equipos.equipo_id','=','equipos.id')                            
                            ->orderBy('estadisticas_equipos.updated_at','desc')
                            ->where('estadisticas_equipos.id', $estadisticasEquipos)
                            ->first();
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


            $estadistica_equipo = EstadisticasEquipos::find($estadisticasEquipos)
                                ->fill($request->input());
            $estadistica_equipo->apertura_cierre=$apertura_cierre;
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
        
        return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$estadistica_equipo->fecha_ano]);
    }
}
