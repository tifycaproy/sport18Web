
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agencia Sport 18</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/normalize.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/customScrollbar.css')}}">
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/color.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<script src="{{asset('js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation navbar-collapse collapse" aria-expanded="true" style="">
			<span id="tg-close" class="tg-close fas fa-close"><i class="fas fa-window-close"></i></span>
			<div class="tg-colhalf">
				<ul>
					<li><a href="{{ route('/') }}">Inicio</a></li>
					<li><a href="{{ route('noticia') }}">Noticias</a></li>
					<li><a href="{{ route('jugadores') }}">Jugadores</a></li>
				</ul>
			</div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								{{-- <div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fas fa-arrow-right"></i>
									</button>
								</div> --}}
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										{{-- <nav class="tg-addnav">
											<ul>
												<li><a href="javascript()" data-toggle="modal" data-target="#tg-login">login</a></li>
												<li><a href="javascript()" data-toggle="modal" data-target="#tg-register">Register</a></li>
												<li>
													<div class="tg-cart">
														<a href="javascript:void(0)" class="dropdown-toggle" id="tg-cartdropdown" data-toggle="dropdown">
															<i class="fas fa-shopping-cart"></i>
														</a>
														<div class="tg-cartcontent dropdown-menu" aria-labelledby="tg-cartdropdown">
															<ul>
																<li>
																	<figure>
																		<a href="#">
																			<img src="images/thumbnails/img-01.jpg" alt="image description">
																		</a>
																	</figure>
																	<div class="tg-product-detail">
																		<h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
																		<span class="tg-price">Price: $23</span>
																		<a class="tg-delete" href="#"></a>
																	</div>
																</li>
																<li>
																	<figure>
																		<a href="#">
																			<img src="images/thumbnails/img-02.jpg" alt="image description">
																		</a>
																	</figure>
																	<div class="tg-product-detail">
																		<h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
																		<span class="tg-price">Price: $23</span>
																		<a class="tg-delete" href="#"></a>
																	</div>
																</li>
																<li>
																	<figure>
																		<a href="#">
																			<img src="images/thumbnails/img-03.jpg" alt="image description">
																		</a>
																	</figure>
																	<div class="tg-product-detail">
																		<h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
																		<span class="tg-price">Price: $23</span>
																		<a class="tg-delete" href="#"></a>
																	</div>
																</li>
																<li>
																	<div class="tg-btnbox">
																		<strong class="tg-carttotal">Total: $134</strong>
																		<a class="tg-btn" href="#"><span>checkout</span></a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<a id="tg-btn-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
												</li>
											</ul>
										</nav> --}}
									</div>
									<div class="tg-colhalf">
										{{-- <ul class="tg-socialicons">
											<li>
												<a href="#">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul> --}}
									</div>
								</div>
							</nav>
						</div>
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fas fa-bars"></i>
								</button>
								<strong class="tg-logo">
									<a href="{{ route('/') }}"><img src="{{ asset('images/logo.png') }}" alt="image description"></a>
								</strong>
							</div>
							<div id="tg-navigation" class="tg-navigation">
								{{-- <div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="#">Main</a>
                                            <ul class="tg-dropdown-menu">
                                                <li class="active"><a href="index.html">home1</a></li>
                                                <li><a href="index2.html">home2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">team</a>
                                            <ul class="tg-dropdown-menu">
                                                <li><a href="playergrid-v1.html">playergrid-v1</a></li>
                                                <li><a href="playergrid-v2.html">playergrid-v2</a></li>
                                                <li><a href="playerdetail.html">playergrid detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="buyticket.html">Buy Tickets</a></li>
                                        <li>
                                            <a href="#">Match Results</a>
                                            <ul class="tg-dropdown-menu">
                                                <li><a href="matchresult.html">match result</a></li>
                                                <li><a href="matchresultdetail.html">match result detail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="tg-colhalf" style="margin-left: 200px">
                                    <ul>
                                        <li>
                                            <a href="{{ route('/') }}">Inicio</a>
                                           {{--  <ul class="tg-dropdown-menu">
                                                <li><a href="fixtures.html">fixtures</a></li>
                                                <li><a href="fixturedetail.html">fixture detail</a></li>
                                            </ul> --}}
                                        </li>
                                       {{--  <li>
                                            <a href="#">pro soccer media</a>
                                            <ul class="tg-dropdown-menu">
                                                <li><a href="soccermedia-1.html">pro soccer media1</a></li>
                                                <li><a href="soccermedia-2.html">pro soccer media2</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ route('noticia') }}">Noticias</a></li>
                                         <li><a href="{{ route('jugadores') }}">Jugadores</a></li>

                                        {{-- <li>
                                            <a href="#"><i class=" fas fa-navicon"></i></a>
                                            <ul>
                                                <li><a href="aboutus.html">about us</a></li>
                                                <li><a href="shoplist.html">shop list</a></li>
                                                <li><a href="shopgrid.html">shop grid</a></li>
                                                <li><a href="productsingle.html">shop detail</a></li>
                                                <li><a href="bloglist.html">blog list</a></li>
                                                <li><a href="bloggrid.html">blog grid</a></li>
                                                <li><a href="blogdetail.html">blog detail</a></li>
                                                <li><a href="404.html">404 error</a></li>
                                                <li><a href="comming-soon.html">comming soon</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->

		@yield('contenido')

		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-haslayout tg-footerinfobox">
				<div class="tg-bgboxone" style="width: 100%"></div>
				{{-- <div class="tg-bgboxtwo"></div> --}}
				<div class="tg-footerinfo">
					<div class="container">
						<div class="row">
							{{-- <div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-posttitle">
										<h3>signup newsletter</h3>
									</div>
									<div class="tg-description">
										<p>@isset ($descripcion)

										    {{ $descripcion }}
										@endisset</p>
									</div>
									<form class="tg-form-newsletter">
										<fieldset>
											<div class="form-group">
												<input type="email" class="form-control" name="email" placeholder="Email">
											</div>
											<button class="tg-btn" type="submit">Registras</button>
										</fieldset>
									</form>
									 <div class="tg-posttitle">
										<h3>popular tags</h3>
									</div>
									<div class="tg-tags">
										<a class="tg-tag" href="#">fashion</a>
										<a class="tg-tag" href="#">travel</a>
										<a class="tg-tag" href="#">blog</a>
										<a class="tg-tag" href="#">sports</a>
										<a class="tg-tag" href="#">magazine</a>
										<a class="tg-tag" href="#">ui</a>
										<a class="tg-tag" href="#">tech</a>
										<a class="tg-tag" href="#">fun time</a>
										<a class="tg-tag" href="#">soccer</a>
									</div> 
								</div>
							</div> --}}
							
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-haslayout">
										<strong class="tg-logo">
											<a href="{{ route('/') }}">
												<img style="width: 50%" src="{{ asset('images/logo_white.png') }}" alt="">
											</a>
										</strong>
									</div>
									<div class="tg-description">
										<p>@isset ($descripcion)

										    {{ $descripcion }}
										@endisset</p>
									</div>
									<ul class="tg-contactinfo">
										<li>
											<i class="fas fa-home"></i>
											<address>@isset ($direccion)

										    {{ $direccion }}
										@endisset</address>
										</li>
										@isset ($email)
										    <li>
											<i class="fas fa-envelope-o"></i>
											<a href="{{ $email }}">{{ $email }}</a>
										</li>
										@endisset
										@isset ($telefono)
										  <li>
											<i class="fas fa-phone"></i>
											<span>{{ $telefono }}</span>
										</li>  
										@endisset
										
									</ul>
									{{-- <div class="tg-haslayout">
										<a class="tg-btn" href="#">read more</a>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<span class="tg-copyright">&copy; 2019  |  All Rights Reserved</span>
					<nav class="tg-footernav">
						<ul>
							<li><a href="{{ route('/') }}">Inicio</a></li>
							<li><a href="{{ route('noticia') }}">Noticias</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->



    <script src="{{asset('js/jquery-library.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/customScrollbar.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.js')}}"></script>
	<script src="{{asset('js/isotope.pkgd.js')}}"></script>
	<script src="{{asset('js/prettyPhoto.js')}}"></script>
	<script src="{{asset('js/swiper.min.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script src="{{asset('js/countTo.js')}}"></script>
	<script src="{{asset('js/appear.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>


@stack('scripts')
</body>
</html>
