@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-1" style="background-image: url(&quot;{{asset('images/slider_a7.jpg')}}&quot;);" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                <h2>Subastas</h2>
                <h4>Unlimited Listings, Any Vehicle Type</h4>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('/')}}">Inicio</a></li>
                    <li>Subastas</li>
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
        <div class="inner-page row">
            
            <div class="row">
                <div class="inventory-wide-sidebar-left">
                    <div class=" col-md-9  col-lg-push-3 col-md-push-3">
                        <div class="car_listings sidebar margin-top-20 clearfix">
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_1">
                                <label for="vehicle_1"></label>
                                <div class="angled_badge blue">
                                    <span>405 HP</span>
                                </div>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                <img src="{{asset('images/car-1-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Sport Utility Vehicle</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">4WD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">4.8L V8</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">8-Speed Tiptronic</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">19,585</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Dark Blue Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Black / Titanium Blue</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">15 city / 21 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590497</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP1AD29P09LA65818</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button" ><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_2">
                                <label for="vehicle_2"></label>
                                <div class="angled_badge red">
                                    <span>Just Arrived</span>
                                </div>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                <img src="{{asset('images/car-2-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Convertible</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">RWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">2.9L Mid-Engine V6</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">5-Speed Manual</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">26,273</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Guards Red</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Platinum Grey</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">20 city / 30 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590271</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0AB2A74AL060306</td>
                                    </tr>
                                </tbody></table>
                                
                               
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_3">
                                <label for="vehicle_3"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2013 Porsche Panamera GTS Sedan</div>
                                <img src="{{asset('images/car-3-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Sedan</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">RWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">4.8L V8</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">6-Speed Manual</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">32,304</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Chestnut Brown Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Luxor Beige</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">16 city / 24 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590476</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0AB2A74AL060306</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_4">
                                <label for="vehicle_4"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2010 Porsche Carrera 4S All-Wheel Drive</div>
                                <img src="{{asset('images/car-4-200x150')}}.jpg" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Convertible</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">AWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">3.8L V6</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">5-Speed Manual</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">21,900</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Aqua Blue Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Platinum Grey</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">18 city / 26 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590421</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0CA2A96AS740274</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_5">
                                <label for="vehicle_5"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2012 Porsche 911 Carrera S Convertible</div>
                                <img src="{{asset('images/car-5-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Convertible</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">RWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">3.8L V6</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">6-Speed Automatic</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">9,162</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">White</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Black</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">19 city / 27 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590435</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0CB2A92CS754706</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_6">
                                <label for="vehicle_6"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2013 Porsche GTS Panamera Demonstrator</div>
                                <img src="{{asset('images/car-6-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Sedan</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">RWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">4.8L V8</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">6-Speed Semi-Auto</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">3,914</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Ruby Red Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Marsala Red</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">16 city / 24 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590499</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0AB2A74AL079264</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_7">
                                <label for="vehicle_7"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2014 Porsche Cayenne GTS Sport Utility</div>
                                <img src="{{asset('images/car-7-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Sport Utility Vehicle</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">4WD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">4.8L V8 Turbo</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">8-Speed Automatic</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">7</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Peridot Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Alcantara Black</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">15 city / 21 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590512</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP1AD29P09LA73659</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect car_sold fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_8">
                                <label for="vehicle_8"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2014 Porsche GTS Panamera Executive Edition</div>
                                <img src="{{asset('images/car-8-200x150.jpg')}}" class="preview" alt="preview">
                                <span class="sold_text">Sold</span>
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Sedan</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">RWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">4.8L V8 Turbo</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">5-Speed Automatic</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">5</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Rhodium Silver Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Agate Grey</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">16 city / 24 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590524</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0AB2A74AL092462</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_9">
                                <label for="vehicle_9"></label>
                                <a class="inventory" href="{{route('categorias/listado/detalle')}}">
                                <div class="title">2009 Porsche Carrera 4S Turbo Convertible</div>
                                <img src="{{asset('images/car-9-200x150.jpg')}}" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tbody><tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Convertible</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">AWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">3.6L V6</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">6-Speed Manual</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">114,239</td>
                                    </tr>
                                </tbody></table>
                                <table class="options-secondary">
                                    <tbody><tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Racing Yellow</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Midnight Black</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">19 city / 27 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590388</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0CB2A92CS376450</td>
                                    </tr>
                                </tbody></table>
                                
                                
                                <div class="view-details gradient_button"><i class="fas fa-plus-circle"></i> Pujar </div>
                                <div class="clearfix"></div>
                                </a>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagination_container">
                                <ul class="pagination margin-bottom-none margin-top-25 bottom_pagination md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                                    <li class="disabled"><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-lg-pull-9 col-md-pull-9 left-sidebar">
                    <div class="left_inventory">
                        <h3 class="margin-bottom-25">FILTRO DE BUSQUEDA</h3>
                        <form class="clearfix select-form padding-bottom-50">
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="year" class="css-dropdowns" tabindex="1" sb="55679103" style="display: none;">
                                    <option value="">Marca</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                    <option>2011</option>
                                    <option>2010</option>
                                    <option>2009</option>
                                    <option>2008</option>
                                    <option>2007</option>
                                    <option>2006</option>
                                    <option>2005</option>
                                    <option>2004</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="make" class="css-dropdowns" tabindex="1" sb="67146398" style="display: none;">
                                    <option value="">Tipo de Combustible</option>
                                    <option>Lorem</option>
                                    <option>ipsum</option>
                                    <option>dolor</option>
                                    <option>sit</option>
                                    <option>amet</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="model" class="css-dropdowns" tabindex="1" sb="18425414" style="display: none;">
                                    <option value="">Kilometraje</option>
                                    <option>Lorem</option>
                                    <option>ipsum</option>
                                    <option>dolor</option>
                                    <option>sit</option>
                                    <option>amet</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="body_style" class="css-dropdowns" tabindex="1" sb="41673166" style="display: none;">
                                    <option value="">Tipo de Carrocería</option>
                                    <option>Cargo</option>
                                    <option>Compact</option>
                                    <option>Convertible</option>
                                    <option>Coupe</option>
                                    <option>Hatchback</option>
                                    <option>Minivan</option>
                                    <option>Sedan</option>
                                    <option>SUV</option>
                                    <option>Truck</option>
                                    <option>Van</option>
                                    <option>Wagon</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="mileage" class="css-dropdowns" tabindex="1" sb="12272845" style="display: none;">
                                    <option value="">Año de Matriculación</option>
                                    <option>0</option>
                                    <option>&lt; 10,000</option>
                                    <option>&lt; 20,000</option>
                                    <option>&lt; 30,000</option>
                                    <option>&lt; 40,000</option>
                                    <option>&lt; 50,000</option>
                                    <option>&lt; 60,000</option>
                                    <option>&lt; 70,000</option>
                                    <option>&lt; 80,000</option>
                                    <option>&lt; 90,000</option>
                                    <option>&lt; 100,000</option>
                                    <option>&lt; 120,000</option>
                                    <option>&lt; 150,000</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="transmission" class="css-dropdowns" tabindex="1" sb="29925290" style="display: none;">
                                    <option value="">Search by Transmission</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="fuel_economy" class="css-dropdowns" tabindex="1" sb="10441537" style="display: none;">
                                    <option value="">Transmisión</option>
                                    <option>10-20 MPG</option>
                                    <option>20-30 MPG</option>
                                    <option>30-40 MPG</option>
                                    <option>40-50 MPG</option>
                                    <option>50-60 MPG</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="condition" class="css-dropdowns" tabindex="1" sb="83574175" style="display: none;">
                                    <option value="">Procedencia</option>
                                    <option>New</option>
                                    <option>Used</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="location" class="css-dropdowns" tabindex="1" sb="97697689" style="display: none;">
                                    <option value="">Tipo de Subasta</option>
                                    <option>Toronto</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Vancouver</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="price" class="css-dropdowns" tabindex="1" sb="9852231" style="display: none;">
                                    <option value="">100% de asignación</option>
                                    <option>&lt; $1,000</option>
                                    <option>&lt; $10,000</option>
                                    <option>&lt; $20,000</option>
                                    <option>&lt; $30,000</option>
                                    <option>&lt; $40,000</option>
                                    <option>&lt; $50,000</option>
                                    <option>&lt; $60,000</option>
                                    <option>&lt; $70,000</option>
                                    <option>&lt; $80,000</option>
                                    <option>&lt; $90,000</option>
                                    <option>&lt; $100,000</option>
                                </select>
                            </div>
                            <input type="reset" value="Reiniciar Filtros" class="pull-left btn-inventory margin-bottom-none md-button">
                        </form>
                        <div class="side-content row">
                            <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                <h3 class="margin-bottom-25">AÑO</h3>
                                <ul>
                                    <li><a href="#"><span>2014 <strong>(28)</strong></span></a></li>
                                    <li><a href="#"><span>2013 <strong>(172)</strong></span></a></li>
                                    <li><a href="#"><span>2012 <strong>(102)</strong></span></a></li>
                                    <li><a href="#"><span>2011 <strong>(98)</strong></span></a></li>
                                    <li><a href="#"><span>2010 <strong>(91)</strong></span></a></li>
                                    <li><a href="#"><span>2009 <strong>(27)</strong></span></a></li>
                                    <li><a href="#"><span>2008 <strong>(25)</strong></span></a></li>
                                    <li><a href="#"><span>2007 <strong>(15)</strong></span></a></li>
                                    <li><a href="#"><span>2006 <strong>(9)</strong></span></a></li>
                                    <li><a href="#"><span>2005 <strong>(3)</strong></span></a></li>
                                    
                                </ul>
                            </div>
                            <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                <h3 class="margin-bottom-25">MARCA</h3>
                                <ul>
                                    <li><a href="#"><span>Acura <strong>(2)</strong></span></a></li>
                                    <li><a href="#"><span>BMW <strong>(4)</strong></span></a></li>
                                    <li><a href="#"><span>Buick <strong>(1)</strong></span></a></li>
                                    <li><a href="#"><span>Cadillac <strong>(6)</strong></span></a></li>
                                    <li><a href="#"><span>Chevrolet <strong>(19)</strong></span></a></li>
                                    <li><a href="#"><span>Chrysler <strong>(7)</strong></span></a></li>
                                    <li><a href="#"><span>Dodge <strong>(14)</strong></span></a></li>
                                    <li><a href="#"><span>Ford <strong>(15)</strong></span></a></li>
                                    <li><a href="#"><span>GMC <strong>(9)</strong></span></a></li>
                                    <li><a href="#"><span>Hummer <strong>(3)</strong></span></a></li>
                                    
                                </ul>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container ends--> 
</section>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush
