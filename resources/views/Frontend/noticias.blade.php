@extends ('Frontend.layouts.layout')

@section('contenido')
<div class="tg-sliderbox" style="height: 30%">
	<div class="tg-imglayer">
		<img src="{{asset('images/bg.png')}}" alt="">
	</div>
</div>
<section class="tg-main-section tg-haslayout">
	<div class="container">
		<div class="col-sm-12 col-xs-12 ">
			<div class="row">
				<div class="tg-blogpost">
					<div class="row">
						@foreach ($noticias as $noticia)
						<div class="col-sm-6 col-xs-12">
							<article class="tg-post">
								<figure class="tg-postimg">
									@if ($noticia->url_multimedia != NULL)
										{!! html_entity_decode($noticia->url_multimedia) !!}
									@endif
									@if ($noticia->url_imagen != NULL)
										<a href="{{ route('detalle',$noticia->id) }}">
											<img src="{{asset('images/noticias')}}/{{ $noticia->url_imagen }}" alt="image description">
										</a>
									@endif
									
									{{-- <figcaption>
										<ul class="tg-postmetadata">
											<li><a href="#">by admin</a></li>
											<li><a href="#">04 comments</a></li>
											<li><a href="#">lifestyle</a></li>
										</ul>
									</figcaption> --}}
								</figure>
								<div class="tg-posttitle"><h3><a href="#">{{ $noticia->titulo }}</a></h3></div>
								<div class="tg-description">
									{!! html_entity_decode($noticia->resumen) !!}
								</div>
								<a class="tg-btn" href="{{ route('detalle',$noticia->id) }}">Leer Más</a>
							</article>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')

@endpush
