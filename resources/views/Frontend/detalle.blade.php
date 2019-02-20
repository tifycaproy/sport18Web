@extends ('Frontend.layouts.layout')

@section('contenido')
<div class="tg-sliderbox" style="height: 30%">
	<div class="tg-imglayer">
		<img src="{{asset('images/bg.png')}}" alt="">
		
	</div>
</div>
<section class="tg-main-section tg-haslayout">
	<div class="container">
		<h1>{{ $noticia->titulo }}</h1>
		<div class="col-md-6 p-3">
		@if ($noticia->url_imagen != NULL)
			<img src="{{asset('images/noticias')}}/{{ $noticia->url_imagen }}" alt="">
		@endif	
		@if ($noticia->url_multimedia != NULL)
			<div class="p-4">
				{!! html_entity_decode($noticia->url_multimedia) !!}
			</div>
			
		@endif	
		</div>
		
		<div class="">
			{!! html_entity_decode( $noticia->resumen) !!}
		

			{!! html_entity_decode( $noticia->descripcion) !!}
		</div>
		@if (count($galeria)>0)
			{{-- expr --}}
		
		<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
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
				  					<img width="100%" src="{{ asset('images/noticias') }}/{{ $galeria[$i]->url }}" alt="">
				  				@elseif($galeria[$i]->tipo == 2)
						     		<video src="{{ asset('videos/noticias') }}/{{ $galeria[$i]->url }}" autobuffer autoloop loop controls></video>
						     	@endif
						    </div>
				  		@endif
				  		@if ($i > 0)
				  			<div class="item">
						      @if ($galeria[$i]->tipo == 1)
				  					<img width="100%" src="{{ asset('images/noticias') }}/{{ $galeria[$i]->url }}" alt="">
				  				@elseif($galeria[$i]->tipo == 2)
						     		<video width="100%" src="{{ asset('videos/noticias') }}/{{ $galeria[$i]->url }}" autobuffer autoloop loop controls></video>
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
			@endif
		
	</div>
</div>
</section>
@endsection
@push('scripts')

@endpush
