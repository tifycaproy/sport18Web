<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;
use App\Jugadores;
use App\Nosotros;
use App\Galeria;
use App\Estadisticas;



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
         $galeria = Galeria::where('tipo_relacion',2)->where('publico',1)->where('id_relacion', $id)->get();
    	$noticia = Noticias::where('id',$id)->first();
    	return view('Frontend.detalle', compact('noticia','galeria'));	
    }

    public function jugador($id){
        $jugador = Jugadores::Index()->find($id);

        $galeriaPortada = Galeria::where('tipo_relacion',1)->where('publico',1)->where('id_relacion', $id)->where('portada',1)->first();

        $galeria = Galeria::where('tipo_relacion',1)->where('publico',1)->where('id_relacion', $id)->get();

        $estadistica = Estadisticas::where('id_jugador', $id)->first();


        return view('Frontend.jugador', compact('jugador','galeria','galeriaPortada','estadistica'));
    }

    public function jugadores(){
        $jugadores = Jugadores::Index()->where('publico', 1)->get();
        return view('Frontend.jugadores',compact('jugadores'));
    }




}

