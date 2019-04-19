@extends ('Backend.layout.layout')
@section('link_back', url('admin/posicionesequipos/2/1'))
@section('content')

<input id="mostra_vista" value="estadisticas_equipos" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Crear Encuentro</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('ingresarencuentroequipo')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}       
          <div class="row">
              <div class="col-md-3">
                  <h4 class="title">Equipo Casa:</h4>
                  <div class="form-group bmd-form-group {{ $errors->has('equipo_id_1') ? ' has-error' : '' }}">                           
                    {!! Form::select('equipo_id_1', $equipos, null, ['class' => 'form-control','required'=>'required','autofocus'=>'autofocus']) !!}
                    @if ($errors->has('equipo_id_1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('equipo_id_1') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('goles_1') ? ' has-error' : '' }}">
                    {!! Form::label('goles_1', 'Goles Equipo Casa') !!}
                    <input type="tel" name="goles_1" class="form-control">
                    @if ($errors->has('goles_1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('goles_1') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-3">
                  <h4 class="title">Equipo Visitante:</h4>
                  <div class="form-group bmd-form-group {{ $errors->has('equipo_id_2') ? ' has-error' : '' }}">                           
                    {!! Form::select('equipo_id_2', $equipos, null, ['class' => 'form-control','required'=>'required']) !!}
                    @if ($errors->has('equipo_id_2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('equipo_id_2') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>    
                <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('goles_2') ? ' has-error' : '' }}">
                    {!! Form::label('goles_2', 'Goles Equipo Visitante') !!}
                    <input type="tel" name="goles_2" class="form-control">
                    @if ($errors->has('goles_2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('goles_2') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>                      
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('fecha_encuentro') ? ' has-error' : '' }}">
                      {!! Form::label('fecha_encuentro', 'Fecha del Encuentro') !!}
                      <input id="fecha_encuentro" name="fecha_encuentro" type="date" class="form-control" required>
                      @if ($errors->has('fecha_encuentro'))
                          <span class="help-block">
                              <strong>{{ $errors->first('fecha_encuentro') }}</strong>
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
@endpush
