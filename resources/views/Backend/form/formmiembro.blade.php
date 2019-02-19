@extends ('Backend.layout.layout')
@section('link_back', url('admin/nosotros'))
@section('content')

<input id="mostra_vista" value="nosotros" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script>
$(document).ready(function(){

});
</script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Crear Miembro</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
          {!! Form::open(['route' => 'ingresarmiembro','enctype'=>'multipart/form-data','method'=>'POST']) !!}
           {{ csrf_field() }}
          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('nombres') ? ' has-error' : '' }}">
                {!! Form::label('nombres', 'Nombres') !!}
                {!! Form::text('nombres', null, ['class' => 'form-control' , 'required' => 'required', 'autofocus'=> 'autofocus']) !!}

                @if ($errors->has('nombres'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('cargo') ? ' has-error' : '' }}">
                {!! Form::label('cargo', 'Cargo') !!}
                {!! Form::text('cargo', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                @if ($errors->has('cargo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cargo') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group bmd-form-group {{ $errors->has('publico') ? ' has-error' : '' }}">
                <div class="form-check form-check-inline">
                <label id="publico" class="form-check-label">
                  <input id="publicoval" name="publico"  class="form-check-input" type="checkbox">
                  Público
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
                @if ($errors->has('publico'))
                    <span class="help-block">
                        <strong>{{ $errors->first('publico') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <h4 class="title {{ $errors->has('url_imagen') ? ' has-error' : '' }}">Subir Imagen</h4>
              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                  <img src="{{URL::to('/material-dashboard-dark-edition-v2.1.0/assets')}}/img/image_placeholder.jpg" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new">Buscar</span>
                    <span class="fileinput-exists">Cambiar</span><input id="imagen" name="url_imagen" type="file" name="..." required>
                    @if ($errors->has('url_imagen'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url_imagen') }}</strong>
                        </span>
                    @endif
                  </span>
                  <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>Quitar</a>
                </div>
              </div>
            </div>
          </div>

            <input class="btn btn-primary pull-right" id="submit" type="submit" value="Crear Miembro">
          <div class="clearfix"></div>
{!! Form::close() !!}
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>

@endsection
