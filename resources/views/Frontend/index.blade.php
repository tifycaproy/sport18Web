@extends ('Frontend.layouts.layout')

@section('contenido')
{{-- SLIDER --}}
	<div class="tg-sliderbox">
		<div class="tg-imglayer">
			<img src="{{asset('images/bg.png')}}" alt="image desctription">
		</div>
		<div id="tg-home-slider" class="tg-home-slider tg-haslayout">
			<div class="swiper-wrapper">
				@foreach ($sliders as $slider)
				<div class="swiper-slide">
					<div class="container">
						<figure class="floating">
							<img src="{{asset('images/sliders')}}/{{ $slider->url_imagen }}" alt="{{ $slider->titulo }}">
						</figure>
						<div class="tg-slider-content">
							<h1> {{ $slider->titulo }} <span>{{ $slider->contenido }}</span></h1>
							<div class="tg-btnbox">
								{{-- <h2>from june 27</h2> --}}
								{{-- <a class="tg-btn" href="#"><span>Leer Más</span></a> --}}
								{{-- <a class="tg-btn" href="#"><span>book my ticket</span></a> --}}
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="tg-btn-next">
				<span>next</span>
				<span class="fa fa-angle-down"></span>
			</div>
			<div class="tg-btn-prev">
				<span>prev</span>
				<span class="fa fa-angle-down"></span>
			</div>
		</div>
	</div>
	{{--  --}}
	{{-- <main id="tg-main" class="tg-main tg-haslayout"> --}}
		<section class="tg-main-section tg-haslayout">
			<div class="container">
				<h1 class="titulo">Noticias</h1>
				<div class="d-flex justify-content-end text-right mb-3">
					<a href="{{ route('noticia') }}" title="">Ver Más</a>
				</div>
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
		</section>

		<!--************************************
				Statistics Start
		*************************************-->
		<section class="tg-main-section tg-haslayout tg-bgdark">
				<div class="container">
						<h1 class="titulo_2 mb-5">Servicios</h1>
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-statistics">
								<div class="tg-statistic tg-goals">
										<i class="fas fa-search-plus servicios"></i>
									<h3>Captación de Jugadores</h3>
									{{-- <p style="color:white">Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p> --}}
								</div>
								<div class="tg-statistic tg-activeplayers ">
										<i class="far fa-newspaper servicios"></i>
									<h3>Marketing deportivo</h3>
									{{-- <p style="color:white">Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p> --}}
								</div>
								<div class="tg-statistic tg-activeteams ">
										<i class="fas fa-chart-bar servicios"></i>
									<h3>Asesoramiento</h3>
									{{-- <p style="color:white">Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p> --}}
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12">
							<div class="tg-statistics">
								<div class="tg-statistic tg-earnedawards">
										<i class="far fa-id-card servicios"></i>
									<h3>Representación<br>de futbolistas</h3>
									{{-- <p style="color:white">Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p> --}}
								</div>
								<div class="tg-statistic tg-earnedawards">
										<i class="far fa-futbol servicios"></i>
									<h3>Búsqueda de clubes<br>para jugadores</h3>
									{{-- <p style="color:white">Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p> --}}
								</div>
								<div class="tg-statistic tg-earnedawards">
										<i class="fas fa-coins servicios"></i>
									<h3>Asesoramiento<br>legal y finaciero</h3>
									{{-- <p style="color:white">Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistics End
			*************************************-->

		<!--************************************
				Video Start
		*************************************-->
		<section class="tg-videobox tg-haslayout" style="background-image: url('{{asset('images/img_video')}}/{{ $video_img }}'); background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover">
				<figure>
					{{-- <img src="{{asset('images/img_video')}}/{{ $video_img }}" alt=""> --}}
					<figcaption>
						<a class="tg-playbtn" href="@isset ($video){{$video}}@endisset" data-rel="prettyPhoto[iframe]"></a>
						<h2>@isset ($video_texto){{$video_texto}}@endisset</h2>
					</figcaption>
				</figure>
			</section>
			<!--************************************
					Video End
			*************************************-->

		<!--************************************
				Upcoming Match Start
		*************************************-->
		<section class=" tg-haslayout tg-bgstyleone">
			
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner" role="listbox">
					@php
		                $longitud = count($jugadores);
		            @endphp
		            @for ($i = 0; $i < $longitud ; $i++)

		            @if ($i == 0)
					    <div class="item active">
							<div>
								<div class="tg-bgpattrant">
									<div class="container">
										<div class="row">
											<div class="tg-upcomingmatch-counter">
												<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
													<figure style="height: 600px">
														<img src="{{ asset('images/jugadores') }}/{{ $jugadores[$i]->img }}" style="height: 100%" alt="{{ $jugadores[$i]->nombres }}">
													</figure>
												</div>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<div class="tg-contentbox">
														<div class="tg-section-heading" ><h2 style="color: black">{{ $jugadores[$i]->nombres }}</h2></div>
														<div class="tg-description">

														</div>
														
														<div class="tg-btnbox">
															<a class="tg-btn" href="#"><span>Leer Más</span></a>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
					    </div>
				    @endif
				     @if ($i > 0)
					    <div class="item">
							<div>
								<div class="tg-bgpattrant">
									<div class="container">
										<div class="row">
											<div class="tg-upcomingmatch-counter">
												<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
													<figure style="height: 600px">
														<img src="{{ asset('images/jugadores') }}/{{ $jugadores[$i]->img }}" style="height: 100%" alt="{{ $jugadores[$i]->nombres }}">
													</figure>
												</div>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<div class="tg-contentbox">
														<div class="tg-section-heading" ><h2 style="color: black">{{ $jugadores[$i]->nombres }}</h2></div>
														<div class="tg-description">

														</div>
														
														<div class="tg-btnbox">
															<a class="tg-btn" href="#"><span>Leer Más</span></a>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
					    </div>
				    @endif
				   
				    @endfor
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				   {{--  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> --}}
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    {{-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> --}}
				    <span class="sr-only">Next</span>
				  </a>
				</div>

		</section>
		<!--************************************
				Upcoming Match End
		*************************************-->
		
		<section class="tg-main-section tg-haslayout">
				<div class="container">
						<h1 class="titulo">Mesa Directiva</h1>
					<div class="col-sm-12 col-xs-12 ">
						<div class="row">
							<div class="tg-player-grid2 tg-haslayout">
								<div id="tg-player-slider" class="tg-player-slider tg-haslayout swiper-container-horizontal">
									<div class="swiper-wrapper" style="transform: translate3d(-268.75px, 0px, 0px); transition-duration: 0ms;">
										
										
										{{-- <div class="swiper-slide swiper-slide-prev" style="width: 238.75px; margin-right: 30px;">
												<figure class="tg-postimg">
													<img src="{{asset('images/directiva_1.jpg')}}" alt="image description">
													<!--<div class="tg-img-hover">-->
														<figcaption class="tg-img-hover">
															<a href="#" class="tg-theme-tag">PRESIDENTE</a>
															<div class="tg-section-heading">
																<h3><a href="#">Hustlin’ Owls</a></h3>
																
															</div>
															<div class="tg-description">
																<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
															</div>
															<ul class="tg-socialicons">
																<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
																<li><a href="#"><i class="fab fa-twitter"></i></a></li>
																<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
																<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
															</ul>
														</figcaption>
													<!--</div>-->
												</figure>
											</div> --}}
									
										@foreach ($miembros as $miembro)
										<div class="swiper-slide " style="width: 238.75px; margin-right: 30px;">
											<figure class="tg-postimg">
												<img src="{{asset('images/nosotros')}}/{{ $miembro->url_imagen }}" alt="image description">
												<figcaption class="tg-img-hover">
													<a href="#" class="tg-theme-tag">{{ $miembro->cargo }}</a>
													<div class="tg-section-heading">
														<h3 style="color: white">{{ $miembro->nombres }}</h3>
														
													</div>
													{{-- <div class="tg-description">
														<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
													</div> --}}
													<ul class="tg-socialicons">
														@isset ($miembro->facebook)
														    <li><a href="{{ $miembro->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
														@endisset
														@isset ($miembro->twitter)
														   <li><a href="{{ $miembro->twitter }}"><i class="fab fa-twitter"></i></a></li>
														@endisset
														@isset ($miembro->instagram)
														   <li><a href="{{ $miembro->instagram }}"><i class="fab fa-instagram"></i></a></li>
														@endisset
													</ul>
												</figcaption>
											</figure>
										</div>
										@endforeach


									</div>
									<div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
									<div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
					<div class="container">
							<h1 class="titulo">Contacto</h1>
						<div class="col-sm-12 col-xs-12 ">
							<div class="row">
								<div class="tg-contactus tg-haslayout">
									<div class="row">
										<div class="col-md-5 col-sm-12 col-xs-12">
											<div class="tg-contactinfobox">
												{{-- <div class="tg-section-heading"><h2>feel free to send us your queries, Suggestion &amp; Remarks</h2></div> --}}
												<div class="tg-description">
													<p>@isset ($descripcion){{ $descripcion }}@endisset</p>
												</div>
												<ul class="tg-contactinfo">
													@isset ($direccion)
													<li>
														<i class="fa fa-map-marker"></i>
														<address> {{ $direccion }} </address>
													</li>
													@endisset
													@isset ($telefono) 
													<li>
														<i class="fa fa-phone"></i>
														<span>{{ $telefono }} </span>
													</li>
													@endisset
													@isset ($email) 
													<li>
															<i class="fas fa-envelope"></i>
														<a href="{{ $email }}">{{ $email }}</a>
													</li>
													 @endisset
													{{-- <li>
														<i class="fab fa-skype"></i>
														<a href="info@domain.com">Prosoccer772</a>
													</li> --}}
													@isset ($facebook) 
													<li>
														<i class="fab fa-facebook-f"></i>
														<a href="{{ $facebook }}">{{ $facebook }}</a>
													</li>
													@endisset

													@isset ($twitter) 
													<li>
														<i class="fab fa-twitter"></i>
														<a href="{{ $twitter }}">{{ $twitter }}</a>
													</li>
													@endisset
													@isset ($instagram)
													   <li>
														<i class="fab fa-instagram"></i>
														<a href="{{ $instagram }}">{{ $instagram }}</a>
													</li> 
													@endisset
													
												</ul>
											</div>
										</div>
										<div class="col-md-7 col-sm-12 col-xs-12">
											<form action="#" method="post" class="tg-commentform help-form" id="tg-commentform">
												<fieldset>
													<div class="form-group">
														<input type="text" required="" placeholder="Nombre*" class="form-control" name="contact[name]">
													</div>
													<div class="form-group">
														<input type="email" required="" placeholder="Correo Eletrónico*" class="form-control" name="contact[email]">
													</div>
													<div class="form-group">
														<div class="tg-select">
															<select name="contact[type]">
																<option value="">Tipo de Mensaje*</option>
																<option value="Help">Discución</option>
																<option value="Help">Ayuda</option>
																<option value="Consutation">Consulta</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<textarea required="" placeholder="Mensaje*" name="contact[message]"></textarea>
													</div>
													<div class="form-group">
														<button type="submit" class="tg-btn submit-now">enviar</button>
													</div>
												</fieldset>
											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="tg-mapcontent" class="tg-mapcontent owl-carousel owl-theme" style="opacity: 1; display: block;">
						<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 10888px; left: 0px; display: block;"><div class="owl-item" style="width: 1361px;"><div class="item">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.8070273775697!2d-0.13298118405677026!3d51.516756217839884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b2d06098567%3A0x657781e4c62dccae!2s14+Tottenham+Court+Rd%2C+Fitzrovia%2C+London+W1T+1JY%2C+UK!5e0!3m2!1sen!2s!4v1468332667385"></iframe>
						</div></div><div class="owl-item" style="width: 1361px;"><div class="item">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2490.0010946428147!2d-2.3645922841588!3d51.384657927491055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487181149eed3bff%3A0x3aaf87fd82220875!2s3+Edgar+Buildings+George+St%2C+Bath%2C+Bath+and+North+East+Somerset+BA1+2FJ%2C+UK!5e0!3m2!1sen!2s!4v1468332753250"></iframe>
						</div></div><div class="owl-item" style="width: 1361px;"><div class="item">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2234.9551750898822!2d-3.212455184020526!3d55.93281498556128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c70c0bdf6d55%3A0x4129ca60bdbbdb2d!2s46+Morningside+Rd%2C+Edinburgh+EH10+4BF%2C+UK!5e0!3m2!1sen!2s!4v1468332796662"></iframe>
						</div></div><div class="owl-item" style="width: 1361px;"><div class="item">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.8450413820606!2d-1.9012604841263068!3d52.48194134680125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc8e7d47e945%3A0x936a2fd5f8da0a2b!2s27+Colmore+Row%2C+Birmingham%2C+West+Midlands+B3+2EW%2C+UK!5e0!3m2!1sen!2s!4v1468332833565"></iframe>
						</div></div></div></div>
						
						
						
					</div>
				</section>
		
	{{-- </main> --}}
	<!--************************************
			Main End
	*************************************-->
	

	


@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush