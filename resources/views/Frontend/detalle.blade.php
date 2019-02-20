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
		<div class="col-md-6 p-0">
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
		
	</div>
</div>
</section>
@endsection
@push('scripts')

@endpush
