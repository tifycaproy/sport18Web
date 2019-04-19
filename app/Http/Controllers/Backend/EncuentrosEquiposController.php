<?php

namespace App\Http\Controllers\Backend;

use App\EncuentrosEquipos;
use App\Equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EncuentrosEquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipos::pluck('descripcion','id');           
                        
        return view('Backend.encuentrosequipos.create',['equipos'=>$equipos]);
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
            $publico = NULL;
        }

        $encuentro_equipo = new EncuentrosEquipos();
        $encuentro_equipo->fill($request->input());          
        $encuentro_equipo->publico=$publico;
        $encuentro_equipo->role_user_id = Auth::id();
        $encuentro_equipo->save();

        $apertura_cierre=2;
        $fecha_ano=1;

        return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$fecha_ano]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EncuentrosEquipos  $encuentrosEquipos
     * @return \Illuminate\Http\Response
     */
    public function show(EncuentrosEquipos $encuentrosEquipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EncuentrosEquipos  $encuentrosEquipos
     * @return \Illuminate\Http\Response
     */
    public function edit($encuentrosEquipos)
    {
        // dd($estadisticasEquipos);
        $encuentro_equipo = EncuentrosEquipos::where('id', $encuentrosEquipos)
        ->first();

        if (!$encuentro_equipo){
            return view('Backend.index');
        }
        else{
        
        $encuentro_equipo=EncuentrosEquipos::select(DB::raw('encuentros_equipos.id, a.img as img_equipo_1, b.img as img_equipo_2, a.descripcion as descripcion_equipo_1, b.descripcion as descripcion_equipo_2, goles_1, goles_2,  IF (publico = "1", "checked", "") as publico, fecha_encuentro'))
                    ->join('equipos as a', 'encuentros_equipos.equipo_id_1','=','a.id')
                    ->join('equipos as b', 'encuentros_equipos.equipo_id_2','=','b.id')
                    ->where('encuentros_equipos.id',$encuentrosEquipos)                                        
                    ->first();        

        // $equipos = Equipos::where('id',$estadistica_equipo->equipo_id)->first();

        return view('Backend.encuentrosequipos.edit',['encuentro_equipo'=>$encuentro_equipo]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EncuentrosEquipos  $encuentrosEquipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $encuentrosEquipos)
    {
        $encuentro_equipo = EncuentrosEquipos::where('id', $encuentrosEquipos)
                            ->first();

        if (!$encuentro_equipo){
            return view('Backend.index');
        }
        else{
    
            if($request["publico"]){
                $publico= "1";
            }
            else {
                $publico = NULL;
            }

            $encuentro_equipo = EncuentrosEquipos::find($encuentrosEquipos)
                                ->fill($request->input());
            $encuentro_equipo->publico=$publico;
            $encuentro_equipo->role_user_id = Auth::id();
            $encuentro_equipo->save();

            $apertura_cierre=2;
            $fecha_ano=1;

            return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$fecha_ano]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EncuentrosEquipos  $encuentrosEquipos
     * @return \Illuminate\Http\Response
     */
    public function destroy($encuentrosEquipos)
    {
        EncuentrosEquipos::where('id', $encuentrosEquipos)->delete();
        
            $apertura_cierre=2;
            $fecha_ano=1;
        
        return redirect()->route("verposicionesequipos",['apertura_cierre'=>$apertura_cierre,'fecha_ano'=>$fecha_ano]);
    }
}
