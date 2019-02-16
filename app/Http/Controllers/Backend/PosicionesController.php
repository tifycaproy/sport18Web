<?php

namespace App\Http\Controllers\Backend;

use App\Posiciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PosicionesController extends Controller
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
        $posiciones=Posiciones::select(DB::raw('id,descripcion, updated_at'))       
        ->orderBy('updated_at','desc')
        ->get();

        return view('Backend.form.formposicion',['posiciones'=>$posiciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posicion = new Posiciones();
        $posicion->fill($request->input());
        $posicion->id_usuario = Auth::id();
        $posicion->save();
    
        return redirect()->route("formposicion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posiciones  $posiciones
     * @return \Illuminate\Http\Response
     */
    public function show(Posiciones $posiciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posiciones  $posiciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Posiciones $posiciones)
    {
        $posicion = Posiciones::where('id', $posiciones->id)
        ->first();

        if (!$posicion){
        return view('Backend.index');
        }
        else{     
        return view('Backend.form.formposicionupdate',['posicion'=>$posicion]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posiciones  $posiciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posiciones $posiciones)
    {
        $posicion = Posiciones::where('id', $posiciones->id)
                ->first();
        if (!$posicion){
        return view('Backend.index');
        }
        else{

        $posicion = Posiciones::find($posiciones->id)
                ->fill($request->input());
        $posicion->id_usuario = Auth::id();
        $posicion->save();
        return redirect()->route("formposicion");
        }      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posiciones  $posiciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posiciones $posiciones)
    {
        Posiciones::where('id', $posiciones->id)->delete();
        return redirect()->route("formposicion");
    }
}
