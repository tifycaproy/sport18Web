@extends ('Backend.layout.layout')
@section('link_back', url('admin/posicionesequipos/2/1'))
@section('content')
@php    
use Carbon\Carbon;
@endphp

<input id="mostra_vista" value="estadisticas_equipos" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Encuentro</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('actualizarencuentroequipo',['id'=>$encuentro_equipo->id])}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }} 
           <h4 class="title">{{$encuentro_equipo->descripcion_equipo_1}}(Casa) vs {{$encuentro_equipo->descripcion_equipo_2}}(Visitante) - {{ Carbon::parse($encuentro_equipo->fecha_encuentro)->format('d/m/Y') }}:</h4><br>                     
          <div class="row"> 
            
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('goles_1') ? ' has-error' : '' }}">
                    {!! Form::label('goles_1', 'Goles Equipo Casa') !!}
                    <input type="tel" name="goles_1" value="{{$encuentro_equipo->goles_1}}" class="form-control" >
                    @if ($errors->has('goles_1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('goles_1') }}</strong>
                        </span>
                    @endif
                  </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('goles_2') ? ' has-error' : '' }}">
                      {!! Form::label('goles_2', 'Goles Equipo Casa') !!}
                      <input type="tel" name="goles_2" value="{{$encuentro_equipo->goles_2}}" class="form-control" >
                      @if ($errors->has('goles_2'))
                          <span class="help-block">
                              <strong>{{ $errors->first('goles_2') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>                        
              <div class="col-md-2">
                <div class="form-group bmd-form-group {{ $errors->has('publico') ? ' has-error' : '' }}">
                  <div class="form-check form-check-inline">
                  <label id="publico" class="form-check-label">
                    <input id="publicoval" name="publico" {{$encuentro_equipo->publico}}  class="form-check-input" type="checkbox">
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
