@extends ('Frontend.layouts.layout')

@section('contenido')
<div class="tg-sliderbox" style="height: 30%">
	<div class="tg-imglayer">
		<img src="{{asset('images/bg.png')}}" alt="">
		
	</div>
</div>


<section class="tg-main-section tg-haslayout">
	
	<div class="container">
	
		<div class="row">
			@foreach ($jugadores as $jugador)
				<div class="col-sm-3 mt-5" style="text-align: center; height: 400px">
					<a href="{{ route('jugador',$jugador->id) }}" class="ahover" title="">
						<div class="img-caja">
							<img src="{{ asset('images/jugadores') }}/{{ $jugador->img }}" alt="">
						</div>
						<h3 class="mt-4">{{ $jugador->nombres }}</h3>
					</a>
				</div>
			@endforeach
			
		</div>

		

	</div>
</div>
@endsection
@push('scripts')

@endpush
