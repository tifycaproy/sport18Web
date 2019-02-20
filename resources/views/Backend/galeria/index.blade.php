@extends ('Backend.layout.layout')

@if ($tipo_relacion == 1)
  @section('link_back', url('admin/jugadores'))
@elseif($tipo_relacion == 2)
  @section('link_back', url('admin/noticias'))
@endif



@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Galería: {{ $jugador->nombres }}</h4>
                  <a href="{{ route('galeria.create',[$tipo_relacion,$jugador->id])}}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">add_comment</i>
                  </button>
                   Agregar Imagen</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-shopping">
                    <input id="mostra_vista" value="jugadores" hidden disabled>
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                          <th> Archivo </th>
                          <th>Descripción</th>
                          <th> Portada </th>
                          <th> Publico </th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($galeria as $item)
                        @php
                          if ($item->tipo_relacion == 1) {
                           $rutaImagen = 'images/jugadores/';
                           $rutaVideo = 'videos/jugadores/';
                          }elseif($item->tipo_relacion == 2){
                            $rutaImagen = 'images/noticias/';
                            $rutaVideo = 'videos/noticias/';
                          }
                        @endphp
                          <tr>
                           <td>
                              @if ($item->tipo == 1)
                                <img src="{{ asset($rutaImagen) }}/{{ $item->url }}" alt="" width="200px">
                              @else
                                <video src="{{ asset($rutaVideo) }}/{{ $item->url }}" controls="" width="200px"></video>
                              @endif
                            </td>
                            <td>{{ $item->descripcion }}</td>
                            <td>
                              @if ($item->portada == 1)
                                SI
                              @else
                                NO
                              @endif
                            </td>
                             <td>
                              @if ($item->publico == 1)
                                SI
                              @else
                                NO
                              @endif
                            </td>
                            <td>

                              <a  rel="tooltip" title="Editar" class="btn btn-link btn-sm" href="{{ route('galeria.edit',[$item->tipo_relacion,$item->id])}}"><i class="material-icons">edit</i></a>

                              <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('galeria.destroy',[$tipo_relacion,$jugador->id,$item->id])}}'" class="btn btn-link btn-sm" data-original-title="Remover">
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
            </div>



@endsection

@push('scripts')
@endpush
