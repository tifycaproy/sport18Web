@extends ('Frontend.layouts.layout')

@section('contenido')
    
    
<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-9" style="background-image: url(&quot;{{asset('images/1920x1080_InlineMediaGalerie_Modul3_AA7_171014.jpg')}}&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Sección de Noticia</h2>
                <h4>This is an example fullwidth page layout</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                <li><a href="{{route('/')}}">Inicio</a></li>
                    <li>Noticia</li>
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
        <div class="inner-page full-width row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-none padding-right-none">
                <div class="blog-content">
                    <div class="post-entry clearfix"> <img src="{{asset('images/car-s-go.jpg')}}" alt="" />
                        <div class="blog-title">
                            <h2 class="margin-top-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                            <strong class="margin-top-5 margin-bottom-25">Nam sollicitudin neque eu nibh pharetra mollis mauris in nisi rhoncus</strong> </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nibh libero, consequat sit amet nisl vitae, suscipit gravida mi. Nam auctor viverra sodales. Quisque posuere tincidunt
                            convallis. Ut viverra neque non diam tempor, id tincidunt mauris cursus. Donec suscipit mattis viverra. Cras sit amet odio sit amet dui aliquam tempus a ultrices felis. Proin sed
                            imperdiet ipsum, ultrices posuere leo.</p>
                        <p>Duis facilisis dapibus enim, ac venenatis nibh mattis in. Cras eu condimentum lacus, ac ultricies leo. Nunc sodales posuere ipsum a suscipit. Mauris tincidunt rutrum auctor. <a href="#">Vivamus a nunc ac augue scelerisque dapibus</a> ut sed augue. Pellentesque fermentum orci in velit pharetra, non lobortis sapien suscipit. Aenean sem nulla, dignissim et bibendum
                            et, consequat in nibh.</p>
                        <p>Nam sollicitudin neque eu nibh pharetra mollis. Mauris in nisi elit. Maecenas at metus rhoncus, facilisis tellus at, pretium orci. Vivamus consectetur sem eget neque dignissim, sit
                            amet sodales urna mattis. Vivamus ut semper dolor. Suspendisse tempus, dolor vel eleifend vestibulum, nulla eros elementum ligula, ac bibendum mi ipsum quis felis. Donec
                            adipiscing iaculis sapien nec porta. Aliquam tellus leo, posuere ut magna porta, auctor adipiscing massa. Maecenas sem mi, vestibulum id lectus non, placerat rhoncus dui.</p>
                        <blockquote> "Duis facilisis dapibus enim, ac venenatis nibh mattis in. Cras eu condimentum lacus, ac ultricies leo. Nunc sodales posuere
                            ipsum a suscipit. Mauris tincidunt rutrum auctor.</blockquote>
                        <p>Aenean vitae orci ac massa dictum rhoncus vitae cursus mauris. Donec luctus nibh eu enim auctor feugiat. Sed quis dignissim neque. Pellentesque porta est eget aliquam suscipit.
                            Fusce id scelerisque enim. Maecenas vitae facilisis nibh. Maecenas in rutrum arcu, in ultricies odio. Quisque at fringilla augue, eget convallis odio. Nulla vulputate orci ut libero
                            suscipit condimentum. Nunc nibh nulla, sollicitudin in semper nec, tincidunt vel urna. Etiam lobortis tempor mi, eget fringilla arcu tincidunt a.</p>
                        <p><a href="">Suspendisse nec dictum augue.</a> Nulla vel ipsum ut velit vulputate commodo pellentesque quis elit. Quisque dignissim vel elit eu commodo. Aenean et ullamcorper felis.
                            Suspendisse pretium at erat ac laoreet. Aliquam vel condimentum purus. Morbi sed mattis tortor. In eleifend turpis vel luctus imperdiet. Proin pharetra erat sit amet orci lacinia
                            ultricies. Fusce eleifend mi ac feugiat ultrices. Duis suscipit tincidunt sem, a congue metus laoreet in. Integer tristique molestie ligula eget volutpat. Nulla volutpat vel tellus non dap
                            bus.</p>
                        <p>Vestibulum molestie magna at eros laoreet accumsan. Pellentesque et euismod eros, ut dignissim elit. Cras venenatis non nisi nec bibendum. Aliquam tincidunt porttitor faucibus.
                            Nam in fermentum enim. Nam tincidunt consequat eros sit amet condimentum. Maecenas congue elit at tellus faucibus, aliquam ultricies tortor imperdiet. Integer porta leo risus,
                            id molestie nisl varius bibendum. Suspendisse quis metus quam. Curabitur porta pretium sem. Praesent et consectetur neque, at feugiat risus.</p>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin condimentum felis ut ultrices congue. Quisque in lacus condimentum, fringilla nisi
                            commodo, faucibus velit. Integer fermentum mauris adipiscing faucibus tristique. Praesent iaculis sed tellus quis porta. Nulla porta tincidunt libero. Ut nec purus ut lectus convallis
                            pellentesque ac non enim. Etiam suscipit eleifend tincidunt. Praesent volutpat, tortor ac molestie imperdiet, nisi quam imperdiet elit, id dapibus lacus felis sed massa. Cras ultrices
                            enim in sagittis posuere. Vestibulum ac ipsum vitae lectus pretium vestibulum ac rutrum felis. Donec consequat lacus eu mi porta ornare. Duis eget velit ac felis sollicitudin sagittis
                            vel et leo. </p>
                        <blockquote> "Aliquam tincidunt porttitor faucibus. Nam in fermentum enim. Nam tincidunt consequat eros sit amet condimentum.
                            Maecenas congue elit at tellus faucibus.</blockquote>
                        <p>Cras eu condimentum lacus, consectetur adipiscing elit. Morbi nibh libero, consequat sit amet nisl vitae, suscipit gravida mi. Nam auctor viverra sodales. Quisque posuere tincidunt
                            convallis. Ut viverra neque non diam tempor, id tincidunt mauris cursus. Donec suscipit mattis viverra. Cras sit amet odio sit amet dui aliquam tempus a ultrices felis. Proin sed
                            imperdiet ipsum, ultrices posuere leo.</p>
                        <p>Duis facilisis dapibus enim, ac venenatis nibh mattis in. Cras eu condimentum lacus, ac ultricies leo. Nunc sodales posuere ipsum a suscipit. Mauris tincidunt rutrum auctor.
                            Pellentesque fermentum orci in velit pharetra, non lobortis sapien suscipit. Aenean sem nulla, dignissim et bibendum et, consequat in nibh.</p>
                        <p>Morbi nibh libero, consequat sit amet nisl vitae, suscipit gravida mi. Nam auctor viverra sodales. Quisque posuere tincidunt convallis. Ut viverra neque non diam tempor, id
                            tincidunt mauris cursus. Donec suscipit mattis viverra. Cras sit amet odio sit amet dui aliquam tempus a ultrices felis. Proin sed imperdiet ipsum, ultrices posuere leo. Vivamus ut <a href="#">semper dolor.</a> Suspendisse tempus, dolor vel eleifend vestibulum, nulla eros elementum ligula, ac bibendum mi ipsum quis felis. Donec adipiscing iaculis sapien nec porta. Aliquam
                            tellus leo, posuere ut magna porta, auctor adipiscing massa. Maecenas sem mi, vestibulum id lectus non, placerat rhoncus dui.</p>
                        <p>Mauris in nisi elit. Maecenas at metus rhoncus, facilisis tellus at, pretium orci. Vivamus consectetur sem eget neque dignissim, sit amet sodales urna mattis. Vivamus ut semper
                            dolor. Suspendisse tempus, dolor vel eleifend vestibulum, nulla eros elementum ligula, ac bibendum mi ipsum quis felis. Donec adipiscing iaculis sapien nec porta. Aliquam tellus
                            leo, posuere ut magna porta, auctor adipiscing massa. Maecenas sem mi, vestibulum id lectus non, placerat rhoncus dui.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
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