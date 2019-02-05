@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Nosotros</h4>
                  <a href="{{ route('formmiembro')}}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">add_comment</i>
                  </button>
                   Agregar Miembro</a>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <input id="mostra_vista" value="nosotros" hidden disabled>
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          Nombres
                        </th>
                        <th>
                          Cargo
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

                        @foreach($nosotros as $miembro)
                        <tr>
                          <td>
                              {{ $miembro->nombres }}
                          </td>
                          <td>
                            {{ $miembro->cargo }}
                          </td>
                          <td>
                            {{ $miembro->publico }}
                          </td>
                          <td>
                            {{ $miembro->updated_at}}
                          </td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarmiembro',['id'=>$miembro->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarmiembro',['id'=>$miembro->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
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
