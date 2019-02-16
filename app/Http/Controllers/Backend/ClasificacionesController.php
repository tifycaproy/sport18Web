<?php

namespace App\Http\Controllers\Backend;

use App\Clasificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClasificacionesController extends Controller
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
        $clasificaciones=Clasificaciones::select(DB::raw('id,descripcion, updated_at'))       
        ->orderBy('updated_at','desc')
        ->get();

        return view('Backend.form.formclasificacion',['clasificaciones'=>$clasificaciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clasificacion = new Clasificaciones();
        $clasificacion->fill($request->input());
        $clasificacion->id_usuario = Auth::id();
        $clasificacion->save();
    
        return redirect()->route("formclasificacion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Clasificaciones $clasificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasificaciones $clasificaciones)
    {
        $clasificacion = Clasificaciones::where('id', $clasificaciones->id)
        ->first();

        if (!$clasificacion){
        return view('Backend.index');
        }
        else{     
        return view('Backend.form.formclasificacionupdate',['clasificacion'=>$clasificacion]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasificaciones $clasificaciones)
    {
        $clasificacion = Clasificaciones::where('id', $clasificaciones->id)
                ->first();
        if (!$clasificacion){
        return view('Backend.index');
        }
        else{

        $clasificacion = Clasificaciones::find($clasificaciones->id)
                ->fill($request->input());
        $clasificacion->id_usuario = Auth::id();
        $clasificacion->save();
        return redirect()->route("formclasificacion");
        }      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clasificaciones  $clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasificaciones $clasificaciones)
    {
        Clasificaciones::where('id', $clasificaciones->id)->delete();
        return redirect()->route("formclasificacion");
    }
}
