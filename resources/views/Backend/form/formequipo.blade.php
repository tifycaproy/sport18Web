@extends ('Backend.layout.layout')
 @section('link_back', url('admin/jugadores'))
@section('content')

<input id="mostra_vista" value="jugadores" hidden disabled>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Crear Equipo</h4>
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
                <i class="material-icons">add_circle_outline</i>
              </button>
               Agregar Clasificación</a>
        </div>
        <div class="card-body">
          <form action="{{ route('ingresarequipo')}}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}

          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                {!! Form::label('descripcion', 'Nombre del Equipo') !!}
                <input type="text" name="descripcion" class="form-control" required autofocus>
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
          <input class="btn btn-primary pull-right" type="submit" value="Guardar">
          <div class="clearfix"></div>
          </form>

        </div>
      </div>
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Equipos</h4>
          <p class="card-category">Todos los campos registrados</p>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
        <div class="card-body">
          <div class="table-responsive">            
            <table class="table">
              <thead class=" text-primary">
                <tr><th>
                  Equipo
                </th>               
                <th>
                Fecha Publicación
                </th>
                <th>
                  Acciones
                </th>
              </tr></thead>
              <tbody>

                @foreach($equipos as $equipo)
                <tr>
                  <td>
                      {{ $equipo->descripcion }}
                  </td>                
                  <td>
                    {{ $equipo->updated_at}}
                  </td>
                  <td class="td-actions">
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarequipo',['id'=>$equipo->id])}}'" class="btn btn-white btn-sm" data-original-title="Editar">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarequipo',['id'=>$equipo->id])}}'" class="btn btn-white btn-sm" data-original-title="Remover">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
@endsection
@push('scripts')
<script  type="text/javascript" charset="utf-8" async defer></script>
@endpush
