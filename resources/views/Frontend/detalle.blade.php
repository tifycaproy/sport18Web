@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-8" style="background-image: url(&quot;{{asset('images/slide-2.jpg')}}&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Detalles del Coche</h2>
                <h4>Powerful Inventory Marketing, Fully Integrated</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                <li><a href="{{route('/')}}">Inicio</a></li>
                <li><a href="{{route('categorias_coches')}}">Categorías</a></li>
                <li><a href="{{route('categorias/listado')}}">Listado</a></li>
                    <li>Detalle del Coche</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h2>2014 Porsche Boxster Type S Convertible</h2>
                        <span class="margin-top-10">Our template platform will maximize the exposure of your inventory online</span> 
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 
                    <!--OPEN OF SLIDER-->
                    <div class="listing-slider">
                        <!-- <div class="angled_badge red">
                            <span>Just Arrived</span>
                        </div> -->
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">
                                    <li data-thumb="{{asset('images/boxster1_slide.jpg')}}"> <img src="{{asset('images/boxster1_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster1.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster4_slide.jpg')}}"> <img src="{{asset('images/boxster4_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster4.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster5_slide.jpg')}}"> <img src="{{asset('images/boxster5_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster5.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster8_slide.jpg')}}"> <img src="{{asset('images/boxster8_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster8.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster10_slide.jpg')}}"><img src="{{asset('images/boxster10_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster10.jpg')}}" /> </li>
                                    <!-- full -->
                                    <li data-thumb="{{asset('images/boxster2_slide.jpg')}}"> <img src="{{asset('images/boxster2_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster2.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster3_slide.jpg')}}"> <img src="{{asset('images/boxster3_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster3.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster6_slide.jpg')}}"> <img src="{{asset('images/boxster6_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster6.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster7_slide.jpg')}}"> <img src="{{asset('images/boxster7_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster7.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster9_slide.jpg')}}"> <img src="{{asset('images/boxster9_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster9.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster11_slide.jpg')}}"> <img src="{{asset('images/boxster11_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster11.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster12_slide.jpg')}}"> <img src="{{asset('images/boxster12_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster12.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster13_slide.jpg')}}"> <img src="{{asset('images/boxster13_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster13.jpg')}}" /> </li>
                                    <li data-thumb="{{asset('images/boxster14_slide.jpg')}}"> <img src="{{asset('images/boxster14_slide.jpg')}}" alt="" data-full-image="{{asset('images/boxster14.jpg')}}" /> </li>
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">
                                    <li data-thumb="{{asset('images/thumbnail1.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail1.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail2.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail2.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail3.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail3.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail4.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail4.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail5.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail5.jpg')}}" alt="" /></a> </li>
                                    <!-- full -->
                                    <li data-thumb="{{asset('images/thumbnail6.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail6.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail7.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail7.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail8.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail8.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail9.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail9.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail10.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail10.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail11.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail11.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail12.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail12.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail13.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail13.jpg')}}" alt="" /></a> </li>
                                    <li data-thumb="{{asset('images/thumbnail14.jpg')}}"> <a href="#"><img src="{{asset('images/thumbnail14.jpg')}}" alt="" /></a> </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--CLOSE OF SLIDER--> 
                    <!--Slider End-->
                    <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#vehicle" data-toggle="tab">Perfil del vehículo</a></li>
                            <li><a href="#features" data-toggle="tab">Equipamiento</a></li>
                            <li><a href="#technical" data-toggle="tab">Daños</a></li>
                            <li><a href="#location" data-toggle="tab">Vehicle Location</a></li>
                            <li><a href="#comments" data-toggle="tab">Other Comments</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane fade in active" id="vehicle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate 
                                    interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante 
                                    sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.</p>
                                <p>Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi 
                                    a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a 
                                    eleifend dolor facilisis. Mauris nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                                <p>Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed 
                                    tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, 
                                    sit amet aliquam turpis dignissim ac. In at tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, 
                                    felis est pharetra ante, tincidunt feugiat libero enim sed risus.</p>
                                <p>Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, 
                                    non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. Curabitur hendrerit magna a quam semper, at tristique 
                                    mauris gravida. Donec consequat elementum lorem, ac luctus ligula. Quisque viverra fringilla mi vel aliquam. Class aptent taciti sociosqu
                                    ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="tab-pane fade" id="features">
                                <ul class="fa-ul">
                                    <li><i class="fa-li fas fa-check"></i> Adaptive Cruise Control</li>
                                    <li><i class="fa-li fas fa-check"></i> Airbags</li>
                                    <li><i class="fa-li fas fa-check"></i> Air Conditioning</li>
                                    <li><i class="fa-li fas fa-check"></i> Alarm System</li>
                                    <li><i class="fa-li fas fa-check"></i> Anti-theft Protection</li>
                                    <li><i class="fa-li fas fa-check"></i> Audio Interface</li>
                                    <li><i class="fa-li fas fa-check"></i> Automatic Climate Control</li>
                                    <li><i class="fa-li fas fa-check"></i> Automatic Headlights</li>
                                    <li><i class="fa-li fas fa-check"></i> Auto Start/Stop</li>
                                    <li><i class="fa-li fas fa-check"></i> Bi-Xenon Headlights</li>
                                    <li><i class="fa-li fas fa-check"></i> Bluetooth® Handset</li>
                                    <li><i class="fa-li fas fa-check"></i> BOSE® Surround Sound</li>
                                    <li><i class="fa-li fas fa-check"></i> Burmester® Surround Sound</li>
                                    <li><i class="fa-li fas fa-check"></i> CD/DVD Autochanger</li>
                                    <li><i class="fa-li fas fa-check"></i> CDR Audio</li>
                                    <li><i class="fa-li fas fa-check"></i> Cruise Control</li>
                                    <li><i class="fa-li fas fa-check"></i> Direct Fuel Injection</li>
                                    <li><i class="fa-li fas fa-check"></i> Electric Parking Brake</li>
                                    <li><i class="fa-li fas fa-check"></i> Floor Mats</li>
                                    <li><i class="fa-li fas fa-check"></i> Garage Door Opener</li>
                                    <li><i class="fa-li fas fa-check"></i> Leather Package</li>
                                    <li><i class="fa-li fas fa-check"></i> Locking Rear Differential</li>
                                    <li><i class="fa-li fas fa-check"></i> Luggage Compartments</li>
                                    <li><i class="fa-li fas fa-check"></i> Manual Transmission</li>
                                    <li><i class="fa-li fas fa-check"></i> Navigation Module</li>
                                    <li><i class="fa-li fas fa-check"></i> Online Services</li>
                                    <li><i class="fa-li fas fa-check"></i> ParkAssist</li>
                                    <li><i class="fa-li fas fa-check"></i> Porsche Communication</li>
                                    <li><i class="fa-li fas fa-check"></i> Power Steering</li>
                                    <li><i class="fa-li fas fa-check"></i> Reversing Camera</li>
                                    <li><i class="fa-li fas fa-check"></i> Roll-over Protection</li>
                                    <li><i class="fa-li fas fa-check"></i> Seat Heating</li>
                                    <li><i class="fa-li fas fa-check"></i> Seat Ventilation</li>
                                    <li><i class="fa-li fas fa-check"></i> Sound Package Plus</li>
                                    <li><i class="fa-li fas fa-check"></i> Sport Chrono Package</li>
                                    <li><i class="fa-li fas fa-check"></i> Steering Wheel Heating</li>
                                    <li><i class="fa-li fas fa-check"></i> Tire Pressure Monitoring</li>
                                    <li><i class="fa-li fas fa-check"></i> Universal Audio Interface</li>
                                    <li><i class="fa-li fas fa-check"></i> Voice Control System</li>
                                    <li><i class="fa-li fas fa-check"></i> Wind Deflector</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="technical">
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Engine</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Layout / number of cylinders</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>Displacement</td>
                                            <td>3.4 l</td>
                                        </tr>
                                        <tr>
                                            <td>Engine Layout</td>
                                            <td>Mid-engine</td>
                                        </tr>
                                        <tr>
                                            <td>Horespower</td>
                                            <td>315 hp</td>
                                        </tr>
                                        <tr>
                                            <td>@ rpm</td>
                                            <td>6,700 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>Torque</td>
                                            <td>266 lb.-ft.</td>
                                        </tr>
                                        <tr>
                                            <td>Compression ratio</td>
                                            <td>12.5 : 1</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Performance</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Top Track Speed</td>
                                            <td>173 mph</td>
                                        </tr>
                                        <tr>
                                            <td>0 - 60 mph</td>
                                            <td>4.8 s</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Transmission</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Manual Gearbox</td>
                                            <td>6-speed with dual-mass flywheel and self-adjusting clutch</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Fuel consumption</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>City (estimate)</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Highway (estimate)</td>
                                            <td>28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Body</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Length</td>
                                            <td>172.2 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Width</td>
                                            <td>70.9 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Height</td>
                                            <td>50.4 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Wheelbase</td>
                                            <td>97.4 in.</td>
                                        </tr>
                                        <tr>
                                            <td>Maximum payload</td>
                                            <td>739 lbs</td>
                                        </tr>
                                        <tr>
                                            <td>Curb weight</td>
                                            <td>2910 lbs</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Capacities</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Luggage compartment volume</td>
                                            <td>5.3 cu. ft. (front) / 4.6 cu. ft. (rear)</td>
                                        </tr>
                                        <tr>
                                            <td>Fuel Tank Capacity</td>
                                            <td>16.9 gal.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="location">
                                <div id='google-map-listing' class="contact" data-longitude='-79.38' data-latitude='43.65' data-zoom='11' style="height: 350px;" data-parallax="false"></div>
                            </div>
                            <div class="tab-pane fade" id="comments">
                                <p>Vestibulum sit amet ligula eget nibh cursus bibendum et id eros. Nam congue, dui quis consectetur blandit, neque neque mattis diam, 
                                    vitae egestas urna lectus eu turpis. In vitae commodo sem. Etiam vehicula sed ligula malesuada cursus. Cras augue elit, tempus at dignissim 
                                    sed, egestas eget leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam mollis luctus nibh et 
                                    bibendum. Morbi congue lectus nec congue congue. Nulla molestie feugiat quam ac sollicitudin. Nulla sed congue lectus. Donec blandit elit 
                                    sit amet aliquet laoreet.</p>
                                <p><img src="images/engine.png" alt="engine" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                    <div class="side-content"> 
                        <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                            <h3>Tiempo Restante</h3>
                            <h2>0d 9h 34m 46s</h2> 
                        </div>

                    
                        <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                            <h3><a href="{{route('registro')}}">Regístrate</a> o <a href="{{route('sesion')}}">Inicia Sesión</a> para hacer una oferta y ver toda la información del vehículo</h3> 
                        </div>
                    
                </div>
            </div>
            <div class="clearfix"></div>
            
        </div>
    </div>
    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush