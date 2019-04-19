@extends ('Backend.layout.layout')
@section('link_back', url('admin/posicionesequipos/'.$estadistica_equipo->apertura_cierre_retorno.'/'.$estadistica_equipo->fecha_ano))
@section('content')

<input id="mostra_vista" value="estadisticas_equipos" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Estadistica</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('actualizarposicionequipo',['id'=>$estadistica_equipo->id])}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }} 
           <h4 class="title">{{$equipos->descripcion}} - Torneo de {{$estadistica_equipo->apertura_cierre}} - Año {{$estadistica_equipo->fecha_ano}}:</h4><br>                     
          <div class="row">                      
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('p_jugado') ? ' has-error' : '' }}">
                      {!! Form::label('p_jugado', 'Partidos Jugados') !!}
                      <input type="tel" name="p_jugado" class="form-control" value="{{$estadistica_equipo->p_jugado}}" required>
                      @if ($errors->has('p_jugado'))
                          <span class="help-block">
                              <strong>{{ $errors->first('p_jugado') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div> 
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('p_ganado') ? ' has-error' : '' }}">
                    {!! Form::label('p_ganado', 'Partidos Ganados') !!}
                    <input type="tel" name="p_ganado" value="{{$estadistica_equipo->p_ganado}}" class="form-control" required>  
                    @if ($errors->has('p_ganado'))
                        <span class="help-block">
                            <strong>{{ $errors->first('p_ganado') }}</strong>
                        </span>
                    @endif
                  </div>
            </div>
            <div class="col-md-2">
                <div class="form-group bmd-form-group {{ $errors->has('p_empatado') ? ' has-error' : '' }}">
                  {!! Form::label('p_empatado', 'Partidos Empatados') !!}
                  <input type="tel" name="p_empatado" value="{{$estadistica_equipo->p_empatado}}" class="form-control" required>
                  @if ($errors->has('p_empatado'))
                      <span class="help-block">
                          <strong>{{ $errors->first('p_empatado') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            <div class="col-md-2">
                <div class="form-group bmd-form-group {{ $errors->has('p_perdido') ? ' has-error' : '' }}">
                  {!! Form::label('p_perdido', 'Partidos Perdidos') !!}
                <input type="tel" name="p_perdido" value="{{$estadistica_equipo->p_perdido}}" class="form-control" required>
                  @if ($errors->has('p_perdido'))
                      <span class="help-block">
                          <strong>{{ $errors->first('p_perdido') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('g_favor') ? ' has-error' : '' }}">
                    {!! Form::label('g_favor', 'Goles a Favor') !!}
                    <input type="tel" name="g_favor" value="{{$estadistica_equipo->g_favor}}" class="form-control" required>
                    @if ($errors->has('g_favor'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g_favor') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('g_contra') ? ' has-error' : '' }}">
                    {!! Form::label('g_contra', 'Goles en Contra') !!}
                    <input type="tel" name="g_contra" value="{{$estadistica_equipo->g_contra}}" class="form-control" required>
                    @if ($errors->has('g_contra'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g_contra') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>             
              <div class="col-md-2">
                <div class="form-group bmd-form-group {{ $errors->has('publico') ? ' has-error' : '' }}">
                  <div class="form-check form-check-inline">
                  <label id="publico" class="form-check-label">
                    <input id="publicoval" name="publico" {{$estadistica_equipo->publico}}  class="form-check-input" type="checkbox">
                    Publicar
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
          
            <input class="btn btn-primary pull-right" id="submit" type="submit" value="Guardar">
          <div class="clearfix"></div>
{!! Form::close() !!}
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
@endsection
@push('scripts')
@endpush
