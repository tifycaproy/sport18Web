<?php

namespace App\Http\Controllers\Backend;

use App\Nosotros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nosotros=Nosotros::select(DB::raw('id,nombres,  IF (publico = "1", "Si", "No") as publico, cargo,  updated_at'))
                            ->orderBy('updated_at','desc')
                            ->get();
   
    return view('Backend.nosotros',['nosotros'=>$nosotros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.form.formmiembro');
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
    $miembro = new Nosotros();
    $miembro->fill($request->input());
    if($request->hasFile('url_imagen')){
      $nombreArchivo = "img_nosotros";
      $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
              $path = public_path().'/images/nosotros/';
              $request["url_imagen"]->move($path, $archivo_img);
      $miembro->url_imagen = $archivo_img;
    }
    $miembro->publico=$publico;
    $miembro->role_user_id = Auth::id();
    $miembro->save();

    return redirect()->route("vernosotros");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function show(Nosotros $nosotros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function edit(Nosotros $nosotros)
    {        
        $miembro = Nosotros::where('id', $nosotros->id)
                ->first();

      if (!$miembro){
        return view('Backend.index');
      }
      else{
        $miembro = Nosotros::select(DB::raw('id, nombres, IF (publico = "1", "checked", "") as publico, cargo, url_imagen,  updated_at'))
                        ->where('id', $nosotros->id)
                       ->first();
        return view('Backend.form.formmiembroupdate',['miembro'=>$miembro]);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nosotros $nosotros)
    {
        $miembro = Nosotros::where('id', $nosotros->id)
        ->first();

        if (!$miembro){
        return view('Backend.index');
        }
        else{

        $miembro = Nosotros::find($nosotros->id)
                    ->fill($request->input());
        if($request->hasFile('url_imagen')){
                $nombreArchivo = "img_nosotros";
                $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                $path = public_path().'/images/nosotros/';
                $request["url_imagen"]->move($path, $archivo_img);
                $miembro->url_imagen = $archivo_img;
        }
        if($request["publico"]){
            $miembro->publico= "1";
        }
        else {
          $miembro->publico = "0";
        }
            $miembro->role_user_id = Auth::id();
            $miembro->save();
        return redirect()->route("vernosotros");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nosotros $nosotros)
    {
        Nosotros::where('id', $nosotros->id)->delete();
      return redirect()->route("vernosotros");
    }
}
