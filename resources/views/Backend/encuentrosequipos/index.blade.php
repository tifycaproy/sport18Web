@extends ('Backend.layout.layout')
@section('link_back_none', 'd-none')
@section('content')

<input id="mostra_vista" value="estadisticas_equipos" hidden disabled>
<div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">            
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active show" href="#posiciones" data-toggle="tab">
                   Posiciones
                  <div class="ripple-container"></div>
                </a>                
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#goleadores" data-toggle="tab">
                   Goleadores
                  <div class="ripple-container"></div>
                </a>                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#asistencias" data-toggle="tab">
                   Asistencias
                  <div class="ripple-container"></div>
                </a>                
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#ultimos_resultados" data-toggle="tab">
                     Últimos Resultados
                    <div class="ripple-container"></div>
                  </a>                
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#proximos_encuentros" data-toggle="tab">
                    Próximos Encuentros
                  <div class="ripple-container"></div>
                </a>                
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#once_ideal" data-toggle="tab">
                    11 Ideal
                  <div class="ripple-container"></div>
                </a>                
              </li>                           
            </ul>
            <a href="{{ route('formposicionequipo')}}" class="card-category">
                <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                  <i class="material-icons">flag</i>
                </button>
                  Agregar Est. de Equipo</a>
            <a href="{{ route('formposicionequipo')}}" class="card-category">
                <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                  <i class="material-icons">insert_invitation</i>
                </button>
                  Agregar Ult. Resultados</a>
            <a href="{{ route('formposicionequipo')}}" class="card-category">
                <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                  <i class="material-icons">timer</i>
                </button>
                  Agregar Prox. Encuentros</a>           
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active show" id="posiciones">
          <h4 class="card-title">Primera División de Venezuela - Año {{$fecha_ano}} - Torneo de {{$texto_apertura_cierre}}</h4>
              <div class="card-body">
                  <div class="toolbar">
                    <form action="{{ route('verposicionesequiposuno')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-3">                
                          <div class="form-group bmd-form-group {{ $errors->has('fecha_ano') ? ' has-error' : '' }}">                           
                            {!! Form::select('fecha_ano', $select_fecha_ano, $fecha_ano, ['class' => 'form-control','id' => 'fecha_ano']) !!}
                            @if ($errors->has('fecha_ano'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_ano') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group {{ $errors->has('apertura_cierre') ? ' has-error' : '' }}">                        
                              <div class="togglebutton">
                                  <label>
                                    <input id="apertura_cierre" name="apertura_cierre" {{$input_apertura_cierre}} type="checkbox">
                                    <span class="toggle"></span>
                                    Apertura / Clausura
                                  </label>
                                </div>   
                              @if ($errors->has('apertura_cierre'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('apertura_cierre') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>   
                        </div>
                  </form>
                  </div>
                  <div class="material-datatables">
                    <div id="datatables_wrapper">            
                        <div class="row">
                          <div class="col-sm-12">
                        <table id="" class="table table-striped table-no-bordered table-hover dataTable dtr-inline listas" aria-describedby="datatables_info">
                      <thead>
                        <tr role="row">
                          <th >Equipo</th>
                          <th class="text-right">PJ</th>
                          <th class="text-right">PG</th>
                          <th class="text-right">PE</th>
                          <th class="text-right">PP</th>
                          <th class="text-right">Dif.G</th>
                          <th class="text-right">Puntos</th>
                          <th class="text-right">Acciones</th>
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
                        @foreach ($estadisticas as $key => $estadistica)
                        <tr role="row">
                            <td tabindex="0" class="sorting_1">
                                <div class="img-container" >
                                    {{$key+1}} <img style="height: 20px;" src="../../../images/equipos/{{ $estadistica->img }}" alt="...">{{ $estadistica->descripcion }}
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
                            <td class="text-right">                                
                                <a onclick="location.href='{{ route('buscarposicionequipo',['id'=>$estadistica->id])}}'" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i><div class="ripple-container"></div></a>
                                <a onclick="location.href='{{ route('eliminarposicionequipo',['id'=>$estadistica->id])}}'" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table></div></div>         
                      </div>
                  </div>
                </div>
                <!-- end content-->
          </div>   
          <div class="tab-pane" id="goleadores">
              <div class="card-body">
                  <div class="toolbar">                    
                  </div>
                  <div class="material-datatables">
                    <div id="datatables_wrapper">            
                        <div class="row">
                          <div class="col-sm-12">
                        <table id="" class="table table-striped table-no-bordered table-hover dataTable dtr-inline listas" aria-describedby="datatables_info">
                      <thead>
                        <tr role="row">
                          <th >Goleadores</th>                          
                          <th>Equipo</th>     
                          <th class="text-right">Goles</th>                     
                          <th class="text-right">Acciones</th>   
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
                        @foreach ($goleadores as $key => $goleador)
                        <tr role="row">                            
                            <td >{{$key+1}}. {{ $goleador->nombres }}</td>                            
                            <td>
                                <div class="img-container" >
                                   <img style="height: 20px;" src="../../../images/equipos/{{ $goleador->img }}" alt="...">{{ $goleador->descripcion }}
                                  </div>
                                  
                            </td>       
                            <td class="text-right">{{ $goleador->goles }}</td>                     
                            <td class="text-right">                                
                                <a onclick="location.href='{{ route('buscarestadistica',['id'=>$goleador->id])}}'" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i><div class="ripple-container"></div></a>
                                <a onclick="location.href='{{ route('eliminarestadistica',['id'=>$goleador->id])}}'" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table></div></div>         
                      </div>
                  </div>
                </div>
                <!-- end content-->
          </div> 
          <div class="tab-pane" id="once_ideal">
              <div class="card-body">
                  <div class="toolbar">                    
                  </div>
                  <div class="material-datatables">
                    <div id="datatables_wrapper">            
                        <div class="row">
                          <div class="col-sm-12">
                        <table id="" class="table table-striped table-no-bordered table-hover dataTable dtr-inline listas" aria-describedby="datatables_info">
                      <thead>
                        <tr role="row">
                          <th >Jugadores</th>                          
                          <th>Equipo</th>     
                          <th class="text-right">Posicion</th>                                               
                          <th class="text-right">Acciones</th>   
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
                        @foreach ($once_ideal as $key => $once)
                        <tr role="row">                            
                            <td >
                                <div class="img-container" >
                                    {{$key+1}}. <img style="height: 60px;" src="../../../images/jugadores/{{ $once->img_jugador }}" alt="..."> {{ $once->nombres }}
                                   </div>
                            </td>             
                            <td>
                                <div class="img-container" >
                                   <img style="height: 20px;" src="../../../images/equipos/{{ $once->img_equipo }}" alt="...">{{ $once->equipo }}
                                  </div>
                                  
                            </td>       
                            <td class="text-right">{{ $once->posicion }}</td>                                                                    
                            <td class="text-right">                                
                                <a onclick="location.href='{{ route('buscarjugador',['id'=>$once->id])}}'" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i><div class="ripple-container"></div></a>
                                <a onclick="location.href='{{ route('eliminarjugador',['id'=>$once->id])}}'" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table></div></div>         
                      </div>
                  </div>
                </div>
                <!-- end content-->
            </div>  
            <div class="tab-pane" id="asistencias">
                <div class="card-body">
                    <div class="toolbar">                    
                    </div>
                    <div class="material-datatables">
                      <div id="datatables_wrapper">            
                          <div class="row">
                            <div class="col-sm-12">
                          <table id="" class="table table-striped table-no-bordered table-hover dataTable dtr-inline listas" aria-describedby="datatables_info">
                        <thead>
                          <tr role="row">
                            <th >Jugadores</th>                          
                            <th>Equipo</th>     
                            <th class="text-right">TA</th>                     
                            <th class="text-right">PJ</th>
                            <th class="text-right">A/P</th>
                            <th class="text-right">Acciones</th>   
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
                          @foreach ($asistencias as $key => $asistencia)
                          <tr role="row">                            
                              <td >{{$key+1}}. {{ $asistencia->nombres }}</td>                            
                              <td>
                                  <div class="img-container" >
                                     <img style="height: 20px;" src="../../../images/equipos/{{ $asistencia->img }}" alt="...">{{ $asistencia->descripcion }}
                                    </div>
                                    
                              </td>       
                              <td class="text-right">{{ $asistencia->t_a }}</td>                     
                              <td class="text-right">{{ $asistencia->p_j }}</td>
                              <td class="text-right">{{ $asistencia->a_p }}</td>                    
                              <td class="text-right">                                
                                  <a onclick="location.href='{{ route('buscarestadistica',['id'=>$asistencia->id])}}'" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i><div class="ripple-container"></div></a>
                                  <a onclick="location.href='{{ route('eliminarestadistica',['id'=>$asistencia->id])}}'" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table></div></div>         
                        </div>
                    </div>
                  </div>
                  <!-- end content-->
              </div>      
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  
$(document).ready(function() {
  $('#fecha_ano').on('change', function(e){
    $(this).closest('form').submit();
});
$("#apertura_cierre").click( function(){
  $(this).closest('form').submit();
});
  
  $('table.listas').DataTable( {
      "paging":   false,
      "ordering": false,
      "info":     false,
      "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
  } );

  
} );
</script>

@endpush
