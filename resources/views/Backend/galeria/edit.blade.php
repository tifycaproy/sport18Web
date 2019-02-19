@extends ('Backend.layout.layout')
@section('link_back', url('admin/galeria/index/'.$galeria->tipo_relacion.'/'.$galeria->id_relacion ))
@section('content')

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('galeria.update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input type="text" class="form-control" id="descripcion" value="{{ $galeria->descripcion }}" name="descripcion">
              <input type="hidden" value="{{ $galeria->id }}" name="id">
              <input type="hidden" value="{{ $galeria->id_relacion }}" name="id_relacion">
              <input type="hidden" value="{{ $galeria->tipo_relacion }}" name="tipo_relacion" >
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <label id="publico" class="form-check-label">
                  <input name="publico" class="form-check-input" type="checkbox" value="1" @if ($galeria->publico == 1 )
                  checked="" 
                  @endif>
                  Público
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <label id="portada" class="form-check-label">
                  <input name="portada" class="form-check-input" type="checkbox" value="1" @if ($galeria->portada == 1 )
                  checked="" 
                  @endif>
                  Portada
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <label id="tipo1" class="form-check-label">
                  <input name="tipo" class="form-control" type="radio" value="1" style="height: 20px" @if ($galeria->tipo == 1 )
                  checked="" 
                  @endif>
                  Imagen

                </label>
                <label id="tipo2" class="form-check-label">
                  <input name="tipo" class="form-control" type="radio" value="2" style="height: 20px" @if ($galeria->tipo == 2 )
                  checked="" 
                  @endif>
                  Video
                </label>
              </div>
            </div>
          </div>
          <div class="col-4">
              <h4 class="title">Cargar</h4>
              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                  @php
                    if ($galeria->tipo_relacion == 1) {
                     $rutaImagen = 'images/jugadores/';
                     $rutaVideo = 'videos/jugadores/';
                    }elseif($galeria->tipo_relacion == 2){
                      $rutaImagen = 'images/noticias/';
                      $rutaVideo = 'videos/noticias/';
                    }
                  @endphp
                  @if ($galeria->tipo == 1)
                    <img src="{{ asset($rutaImagen) }}/{{ $galeria->url }}" alt="" class="img-fluid img-placeholder">
                    @elseif($galeria->tipo == 2)
                    <video src="{{ asset($rutaVideo) }}/{{ $galeria->url }}" width="100%" autobuffer class="img-placeholder" controls ></video>
                  @endif
                  
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new">Buscar</span>
                    <span class="fileinput-exists">Cambiar</span><input id="imagen" name="url" type="file" name="..." >
                  </span>
                  <a href="#" class="btn btn-danger btn-round fileinput-exists quit d-none" data-dismiss="fileinput"><i class="fa fa-times"></i>Quitar</a>
                </div>
              </div>
            </div>

            <div class="col-12 text-center mt-5">
                <input type="submit" class="btn btn-primary" name="" value="Guardar">
              </div>
        </div>
      </form> 
    </div>
  </div>   
</div>

@endsection
@push('scripts')
<script  type="text/javascript" charset="utf-8" async defer>
   $('#imagen').change(function(){
        $('.img-placeholder').addClass('d-none');
        $('.quit').removeClass('d-none');
    });
   $('.quit').click(function(){
      $(this).addClass('d-none');
   });
</script>
@endpush
