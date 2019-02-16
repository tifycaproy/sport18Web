@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="jugadores" hidden disabled>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Equipo</h4>
          <p class="card-category">Complete todos los datos</p>
          <a href="{{ route('formjugador')}}" class="card-category">
          <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
            <i class="material-icons">add_to_queue</i>
          </button>
           Agregar Jugador</a>
           <a href="{{ route('formposicion')}}" class="card-category">
           <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
             <i class="material-icons">photo_filter</i>
           </button>
            Agregar Posición</a>
            <a href="{{ route('formclasificacion')}}" class="card-category">
              <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                <i class="material-icons">photo_filter</i>
              </button>
               Agregar Clasificación</a>
        </div>
        <div class="card-body">
          <form action="{{ route('actualizarequipo',['id'=>$equipo->id])}}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}

          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                {!! Form::label('descripcion', 'Nombre del Equipo') !!}
                <input type="text" name="descripcion" class="form-control" value="{{$equipo->descripcion}}" required autofocus>
                @if ($errors->has('descripcion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif
              </div>
            </div>
                <div class="col-md-4 col-sm-4">
                  <h4 class="title {{ $errors->has('url_imagen') ? ' has-error' : '' }}">Subir Imagen</h4>
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <img id="preview-file" src="{{URL::to('/images')}}/equipos/{{$equipo->img}}" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new no-existente">Buscar</span>
                        <span class="fileinput-exists existente">Cambiar</span>
                        <input id="imagenup" name="url_imagen" type="file" value="{{$equipo->img}}" href="{{$equipo->img}}" accept="image/png, .jpeg, .jpg, image/gif">
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
          <input class="btn btn-primary pull-right" type="submit" value="Modificar Equipo">
          <div class="clearfix"></div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
