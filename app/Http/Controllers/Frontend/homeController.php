<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;
use App\Jugadores;
use App\Nosotros;
use App\Galeria;



class homeController extends Controller{
   
    public function index(){

    	$sliders = Slider::where('publico', 1)->orderBy('posicion', 'asc')->get();

    	$noticias = Noticias::where('publico',1)->orderBy('posicion', 'asc')->limit(2)->get();

    	$jugadores = Jugadores::Index()->limit(4)->get();

    	$miembros = Nosotros::where('publico',1)->get();

        return view('Frontend.index', compact('sliders','noticias', 'jugadores','miembros'));
    }

    public function noticia(){

    	$noticias = Noticias::where('publico',1)->orderBy('posicion', 'asc')->limit(2)->get();
    	return view('Frontend.noticias', compact('noticias'));	
    }

    public function detalle($id){

    	$noticia = Noticias::where('id',$id)->first();
    	return view('Frontend.detalle', compact('noticia'));	
    }

    public function jugador($id){
        $jugador = Jugadores::Index()->find($id);

        $galeriaPortada = Galeria::where('tipo_relacion',1)->where('publico',1)->where('id_relacion', $id)->where('portada',1)->first();

        $galeria = Galeria::where('tipo_relacion',1)->where('publico',1)->where('id_relacion', $id)->get();

        return view('Frontend.jugador', compact('jugador','galeria','galeriaPortada'));
    }




}

