<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jugadores;
use App\Galeria;
use App\Noticias;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    public function index(Request $request){

		$tipo_relacion = $request->tipo;

    	if ($tipo_relacion == 1) {
    		$jugador = Jugadores::where('id', $request->id)->first();
    	}elseif($tipo_relacion == 2){
    		$jugador = Noticias::where('id', $request->id)->select('id', 'titulo as nombres')->first();
    	}

    	$galeria = Galeria::where('tipo_relacion',$tipo_relacion)->where('id_relacion', $request->id)->get();

    	return view('Backend.galeria.index',compact('jugador','tipo_relacion', 'galeria'));
    }

    public function create(Request $request){

    	$tipo_relacion = $request->tipo;

    	if ($tipo_relacion == 1) {
    		$jugador = Jugadores::where('id', $request->id)->first();
    	}elseif($tipo_relacion == 2){
    		$jugador = Noticias::where('id', $request->id)->select('id', 'titulo as nombres')->first();
    	}
    	
    	
    	return view('Backend.galeria.create',compact('jugador','tipo_relacion'));
    }

    public function store(Request $request){

    	$guarda = new Galeria();
    	$guarda->descripcion = $request->descripcion;
    	$guarda->id_relacion = $request->id_relacion;
    	$guarda->tipo_relacion = $request->tipo_relacion; //1JUGADOR O 2NOTICIA
    	$guarda->publico = $request->publico;
    	$guarda->id_relacion = $request->id_relacion;
    	$guarda->portada = $request->portada;
    	$guarda->tipo = $request->tipo; // VIDEO O IMAGEN
    	$guarda->id_usuario = Auth::id();

    	if($request->hasFile('url')){
    		if ($request->tipo == 1) {
    			if ($request->tipo_relacion == 1) {
    				$nombreArchivo = "img_jugador";
    				$path = public_path().'/images/jugadores/';
    			}elseif($request->tipo_relacion == 2){
    				$nombreArchivo = "img_noticia";
    				$path = public_path().'/images/noticias/';
    			}
    		}elseif($request->tipo == 2){
    			if ($request->tipo_relacion == 1) {
    				$nombreArchivo = "video_jugador";
    				$path = public_path().'/videos/jugadores/';
    			}elseif($request->tipo_relacion == 2){
    				$nombreArchivo = "video_noticia";
    				$path = public_path().'/videos/noticias/';
    			}
    		}
          	
          	$archivo = $nombreArchivo."_".time().'.'.$request["url"]->getClientOriginalExtension();
                  
            $request["url"]->move($path, $archivo);

          	$guarda->url = $archivo;
        }

        $guarda->save();

        return redirect()->route('galeria',['tipo'=>$request->tipo_relacion, 'id'=>$request->id_relacion]);

    }

    public function edit(Request $request){

		$galeria = Galeria::where('tipo_relacion',$request->tipo)->where('id', $request->id)->first();

		return view('Backend.galeria.edit',compact('galeria'));
    	
    }

    public function update(Request $request){

    	$guarda = Galeria::find($request->id);
    	$guarda->descripcion = $request->descripcion;
    	$guarda->id_relacion = $request->id_relacion;
    	$guarda->tipo_relacion = $request->tipo_relacion; //1JUGADOR O 2NOTICIA
    	$guarda->publico = $request->publico;
    	$guarda->id_relacion = $request->id_relacion;
    	$guarda->portada = $request->portada;
    	$guarda->tipo = $request->tipo; // VIDEO O IMAGEN
    	$guarda->id_usuario = Auth::id();

    	if($request->hasFile('url')){
    		if ($request->tipo == 1) {
    			if ($request->tipo_relacion == 1) {
    				$nombreArchivo = "img_jugador";
    				$path = public_path().'/images/jugadores/';
    			}elseif($request->tipo_relacion == 2){
    				$nombreArchivo = "img_noticia";
    				$path = public_path().'/images/noticias/';
    			}
    		}elseif($request->tipo == 2){
    			if ($request->tipo_relacion == 1) {
    				$nombreArchivo = "video_jugador";
    				$path = public_path().'/videos/jugadores/';
    			}elseif($request->tipo_relacion == 2){
    				$nombreArchivo = "video_noticia";
    				$path = public_path().'/videos/noticias/';
    			}
    		}
          	
          	$archivo = $nombreArchivo."_".time().'.'.$request["url"]->getClientOriginalExtension();
                  
            $request["url"]->move($path, $archivo);

          	$guarda->url = $archivo;
        }

        $guarda->save();

        return redirect()->route('galeria',['tipo'=>$request->tipo_relacion, 'id'=>$request->id_relacion]);
    }

    public function destroy(Request $request){

    	$consulta = Galeria::find($request->id);

    	$archivo = $consulta->url;

    		if ($consulta->tipo == 1) {
    			if ($consulta->tipo_relacion == 1) {

    				$ruta =public_path().'/images/jugadores/';
    			}elseif($consulta->tipo_relacion == 2){

    				$ruta = public_path().'/images/noticias/';
    			}
    		}elseif($consulta->tipo == 2){
    			if ($consulta->tipo_relacion == 1) {

    				$ruta = public_path().'/videos/jugadores/';
    			}elseif($consulta->tipo_relacion == 2){

    				$ruta = public_path().'/videos/noticias/';
    			}
    		}

    		//dd($ruta.$archivo);
    	$destroy = Galeria::where('id',$request->id)->delete();
    	 \File::delete($ruta.$archivo);

    	return redirect()->route('galeria',['tipo'=>$request->tipo, 'id'=>$request->jugador]);
    }
}
