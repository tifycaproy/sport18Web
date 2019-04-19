@extends ('Backend.layout.layout')
@section('link_back', url('admin/estadisticas'))
@section('content')

<input id="mostra_vista" value="estadisticas" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script>
$(document).ready(function(){
CKEDITOR.replace( 'editor',{
uiColor:"#DCDCDC",
toolbarGroups : [
  { name: 'basicstyles', groups: [ 'basicstyles'] },
  { name: 'paragraph',   groups: [ 'list', 'indent', 'align', 'bidi' ] },
  { name: 'document',	   groups: [ 'doctools' ] },
  { name: 'editing',     groups: ['spellchecker' ] },
  { name: 'styles' },
  { name: 'colors' },
  { name: 'tools' }
]
// removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
});
});
</script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Estadistica</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('actualizarestadistica',['id'=>$estadistica->id])}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}           
           <h4 class="title">Jugador {{$estadistica->nombres}}:</h4><br>
          <div class="row">              
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('pjugados') ? ' has-error' : '' }}">
                      {!! Form::label('pjugados', 'Partidos Jugados') !!}
                      <input type="tel" name="pjugados" class="form-control" value="{{$estadistica->pjugados}}" required>
                      @if ($errors->has('pjugados'))
                          <span class="help-block">
                              <strong>{{ $errors->first('pjugados') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('pganados') ? ' has-error' : '' }}">
                    {!! Form::label('pganados', 'Partidos Ganados') !!}
                    <input type="tel" name="pganados" class="form-control" value="{{$estadistica->pganados}}" required>
                    @if ($errors->has('pganados'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pganados') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('pperdidos') ? ' has-error' : '' }}">
                      {!! Form::label('pperdidos', 'Partidos Perdidos') !!}
                      <input type="tel" name="pperdidos" class="form-control" value="{{$estadistica->pperdidos}}" required>
                      @if ($errors->has('pperdidos'))
                          <span class="help-block">
                              <strong>{{ $errors->first('pperdidos') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group bmd-form-group {{ $errors->has('pempatados') ? ' has-error' : '' }}">
                        {!! Form::label('pempatados', 'Partidos Empatados') !!}
                        <input type="tel" name="pempatados" class="form-control" value="{{$estadistica->pempatados}}" required>
                        @if ($errors->has('pempatados'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pempatados') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group {{ $errors->has('goles') ? ' has-error' : '' }}">
                          {!! Form::label('goles', 'Goles') !!}
                          <input type="tel" name="goles" class="form-control" value="{{$estadistica->goles}}" required>
                          @if ($errors->has('goles'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('goles') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                  <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('t_a') ? ' has-error' : '' }}">
                      {!! Form::label('t_a', 'TA') !!}
                      <input type="tel" name="t_a" class="form-control" value="{{$estadistica->t_a}}" required>
                      @if ($errors->has('t_a'))
                          <span class="help-block">
                              <strong>{{ $errors->first('t_a') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group bmd-form-group {{ $errors->has('p_j') ? ' has-error' : '' }}">
                        {!! Form::label('p_j', 'PJ') !!}
                        <input type="tel" name="p_j" class="form-control" value="{{$estadistica->p_j}}" required>
                        @if ($errors->has('p_j'))
                            <span class="help-block">
                                <strong>{{ $errors->first('p_j') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group {{ $errors->has('a_p') ? ' has-error' : '' }}">
                          {!! Form::label('a_p', 'A/P') !!}
                          <input type="tel" name="a_p" class="form-control" value="{{$estadistica->a_p}}" required>
                          @if ($errors->has('a_p'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('a_p') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group bmd-form-group {{ $errors->has('mj') ? ' has-error' : '' }}">
                            {!! Form::label('mj', 'MJ') !!}
                            <input type="tel" name="mj" class="form-control" value="{{$estadistica->mj}}" required>
                            @if ($errors->has('mj'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mj') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group bmd-form-group {{ $errors->has('v_a') ? ' has-error' : '' }}">
                              {!! Form::label('v_a', 'VA') !!}
                              <input type="tel" name="v_a" class="form-control" value="{{$estadistica->v_a}}" required>
                              @if ($errors->has('v_a'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('v_a') }}</strong>
                                  </span>
                              @endif
                            </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group bmd-form-group {{ $errors->has('amarilla') ? ' has-error' : '' }}">
                                {!! Form::label('amarilla', 'Tarjetas Amarillas') !!}
                                <input type="tel" name="amarilla" class="form-control" value="{{$estadistica->amarilla}}" required>
                                @if ($errors->has('amarilla'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amarilla') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group bmd-form-group {{ $errors->has('roja') ? ' has-error' : '' }}">
                                  {!! Form::label('roja', 'Tarjetas Rojas') !!}
                                  <input type="tel" name="roja" class="form-control" value="{{$estadistica->roja}}" required>
                                  @if ($errors->has('roja'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('roja') }}</strong>
                                      </span>
                                  @endif
                                </div>
                              </div>
                              
                                <div class="col-md-2">
                                    <div class="form-group bmd-form-group {{ $errors->has('titular') ? ' has-error' : '' }}">
                                      {!! Form::label('titular', 'Cant. Veces Titular') !!}
                                      <input type="tel" name="titular" class="form-control" value="{{$estadistica->titular}}" required>
                                      @if ($errors->has('titular'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('titular') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="form-group bmd-form-group {{ $errors->has('suplente') ? ' has-error' : '' }}">
                                        {!! Form::label('suplente', 'Cant. Veces Suplente') !!}
                                        <input type="tel" name="suplente" class="form-control" value="{{$estadistica->suplente}}" required>
                                        @if ($errors->has('suplente'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('suplente') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group bmd-form-group {{ $errors->has('convocatoria') ? ' has-error' : '' }}">
                                          {!! Form::label('convocatoria', 'Convocatorias') !!}
                                          <input type="tel" name="convocatoria" class="form-control" value="{{$estadistica->convocatoria}}" required>
                                          @if ($errors->has('convocatoria'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('convocatoria') }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                      </div>          
          </div>          
           
          
            <input class="btn btn-primary pull-right" id="submit" type="submit" value="Guardar">
          <div class="clearfix"></div>
{!! Form::close() !!}
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
@endsection
