<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Comentarios as Comentarios;

class ComentariosController extends Controller
{
  public function create(Request $request)
  {
    // dd($request);
    $comentario = new Comentarios();
    $comentario->fill($request->input());
    if($request->hasFile('url_imagen')){
      $nombreArchivo = "img_comentario";
      $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
              $path = public_path().'/images/comentarios/';
              $request["url_imagen"]->move($path, $archivo_img);
      $comentario->url_imagen = $archivo_img;
    }
    $comentario->role_user_id = Auth::id();
    $comentario->save();

    return redirect()->route("vercomentarios");
  }
  public function list()
  {
    $comentarios=Comentarios::orderBy('updated_at','desc')
                  ->get();
    return view('Backend.comentarios',['comentarios'=>$comentarios]);
  }
  public function delete($id)
  {
      Comentarios::where('id', $id)->delete();
      return redirect()->route("vercomentarios");
  }
  public function form()
  {
      return view('Backend.form.formcomentario');
  }
  public function onesearch($id)
  {
      $comentario = Comentarios::where('id', $id)
                ->first();

      if (!$comentario){
        return view('Backend.index');
      }
      else{
        $comentario = Comentarios::where('id', $id)
                       ->first();
        return view('Backend.form.formcomentarioupdate',['comentario'=>$comentario]);
      }

  }
  public function update(Request $request, $id)
  {
    // dd($request);
    $comentario = Comentarios::where('id', $id)
                              ->first();

    if (!$comentario){
      return view('Backend.index');
    }
    else{

          $comentario = Comentarios::find($id)
                    ->fill($request->input());
          if($request->hasFile('url_imagen')){
            $nombreArchivo = "img_comentario";
            $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                    $path = public_path().'/images/comentarios/';
                    $request["url_imagen"]->move($path, $archivo_img);
            $comentario->url_imagen = $archivo_img;
          }
          $comentario->role_user_id = Auth::id();
          $comentario->save()
          ;
        return redirect()->route("vercomentarios");
     }
  }
}
