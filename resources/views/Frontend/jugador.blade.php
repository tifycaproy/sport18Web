@extends ('Frontend.layouts.layout')

@section('contenido')
<div class="tg-sliderbox" style="height: 30%">
	<div class="tg-imglayer">
		<img src="{{asset('images/bg.png')}}" alt="">
		
	</div>
</div>
<section class="tg-main-section tg-haslayout">
	@php
		if ($galeriaPortada->tipo == 1) {
			$rutaImagen = 'images/jugadores/'.$galeriaPortada->url;
		}
	@endphp
	<div class="" style="background-image: url('{{ asset('$rutaImagen') }}'); height: 300px">
		
	</div>
	<div class="container">
		
		
	</div>
</div>
@endsection
@push('scripts')

@endpush
