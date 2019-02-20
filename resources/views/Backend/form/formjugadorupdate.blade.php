@extends ('Backend.layout.layout')
@section('link_back', url('admin/jugadores'))
@section('content')

<input id="mostra_vista" value="jugadores" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script>
$(document).ready(function(){
CKEDITOR.replace( 'editor',{
uiColor:"#DCDCDC",
toolbarGroups : [
  { name: 'basicstyles', groups: [ 'basicstyles'] },
  { name: 'paragraph',   groups: [ 'list', 'indent', 'align', 'bidi' ] },
  { name: 'document',	   groups: [ 'doctools' ] },
  { name: 'editing',     groups: ['spellchecker' ] },
  { name: 'styles' },
  { name: 'colors' },
  { name: 'tools' }
]
// removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
});
});
</script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Jugador</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('actualizarjugador',['id'=>$jugador->id])}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
           <h4 class="title">Datos del Representante:</h4>
          <div class="row">
            <div class="col-md-3">                
              <div class="form-group bmd-form-group {{ $errors->has('nombre_representante') ? ' has-error' : '' }}">
                {!! Form::label('nombre_representante', 'Nombres del Representante') !!}
                <input type="text" name="nombre_representante" class="form-control" value="{{$jugador->nombre_representante}}" autofocus>                
                @if ($errors->has('nombre_representante'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre_representante') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('cedula_representante') ? ' has-error' : '' }}">
                {!! Form::label('cedula_representante', 'Identificación') !!}
                <input type="text" name="cedula_representante" class="form-control" value="{{$jugador->cedula_representante}}" >
                @if ($errors->has('cedula_representante'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cedula_representante') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group bmd-form-group {{ $errors->has('telefono_representante') ? ' has-error' : '' }}">
                  {!! Form::label('telefono_representante', 'Telefonos') !!}
                  <input type="tel" name="telefono_representante" class="form-control" value="{{$jugador->telefono_representante}}" >                
                  @if ($errors->has('telefono_representante'))
                      <span class="help-block">
                          <strong>{{ $errors->first('telefono_representante') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
          </div>          
           <h4 class="title">Datos del Jugador:</h4>
          <div class="row">
            <div class="col-md-3">                
              <div class="form-group bmd-form-group {{ $errors->has('nombres') ? ' has-error' : '' }}">
                {!! Form::label('nombres', 'Nombres') !!}
                <input type="text" name="nombres" class="form-control" value="{{$jugador->nombres}}" required>
                @if ($errors->has('nombres'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombres') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('cedula') ? ' has-error' : '' }}">
                {!! Form::label('cedula', 'Identificación') !!}
                <input type="text" name="cedula" class="form-control" value="{{$jugador->cedula}}" required>
                @if ($errors->has('cedula'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cedula') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
                <input type="date" name="fecha_nacimiento" class="form-control" value="{{$jugador->fecha_nacimiento}}" required>
                @if ($errors->has('fecha_nacimiento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('coreo') ? ' has-error' : '' }}">
                {!! Form::label('coreo', 'Correo Electrónico') !!}
                <input type="email" name="coreo" class="form-control" value="{{$jugador->coreo}}" required>
                @if ($errors->has('coreo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('coreo') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-3">
                <div class="form-group bmd-form-group {{ $errors->has('telefono') ? ' has-error' : '' }}">
                  {!! Form::label('telefono', 'Telefonos') !!}
                  <input type="tel" name="telefono" class="form-control" value="{{$jugador->telefono}}" required>
                  @if ($errors->has('telefono'))
                      <span class="help-block">
                          <strong>{{ $errors->first('telefono') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group bmd-form-group {{ $errors->has('lugar_nacimiento') ? ' has-error' : '' }}">
                  {!! Form::label('lugar_nacimiento', 'Lugar de Nacimiento') !!}
                  <input type="text" name="lugar_nacimiento" class="form-control" value="{{$jugador->lugar_nacimiento}}" required>
                  @if ($errors->has('lugar_nacimiento'))
                      <span class="help-block">
                          <strong>{{ $errors->first('lugar_nacimiento') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
                <div class="col-md-3">
                    <div class="form-group bmd-form-group {{ $errors->has('trayectoria') ? ' has-error' : '' }}">
                      {!! Form::label('trayectoria', 'Trayectoria') !!}
                      <input type="text" name="trayectoria" class="form-control" value="{{$jugador->trayectoria}}" required>
                      @if ($errors->has('trayectoria'))
                          <span class="help-block">
                              <strong>{{ $errors->first('trayectoria') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group bmd-form-group {{ $errors->has('nivel_academico') ? ' has-error' : '' }}">
                        {!! Form::label('nivel_academico', 'Nivel Académico') !!}
                        <input type="text" name="nivel_academico" class="form-control" value="{{$jugador->nivel_academico}}" required>
                        @if ($errors->has('nivel_academico'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nivel_academico') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
            </div>
            <div class="row">
                
                <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('talla_zapato') ? ' has-error' : '' }}">
                    {!! Form::label('talla_zapato', 'Talla de Zapato') !!}
                    <input type="tel" name="talla_zapato" class="form-control" value="{{$jugador->talla_zapato}}" required>
                    @if ($errors->has('talla_zapato'))
                        <span class="help-block">
                            <strong>{{ $errors->first('talla_zapato') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('peso') ? ' has-error' : '' }}">
                      {!! Form::label('peso', 'Peso') !!}
                      <input type="tel" name="peso" class="form-control" value="{{$jugador->peso}}" required>
                      @if ($errors->has('peso'))
                          <span class="help-block">
                              <strong>{{ $errors->first('peso') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group bmd-form-group {{ $errors->has('altura') ? ' has-error' : '' }}">
                        {!! Form::label('altura', 'Altura') !!}
                        <input type="tel" name="altura" class="form-control" value="{{$jugador->altura}}" required>
                        @if ($errors->has('altura'))
                            <span class="help-block">
                                <strong>{{ $errors->first('altura') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group {{ $errors->has('publico') ? ' has-error' : '' }}">
                          <div class="form-check form-check-inline">
                          <label id="publicoup" class="form-check-label">
                            <input id="publicovalup" name="publico" {{$jugador->publico}} class="form-check-input" type="checkbox">
                            Público
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                          @if ($errors->has('publico'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('publico') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
              </div>
              
          <div class="row">              
              <div class="col-md-3">
                  <h4 class="title">Equipo:</h4>
                  <div class="form-group bmd-form-group {{ $errors->has('id_equipo') ? ' has-error' : '' }}">                           
                    {!! Form::select('id_equipo', $equipos, $jugador->id_equipo, ['class' => 'form-control','required'=>'required']) !!}
                    @if ($errors->has('id_equipo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_equipo') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>  
                <div class="col-md-3">
                    <h4 class="title">Posición:</h4>
                    <div class="form-group bmd-form-group {{ $errors->has('id_posicion') ? ' has-error' : '' }}">                           
                      {!! Form::select('id_posicion', $posiciones, $jugador->id_posicion, ['class' => 'form-control','required'=>'required']) !!}
                      @if ($errors->has('id_posicion'))
                          <span class="help-block">
                              <strong>{{ $errors->first('id_posicion') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>  
                  <div class="col-md-3">
                      <h4 class="title">Clasificación:</h4>
                      <div class="form-group bmd-form-group {{ $errors->has('id_clasificacion') ? ' has-error' : '' }}">                           
                        {!! Form::select('id_clasificacion', $clasificaciones, $jugador->id_clasificacion, ['class' => 'form-control','required'=>'required']) !!}
                        @if ($errors->has('id_clasificacion'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_clasificacion') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>    
                    <div class="col-md-3">
                        <h4 class="title">Tipo:</h4>
                        <div class="form-group bmd-form-group {{ $errors->has('tipo') ? ' has-error' : '' }}">                           
                          {!! Form::select('tipo', $tipos_sel, $jugador->tipo, ['class' => 'form-control','required'=>'required']) !!}
                          @if ($errors->has('tipo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tipo') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>         
        </div>
        <h4 class="title">Redes Sociales:</h4>
          <div class="row">
            <div class="col-md-3">                
              <div class="form-group bmd-form-group {{ $errors->has('facebook') ? ' has-error' : '' }}">
                {!! Form::label('facebook', 'Facebook') !!}
                <input type="text" name="facebook" class="form-control" value="{{$jugador->facebook}}" >
                @if ($errors->has('facebook'))
                    <span class="help-block">
                        <strong>{{ $errors->first('facebook') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('twiter') ? ' has-error' : '' }}">
                {!! Form::label('twiter', 'Twitter') !!}
                <input type="text" name="twiter" class="form-control" value="{{$jugador->twiter}}" >
                @if ($errors->has('twiter'))
                    <span class="help-block">
                        <strong>{{ $errors->first('twiter') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group bmd-form-group {{ $errors->has('instagram') ? ' has-error' : '' }}">
                  {!! Form::label('instagram', 'Instagram') !!}
                  <input type="tel" name="instagram" class="form-control" value="{{$jugador->instagram}}" >
                  @if ($errors->has('instagram'))
                      <span class="help-block">
                          <strong>{{ $errors->first('instagram') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-4">
                  <h4 class="title {{ $errors->has('url_imagen') ? ' has-error' : '' }}">Subir Imagen</h4>
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <img id="preview-file" src="{{URL::to('/images')}}/jugadores/{{$jugador->img}}" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new no-existente">Buscar</span>
                        <span class="fileinput-exists existente">Cambiar</span>
                        <input id="imagenup" name="url_imagen" type="file" value="{{$jugador->img}}" href="{{$jugador->img}}" accept="image/png, .jpeg, .jpg, image/gif">
                        @if ($errors->has('url_imagen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url_imagen') }}</strong>
                            </span>
                        @endif
                      </span>
                      <a href="#" class="btn btn-danger btn-round fileinput-exists quitarexistente" data-dismiss="fileinput"><i class="fa fa-times"></i>Quitar</a>
                    </div>
                  </div>
                </div>
          </div>
            <input class="btn btn-primary pull-right" id="submit" type="submit" value="Guardar">
          <div class="clearfix"></div>
{!! Form::close() !!}
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
@endsection
