@extends ('Backend.layout.layout')
@section('link_back_none', 'd-none')
@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Estadisticas</h4>
                  <a href="{{ route('formestadistica')}}" class="card-category">
                      <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                        <i class="material-icons">insert_chart</i>
                      </button>
                       Agregar Estadistica de Jugador</a>
                  <a href="{{ route('formposicionequipo')}}" class="card-category">
                    <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                      <i class="material-icons">flag</i>
                    </button>
                      Agregar Estadistica de Equipo</a>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive table-shopping">
                    <input id="mostra_vista" value="estadisticas" hidden disabled>
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                                Foto
                              </th>
                          <th>
                            Jugador
                          </th>
                          <th>
                        Fecha Publicación
                        </th>
												<th>
													Acciones
												</th>
                      </tr></thead>
                      <tbody>

                        @foreach($estadisticas as $estadistica)
                        <tr>
                          <td>
                              <div class="img-container" style="border-collapse: collapse;">
                                <img src="../images/jugadores/{{ $estadistica->img }}" alt="...">
                              </div>
                          </td>
                          <td>
                              {{ $estadistica->nombres }}
                          </td>
                          <td>
                            {{ $estadistica->updated_at}}
                          </td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarestadistica',['id'=>$estadistica->id])}}'" class="btn btn-link btn-sm" data-original-title="Editar">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarestadistica',['id'=>$estadistica->id])}}'" class="btn btn-link btn-sm" data-original-title="Remover">
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
