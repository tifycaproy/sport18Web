@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="jugadores" hidden disabled>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Crear Clasificación</h4>
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
            <a href="{{ route('formposicion')}}" class="card-category">
              <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                <i class="material-icons">photo_filter</i>
              </button>
               Agregar Posición</a>
        </div>
        <div class="card-body">
          <form action="{{ route('ingresarclasificacion')}}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}

          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                {!! Form::label('descripcion', 'Nombre de la Clasificación') !!}
                <input type="text" name="descripcion" class="form-control" required autofocus>
                @if ($errors->has('descripcion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <input class="btn btn-primary pull-right" type="submit" value="Crear Clasificación">
          <div class="clearfix"></div>
          </form>

        </div>
      </div>
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Clasificaciones</h4>
          <p class="card-category">Todos los campos registrados</p>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
        <div class="card-body">
          <div class="table-responsive">            
            <table class="table">
              <thead class=" text-primary">
                <tr><th>
                  Clasificación
                </th>               
                <th>
                Fecha Publicación
                </th>
                <th>
                  Acciones
                </th>
              </tr></thead>
              <tbody>

                @foreach($clasificaciones as $clasificacion)
                <tr>
                  <td>
                      {{ $clasificacion->descripcion }}
                  </td>                
                  <td>
                    {{ $clasificacion->updated_at}}
                  </td>
                  <td class="td-actions">
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarclasificacion',['id'=>$clasificacion->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarclasificacion',['id'=>$clasificacion->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
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
