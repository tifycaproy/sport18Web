@extends ('Backend.layout.layout')
@section('link_back_none', 'd-none')
@section('content')

<input id="mostra_vista" value="estadisticas_equipos" hidden disabled>
<div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
          <i class="material-icons">assignment</i>
        </div>
      <h4 class="card-title">Posiciones de la Primera División de Venezuela - {{$ult_estadistica->fecha_ano}}-{{ substr($ult_estadistica->fecha_ano+1,2) }}</h4>
      </div>
      <div class="card-body">
        <div class="toolbar">
          <!--        Here you can write extra buttons/actions for the toolbar              -->
        </div>
        <div class="material-datatables">
          <div id="datatables_wrapper">            
              <div class="row">
                <div class="col-sm-12">
              <table id="posiciones_equipos" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" aria-describedby="datatables_info">
            <thead>
              <tr role="row">
                <th>Equipo</th>
                <th class="text-right">PJ</th>
                <th class="text-right">PG</th>
                <th class="text-right">PE</th>
                <th class="text-right">PP</th>
                <th class="text-right">Dif.G</th>
                <th class="text-right">Puntos</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                {{-- <th >GLOSARIO J:Número de partidos jugados G:El número de partidos ganados. E:Empate P:Derrotas GF:Goles a favor GC:Goles en contra DIF:Diferencia de puntos PTS:Puntos</th>
                <th >Position</th>
                <th >Office</th>
                <th >Age</th>
                <th >Start date</th>
                <th class="text-right">Actions</th> --}}
              </tr>
            </tfoot>
            <tbody>
              @foreach ($estadisticas as $estadistica)
              <tr role="row">
                  <td tabindex="0" class="sorting_1">
                      <div class="img-container" style="border-collapse: collapse;">
                          <img src="../images/equipos/{{ $estadistica->img }}" alt="...">{{ $estadistica->descripcion }}
                        </div>
                        
                  </td>
                  <td class="text-right">{{ $estadistica->p_jugado }}</td>
                  <td class="text-right">{{ $estadistica->p_ganado }}</td>
                  <td class="text-right">{{ $estadistica->p_empatado }}</td>
                  <td class="text-right">{{ $estadistica->p_perdido }}</td>
                  {{-- <td class="text-right">{{ $estadistica->g_favor }}</td>
                  <td class="text-right">{{ $estadistica->g_contra }}</td> --}}
                  <td class="text-right">{{ $estadistica->d_goles }}</td>
                  <td class="text-right text-primary sorting_1" tabindex="0">{{ $estadistica->puntos }}</td>                  
                </tr>
              @endforeach
            </tbody>
          </table></div></div>         
            </div>
        </div>
      </div>
      <!-- end content-->
    </div>
    <!--  end card  -->
  </div>
{{-- <div class="col-md-12">  
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Estadisticas de Jugadores</h4>
                  <a href="{{ route('formestadistica')}}" class="card-category">
                      <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                        <i class="material-icons">flag</i>
                      </button>
                       Agregar Estadisticas del Equipo</a>
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
            </div> --}}



@endsection

@push('scripts')
<script>
$(document).ready(function() {
  $('#posiciones_equipos').DataTable( {
      "paging":   false,
      "ordering": false,
      "info":     false,
      "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
      
            
  } );
} );</script>

@endpush
