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
          <h4 class="card-title">Crear Estadistica</h4>
          <p class="card-category">Complete todos los datos</p>
        </div>
        <div class="card-body">
          {!! Form::open(['route' => 'ingresarestadistica','enctype'=>'multipart/form-data','method'=>'POST']) !!}
           {{ csrf_field() }}          
          <div class="row">
            <div class="col-md-3">
                <h4 class="title">Jugador:</h4>
                <div class="form-group bmd-form-group {{ $errors->has('id_jugador') ? ' has-error' : '' }}">                           
                  {!! Form::select('id_jugador', $jugadores, null, ['class' => 'form-control','required'=>'required']) !!}
                  @if ($errors->has('id_jugador'))
                      <span class="help-block">
                          <strong>{{ $errors->first('id_jugador') }}</strong>
                      </span>
                  @endif
                </div>
              </div>  
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('pjugados') ? ' has-error' : '' }}">
                    {!! Form::label('pjugados', 'Partidos Jugados') !!}
                    {!! Form::tel('pjugados', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    
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
                  {!! Form::tel('pganados', null, ['class' => 'form-control' , 'required' => 'required']) !!}
  
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
                    {!! Form::tel('pperdidos', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    
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
                      {!! Form::tel('pempatados', null, ['class' => 'form-control' , 'required' => 'required']) !!}
      
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
                        {!! Form::tel('goles', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        
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
                      {!! Form::tel('t_a', null, ['class' => 'form-control' , 'required' => 'required']) !!}
      
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
                        {!! Form::tel('p_j', null, ['class' => 'form-control' , 'required' => 'required']) !!}
        
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
                          {!! Form::tel('a_p', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          
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
                          {!! Form::tel('mj', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          
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
                            {!! Form::tel('v_a', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            
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
                              {!! Form::tel('amarilla', null, ['class' => 'form-control' , 'required' => 'required']) !!}
              
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
                                {!! Form::tel('roja', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                
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
                                    {!! Form::tel('titular', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                    
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
                                      {!! Form::tel('suplente', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      
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
                                        {!! Form::tel('convocatoria', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        
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
