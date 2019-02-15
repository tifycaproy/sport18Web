<?php

namespace App\Http\Controllers\Backend;

use App\Equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos=Equipos::select(DB::raw('id,descripcion, updated_at'))       
        ->orderBy('updated_at','desc')
        ->get();

        return view('Backend..form.formequipo',['equipos'=>$equipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipos();
        $equipo->fill($request->input());
        $equipo->id_usuario = Auth::id();
        $equipo->save();
    
        return redirect()->route("formequipo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function show(Equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipos $equipos)
    {
        $equipo = Equipos::where('id', $equipos->id)
                ->first();

      if (!$equipo){
        return view('Backend.index');
      }
      else{
        $equipo = Equipos::where('id', $equipos->id)
                       ->first();        
        return view('Backend.form.formequipoupdate',['equipo'=>$equipo]);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipos $equipos)
    {
        $equipo = Equipos::where('id', $equipos->id)
                ->first();
        if (!$equipo){
        return view('Backend.index');
        }
        else{

        $equipo = Equipos::find($equipos->id)
                ->fill($request->input());
        $equipo->id_usuario = Auth::id();
        $equipo->save()
        ;
        return redirect()->route("formequipo");
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipos $equipos)
    {
        Equipos::where('id', $equipos->id)->delete();
        return redirect()->route("formequipo");
    }
}
