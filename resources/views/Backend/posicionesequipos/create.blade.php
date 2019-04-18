@extends ('Backend.layout.layout')
@section('link_back', url('admin/posicionesequipos/2/1'))
@section('content')

<input id="mostra_vista" value="estadisticas" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Crear Estadistica</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('ingresarposicionequipo')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}       
          <div class="row">
              <div class="col-md-3">
                  <h4 class="title">Equipo:</h4>
                  <div class="form-group bmd-form-group {{ $errors->has('equipo_id') ? ' has-error' : '' }}">                           
                    {!! Form::select('equipo_id', $equipos, null, ['class' => 'form-control','required'=>'required','autofocus'=>'autofocus']) !!}
                    @if ($errors->has('equipo_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('equipo_id') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>  
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('p_jugado') ? ' has-error' : '' }}">
                    {!! Form::label('p_jugado', 'Partidos Jugados') !!}
                    <input type="tel" name="p_jugado" class="form-control" required>
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
                  <input type="tel" name="p_ganado" class="form-control" required>  
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
                    <input type="tel" name="p_empatado" class="form-control" required>
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
                    <input type="tel" name="p_perdido" class="form-control" required>
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
                        <input type="tel" name="g_favor" class="form-control" required>
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
                          <input type="tel" name="g_contra" class="form-control" required>
                          @if ($errors->has('g_contra'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('g_contra') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group bmd-form-group {{ $errors->has('fecha_ano') ? ' has-error' : '' }}">
                            {!! Form::label('fecha_ano', 'Año del Torneo') !!}
                            <input id="fecha_ano" name="fecha_ano" type="number" class="form-control" required>
                            @if ($errors->has('fecha_ano'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_ano') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                 
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group {{ $errors->has('publico') ? ' has-error' : '' }}">
                          <div class="form-check form-check-inline">
                          <label id="publico" class="form-check-label">
                            <input id="publicoval" name="publico"  class="form-check-input" type="checkbox">
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
                      <div class="col-md-4">
                          <div class="form-group bmd-form-group {{ $errors->has('apertura_cierre') ? ' has-error' : '' }}">                        
                            <div class="togglebutton">
                                <label>
                                  <input name="apertura_cierre"  type="checkbox">
                                  <span class="toggle"></span>
                                  Apertura / Clausura
                                </label>
                              </div>   
                            @if ($errors->has('apertura_cierre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('apertura_cierre') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>                  
          </div> 
            <input class="btn btn-primary pull-right" type="submit" value="Guardar">
          <div class="clearfix"></div>
        </form>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
  
@endsection
@push('scripts')
<script>
    var ano = (new Date).getFullYear();
        $(document).ready(function() {
          $("#fecha_ano").val( ano );
        });
</script>
@endpush
