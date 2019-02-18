@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="jugadores" hidden disabled>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Posición</h4>
          <p class="card-category">Complete todos los datos</p>
          <a href="{{ route('formjugador')}}" class="card-category">
          <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
            <i class="material-icons">add_to_queue</i>
          </button>
           Agregar Jugador</a>
           <a href="{{ route('formequipo')}}" class="card-category">
           <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
             <i class="material-icons">photo_filter</i>
           </button>
            Agregar Equipo</a>
            <a href="{{ route('formclasificacion')}}" class="card-category">
              <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                <i class="material-icons">photo_filter</i>
              </button>
               Agregar Clasificación</a>
        </div>
        <div class="card-body">
          <form action="{{ route('actualizarposicion',['id'=>$posicion->id])}}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}

          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                {!! Form::label('descripcion', 'Nombre de la Posición') !!}
                <input type="text" name="descripcion" class="form-control" value="{{$posicion->descripcion}}" required autofocus>
                @if ($errors->has('descripcion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <input class="btn btn-primary pull-right" type="submit" value="Modificar Posición">
          <div class="clearfix"></div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
