@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Jugadores</h4>
                  <a href="{{ route('formjugador')}}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">add_comment</i>
                  </button>
                   Agregar Jugador</a>
                  <a href="{{ route('formequipo')}}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">add_comment</i>
                  </button>
                    Agregar Equipo</a>
                  <a href="{{ route('formposicion')}}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">add_comment</i>
                  </button>
                    Agregar Posición</a>
                  <a href="{{ route('formclasificacion')}}" class="card-category">
                    <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                      <i class="material-icons">add_comment</i>
                    </button>
                      Agregar Clasificación</a>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive table-shopping">
                    <input id="mostra_vista" value="jugadores" hidden disabled>
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                            Foto
                          </th><th>
                          Nombres
                        </th>
                        <th>
                          Equipo
                        </th>
                        <th>
                          Posición
                        </th>
                        <th>
                          Clasificación
                        </th>
                        <th>
                          Público
                          </th>
                        <th>
                        Fecha Publicación
                        </th>
												<th>
													Acciones
												</th>
                      </tr></thead>
                      <tbody>

                        @foreach($jugadores as $jugador)
                        <tr>
                          <td>
                              <div class="img-container" style="border-collapse: collapse;">
                                <img src="../images/jugadores/{{ $jugador->img }}" alt="...">
                              </div>
                          </td>
                          <td>
                              {{ $jugador->nombres }}
                          </td>
                          <td>
                            {{ $jugador->equipo }}
                          </td>
                          <td>
                            {{ $jugador->posicion }}
                          </td>
                          <td>
                            {{ $jugador->clasificacion }}
                          </td>
                          <td>
                            {{ $jugador->publico }}
                          </td>
                          <td>
                            {{ $jugador->updated_at}}
                          </td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarjugador',['id'=>$jugador->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarjugador',['id'=>$jugador->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
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
