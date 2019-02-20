@extends ('Backend.layout.layout')
@section('link_back', url('admin/galeria/index/'.$tipo_relacion.'/'.$jugador->id ))
@section('content')

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('galeria.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input type="text" class="form-control" id="descripcion" placeholder="..." name="descripcion">
              <input type="hidden" value="{{ $jugador->id }}" name="id_relacion">
              <input type="hidden" value="{{ $tipo_relacion }}" name="tipo_relacion" >
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <label id="publico" class="form-check-label">
                  <input name="publico" class="form-check-input" type="checkbox" value="1">
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
                  <input name="portada" class="form-check-input" type="checkbox" value="1">
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
                  <input name="tipo" class="form-control" type="radio" value="1" style="height: 20px">
                  Imagen

                </label>
                <label id="tipo2" class="form-check-label">
                  <input name="tipo" class="form-control" type="radio" value="2" style="height: 20px">
                  Video
                </label>
              </div>
            </div>
          </div>
          <div class="col-4">
              <h4 class="title">Cargar</h4>
              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                  <img src="{{URL::to('/material-dashboard-dark-edition-v2.1.0/assets')}}/img/image_placeholder.jpg" alt="..." class="img-fluid img-placeholder">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new">Buscar</span>
                    <span class="fileinput-exists">Cambiar</span><input id="imagen" name="url" type="file" name="..." >
                    @if ($errors->has('url_imagen'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url_imagen') }}</strong>
                        </span>
                    @endif
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
