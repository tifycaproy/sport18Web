@extends ('Frontend.layouts.layout')

@section('contenido')
{{-- <div class="tg-sliderbox" style="height: 30%">
	<div class="tg-imglayer">
		<img src="{{asset('images/bg.png')}}" alt="">
		
	</div>
</div> --}}
@if (count($galeriaPortada) > 0)
@php

	# code...

	if ($galeriaPortada->tipo == 1) {
		$ruta = 'images/jugadores/'.$galeriaPortada->url;
	}elseif($galeriaPortada->tipo == 2){
		$ruta = 'videos/jugadores/'.$galeriaPortada->url;
	}
	
@endphp
		
<div class="portada" @if ($galeriaPortada->tipo == 1) style="background-image: url('{{ asset($ruta) }}');"@endif >
	@if($galeriaPortada->tipo == 2)
		<video width="100%" src="{{ asset($ruta) }}" autobuffer autoplay autoloop loop controls></video>
	@endif
</div>
@endif
<div class="container">
	<div class="row">
		<div class="img_perfil col-sm-3">
			<img src="{{ asset('images/jugadores') }}/{{ $jugador->img }}" class="img_perfil_img" alt="">
		</div>
		<div class="col-sm-9">
			<h1 class="tittle_jugador"><b>{{ $jugador->nombres }}</b></h1>
		</div>
	</div>
		
</div>

<section class="tg-main-section tg-haslayout">
	
	<div class="container">
	
		<div class="row">
			<div class="col-sm-6">
				<h4><b>Equipo:</b> {{ $jugador->equipo }} <img src="{{ asset('images/equipos') }}/{{ $jugador->logo_equipo }}" width="15%" class="mx-auto" alt=""></h4>
				<h4><b>Posición:</b> {{ $jugador->posicion }}</h4>
				<h4><b>Clasificación:</b> {{ $jugador->clasificacion }}</h4>
				<h4><b>Trayectoria:</b> {{ $jugador->trayectoria }}</h4>
				
			</div>
			<div class="col-sm-6 mb-5">
				<h4><b>Fecha de Nacimiento:</b> {{ $jugador->fecha_nacimiento }}</h4>
				<h4><b>Lugar de Nacimiento:</b> {{ $jugador->lugar_nacimiento }}</h4>
				<h4><b>Tipo:</b> {{ $jugador->tipo }}</h4>
				<h4><b>Peso:</b> {{ $jugador->peso }}</h4>
				<h4><b>Altura:</b> {{ $jugador->altura }}</h4>
			</div>

			<div class="col-sm-12 mt-5 table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="3">Convocatorias</th>
							<th colspan="7">Estadísticas del Jugador</th>
							<th rowspan="2">Amarilla</th>
							<th rowspan="2">Roja</th>
						</tr>
						<tr>
							<th>N°</th>
							<th>Titular</th>
							<th>Suplente</th>
							<th>PJ</th>
							<th>G</th>
							<th>P</th>
							<th>E</th>
							<th>MJ</th>
							<th>G</th>
							<th>A</th>
						</tr>
					</thead>
					<tbody>
						@if (count($estadistica)> 0)
						<tr>
							<td>{{ $estadistica->convocatoria }}</td>
							<td>{{ $estadistica->titular }}</td>
							<td>{{ $estadistica->suplente }}</td>
							<td>{{ $estadistica->pjugados }}</td>
							<td>{{ $estadistica->pganados }}</td>
							<td>{{ $estadistica->pperdidos }}</td>
							<td>{{ $estadistica->pempatados }}</td>
							<td>{{ $estadistica->mj }}</td>
							<td>{{ $estadistica->goles }}</td>
							<td>{{ $estadistica->v_a }}</td>
							<td>{{ $estadistica->amarilla }}</td>
							<td>{{ $estadistica->roja }}</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>

			
		</div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				 {{--  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol> --}}

				  <div class="carousel-inner" role="listbox">
					@php
						$e = count($galeria);
					@endphp
				  	@for ($i = 0; $i < $e; $i++)
				  		@if ($i == 0)
				  			<div class="item active">
				  				@if ($galeria[$i]->tipo == 1)
				  					<img width="100%" src="{{ asset('images/jugadores') }}/{{ $galeria[$i]->url }}" alt="">
				  				@elseif($galeria[$i]->tipo == 2)
						     		<video src="{{ asset('videos/jugadores') }}/{{ $galeria[$i]->url }}" autobuffer autoloop loop controls></video>
						     	@endif
						    </div>
				  		@endif
				  		@if ($i > 0)
				  			<div class="item">
						      @if ($galeria[$i]->tipo == 1)
				  					<img width="100%" src="{{ asset('images/jugadores') }}/{{ $galeria[$i]->url }}" alt="">
				  				@elseif($galeria[$i]->tipo == 2)
						     		<video width="100%" src="{{ asset('videos/jugadores') }}/{{ $galeria[$i]->url }}" autobuffer autoloop loop controls></video>
						     	@endif
						    </div>
				  		@endif
				    @endfor
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon " style="top: 50%" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon " style="top: 50%" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		
	</div>
</div>
@endsection
@push('scripts')

@endpush
