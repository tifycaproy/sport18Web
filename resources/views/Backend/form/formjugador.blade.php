@extends ('Backend.layout.layout')

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
          <h4 class="card-title">Crear Jugador</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
          {!! Form::open(['route' => 'ingresarjugador','enctype'=>'multipart/form-data','method'=>'POST']) !!}
           {{ csrf_field() }}
           <h4 class="title">Datos del Representante:</h4>
          <div class="row">
            <div class="col-md-3">                
              <div class="form-group bmd-form-group {{ $errors->has('nombre_representante') ? ' has-error' : '' }}">
                {!! Form::label('nombre_representante', 'Nombres del Representante') !!}
                {!! Form::text('nombre_representante', null, ['class' => 'form-control' , 'autofocus'=> 'autofocus']) !!}

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
                {!! Form::text('cedula_representante', null, ['class' => 'form-control' ]) !!}

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
                  {!! Form::tel('telefono_representante', null, ['class' => 'form-control' ]) !!}
  
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
                {!! Form::text('nombres', null, ['class' => 'form-control' , 'required' => 'required']) !!}

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
                {!! Form::text('cedula', null, ['class' => 'form-control' , 'required' => 'required']) !!}

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
                {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control' , 'required' => 'required']) !!}

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
                {!! Form::email('coreo', null, ['class' => 'form-control' , 'required' => 'required']) !!}

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
                  {!! Form::tel('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
  
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
                  {!! Form::text('lugar_nacimiento', null, ['class' => 'form-control' , 'required' => 'required']) !!}
  
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
                      {!! Form::text('trayectoria', null, ['class' => 'form-control' , 'required' => 'required']) !!}
      
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
                        {!! Form::text('nivel_academico', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        
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
                    {!! Form::tel('talla_zapato', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    
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
                      {!! Form::tel('peso', null, ['class' => 'form-control' , 'required' => 'required']) !!}
      
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
                        {!! Form::tel('altura', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        
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
                          <label id="publico" class="form-check-label">
                            <input id="publicoval" name="publico"  class="form-check-input" type="checkbox">
                            Publicado
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
                    {!! Form::select('id_equipo', $equipos, null, ['class' => 'form-control','required'=>'required']) !!}
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
                      {!! Form::select('id_posicion', $posiciones, null, ['class' => 'form-control','required'=>'required']) !!}
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
                        {!! Form::select('id_clasificacion', $clasificaciones, null, ['class' => 'form-control','required'=>'required']) !!}
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
                          {!! Form::select('tipo', $tipos_sel, null, ['class' => 'form-control','required'=>'required']) !!}
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
                {!! Form::text('facebook', null, ['class' => 'form-control']) !!}

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
                {!! Form::text('twiter', null, ['class' => 'form-control' ]) !!}

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
                  {!! Form::tel('instagram', null, ['class' => 'form-control' ]) !!}
  
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
                  <img src="{{URL::to('/material-dashboard-dark-edition-v2.1.0/assets')}}/img/image_placeholder.jpg" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new">Buscar</span>
                    <span class="fileinput-exists">Cambiar</span><input id="imagen" name="url_imagen" type="file" name="..." required>
                    @if ($errors->has('url_imagen'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url_imagen') }}</strong>
                        </span>
                    @endif
                  </span>
                  <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>Quitar</a>
                </div>
              </div>
            </div>
          </div>

            <input class="btn btn-primary pull-right" id="submit" type="submit" value="Crear Jugador">
          <div class="clearfix"></div>
{!! Form::close() !!}
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>

@endsection
