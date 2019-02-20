<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// FRONTEND

Route::get('/', 'Frontend\homeController@index')->name('/');
Route::get('noticia', 'Frontend\homeController@noticia')->name('noticia');
Route::get('noticia/detalle/{id}', 'Frontend\homeController@detalle')->name('detalle');











// BACKEND
App::setLocale("es");

Route::resource('sliders','Backend\SliderController');
Route::resource('noticias','Backend\NoticiasController');
Route::resource('usuarios','Auth\RegisterController');
Route::resource('newsletter','Backend\NewsletterController');
Route::resource('solicitud','Backend\SolicitudController');
Route::resource('categorias','Backend\CategoriasController');
Route::resource('preguntas','Backend\PreguntasController');

/*Rutas privadas solo para usuarios autenticados*/
Route::group(['middleware' => 'auth'], function()
{
  //*************** NEWSLETTER**************************************************************
  //Listar registros de newsletter
  Route::get('/admin/newsletter', ['as' => 'vernewsletter', 'uses'=>'Backend\NewsLetterController@store']);
  Route::get('/admin/newsletters', ['as' => 'excelnewsletter', 'uses'=>'Backend\NewsLetterController@excel']); 
  //********************************** FIN NEWSLETTER*************************************************


  //*************** SLIDERSSSSSSS**************************************************************
  //Listar registros de sliders
  Route::get('/admin/slider', ['as' => 'versliders', 'uses'=>'Backend\SliderController@list']);
  //Agregar registros de Sliders
  Route::post('/admin/nuevoslider', ['as' => 'ingresarslider', 'uses'=>'Backend\SliderController@create']);
  //Buscar Slider ya registrado
  Route::get('/admin/slider/u{id}', ['as' => 'buscarslider', 'uses'=>'Backend\SliderController@onesearch']);
  //Actualizar Slider ya registrado
  Route::post('/admin/slider/u{id}', ['as' => 'actualizarslider', 'uses'=>'Backend\SliderController@update']);
  //Mostrar formulario de Sliders
  Route::get('/admin/nuevoslider', ['as' => 'formslider', 'uses'=>'Backend\SliderController@form']);
  //Eliminar registros de Sliders
  Route::get('/admin/slider/r{id}', ['as' => 'eliminarslider', 'uses'=>'Backend\SliderController@delete']);
  //********************************** FIN SLIDERSS*************************************************

  //*************************NOTIICIASSSS***********************************
  //Listar registros de Noticias
  Route::get('/admin/noticias', ['as' => 'vernoticias', 'uses'=>'Backend\NoticiasController@list']);
  //Agregar registros de Noticias
  Route::post('/admin/nuevanoticia', ['as' => 'ingresarnoticia', 'uses'=>'Backend\NoticiasController@create']);
  //Buscar Noticia ya registrado
  Route::get('/admin/noticias/u{id}', ['as' => 'buscarnoticia', 'uses'=>'Backend\NoticiasController@onesearch']);
  //Actualizar Noticia ya registrado
  Route::post('/admin/noticias/u{id}', ['as' => 'actualizarnoticia', 'uses'=>'Backend\NoticiasController@update']);
  //Mostrar formulario de Noticias
  Route::get('/admin/nuevanoticia', ['as' => 'formnoticia', 'uses'=>'Backend\NoticiasController@form']);
  //Eliminar registros de Noticias
  Route::get('/admin/noticias/r{id}', ['as' => 'eliminarnoticia', 'uses'=>'Backend\NoticiasController@delete']);
  //************************* FIN NOTIICIASSSS***********************************

//*********************** SERVICIOSSSSSSSSSS****************************************

  Route::get('admin/servicios/indexx', 'Backend\ServiciosController@index')->name('servicios.index');
  Route::get('admin/servicios/create', 'Backend\ServiciosController@create')->name('servicios.create');
  Route::post('admin/servicios/store', 'Backend\ServiciosController@store')->name('servicios.store');
   Route::get('/admin/servicios/edit/{id}', [
              'as' => 'servicios.edit', 
              'uses'=>'Backend\ServiciosController@edit'
            ]);
   Route::get('/admin/servicios/destroy/{id}', [
              'as' => 'servicios.destroy', 
              'uses'=>'Backend\ServiciosController@destroy'
            ]);
  Route::post('admin/servicios/update', 'Backend\ServiciosController@update')->name('servicios.update');

  //Listar registros de Servicios
  //Route::get('/admin/servicios', ['as' => 'verservicios', 'uses'=>'Backend\ServiciosController@index']);
  //Listar registros de Servicios
  //Route::get('/admin/servicios{id}', ['as' => 'verserviciosuno', 'uses'=>'Backend\ServiciosController@listuno']);

  // Route::get('verserviciosuno', 'Backend\ServiciosController@listuno')->name('verserviciosuno');
  // //Agregar registros de Servicio
  // Route::post('/admin/servicios', ['as' => 'ingresarservicio', 'uses'=>'Backend\ServiciosController@create']);
  // //Buscar Servicio ya registrado
  // Route::get('/admin/servicios/u{id}', ['as' => 'buscarservicio', 'uses'=>'Backend\ServiciosController@onesearch']);
  // //Actualizar Servicio ya registrado
  // Route::post('/admin/servicios/u{id}', ['as' => 'actualizarservicio', 'uses'=>'Backend\ServiciosController@update']);
  // //Mostrar formulario de Servicios
  // Route::get('/admin/nuevoservicio', ['as' => 'formservicio', 'uses'=>'Backend\ServiciosController@form']);
  // //Eliminar registros de Servicios
  // Route::get('/admin/servicios/r{id}', ['as' => 'eliminarservicio', 'uses'=>'Backend\ServiciosController@delete']);
  //*********************** FIN SERVICIOSSSSSSSSSS****************************************

  //********************** CAMPOS ****************************************
  //Agregar registro de Campos
  Route::post('/admin/campos', ['as' => 'ingresarcampo', 'uses'=>'Backend\CamposController@create']);
  //Buscar Campo ya registrado
  Route::get('/admin/campos/u{id}', ['as' => 'buscarcampo', 'uses'=>'Backend\CamposController@onesearch']);
  //Actualizar Campo ya registrado
  Route::post('/admin/campos/u{id}', ['as' => 'actualizarcampo', 'uses'=>'Backend\CamposController@update']);
  //Mostrar formulario de Campos
  Route::get('/admin/nuevocampo', ['as' => 'formcampo', 'uses'=>'Backend\CamposController@form']);
  //Eliminar registros de Campos
  Route::get('/admin/campos/r{id}', ['as' => 'eliminarcampo', 'uses'=>'Backend\CamposController@delete']);
  //********************** FIN CAMPOS ****************************************

  //********************** CATEGORIAS ****************************************
  //Agregar registro de Categorias
  Route::post('/admin/categorias', ['as' => 'ingresarcategoria', 'uses'=>'Backend\CategoriasController@store']);
  //Buscar Campo ya registrado
  Route::get('/admin/categorias/u{categorias}', ['as' => 'buscarcategoria', 'uses'=>'Backend\CategoriasController@edit']);
  //Actualizar Campo ya registrado
  Route::post('/admin/categorias/u{categorias}', ['as' => 'actualizarcategoria', 'uses'=>'Backend\CategoriasController@update']);
  //Mostrar formulario de Campos
  Route::get('/admin/nuevacategoria', ['as' => 'formcategoria', 'uses'=>'Backend\CategoriasController@create']);
  //Eliminar registros de Campos
  Route::get('/admin/categorias/r{categorias}', ['as' => 'eliminarcategoria', 'uses'=>'Backend\CategoriasController@destroy']);

  //********************** FIN CATEGORIAS ****************************************

  //********************** SECCIONES ****************************************
  //Agregar registro de Secciones
  Route::post('/admin/secciones', ['as' => 'ingresarseccion', 'uses'=>'Backend\SeccionesController@create']);
  //Buscar Seccion ya registrado
  Route::get('/admin/secciones/u{id}', ['as' => 'buscarseccion', 'uses'=>'Backend\SeccionesController@onesearch']);
  //Actualizar Campo ya registrado
  Route::post('/admin/secciones/u{id}', ['as' => 'actualizarseccion', 'uses'=>'Backend\SeccionesController@update']);
  //Mostrar formulario de Secciones
  Route::get('/admin/nuevaseccion', ['as' => 'formseccion', 'uses'=>'Backend\SeccionesController@form']);
  //Eliminar registros de Secciones
  Route::get('/admin/secciones/r{id}', ['as' => 'eliminarseccion', 'uses'=>'Backend\SeccionesController@delete']);
  //********************** FIN SECCIONES ****************************************

  //********************** comentarios ****************************************
  //Listar registros de Comentarios
  Route::get('/admin/comentarios', ['as' => 'vercomentarios', 'uses'=>'Backend\ComentariosController@list']);
  //Agregar registro de comentarios
  Route::post('/admin/comentarios', ['as' => 'ingresarcomentario', 'uses'=>'Backend\ComentariosController@create']);
  //Buscar comentario ya registrado
  Route::get('/admin/comentarios/u{id}', ['as' => 'buscarcomentario', 'uses'=>'Backend\ComentariosController@onesearch']);
  //Actualizar Comentario ya registrado
  Route::post('/admin/comentarios/u{id}', ['as' => 'actualizarcomentario', 'uses'=>'Backend\ComentariosController@update']);
  //Mostrar formulario de comentarios
  Route::get('/admin/nuevacomentario', ['as' => 'formcomentario', 'uses'=>'Backend\ComentariosController@form']);
  //Eliminar registros de comentarios
  Route::get('/admin/comentarios/r{id}', ['as' => 'eliminarcomentario', 'uses'=>'Backend\ComentariosController@delete']);
  //********************** FIN comentarios ****************************************

   //********************** Nosotros ****************************************
  //Listar registros de Nosotros
  Route::get('/admin/nosotros', ['as' => 'vernosotros', 'uses'=>'Backend\NosotrosController@index']);
  //Agregar registro de Nosotros
  Route::post('/admin/nosotros', ['as' => 'ingresarmiembro', 'uses'=>'Backend\NosotrosController@store']);
  //Buscar miembro ya registrado
  Route::get('/admin/nosotros/u{nosotros}', ['as' => 'buscarmiembro', 'uses'=>'Backend\NosotrosController@edit']);
  //Actualizar Miembro ya registrado
  Route::post('/admin/nosotros/u{nosotros}', ['as' => 'actualizarmiembro', 'uses'=>'Backend\NosotrosController@update']);
  //Mostrar formulario de Nosotros
  Route::get('/admin/nuevomiembro', ['as' => 'formmiembro', 'uses'=>'Backend\NosotrosController@create']);
  //Eliminar registros de Nosotros
  Route::get('/admin/nosotros/r{nosotros}', ['as' => 'eliminarmiembro', 'uses'=>'Backend\NosotrosController@destroy']);
  //********************** FIN Nosotros ****************************************

   //********************** JUGADORES ****************************************
  //Listar registros de Jugadores
  Route::get('/admin/jugadores', ['as' => 'verjugadores', 'uses'=>'Backend\JugadoresController@index']);
  //Agregar registro de Jugadores
  Route::post('/admin/jugadores', ['as' => 'ingresarjugador', 'uses'=>'Backend\JugadoresController@store']);
  //Buscar jugador ya registrado
  Route::get('/admin/jugadores/u{jugadores}', ['as' => 'buscarjugador', 'uses'=>'Backend\JugadoresController@edit']);
  //Actualizar jugador ya registrado
  Route::post('/admin/jugadores/u{jugadores}', ['as' => 'actualizarjugador', 'uses'=>'Backend\JugadoresController@update']);
  //Mostrar formulario de Jugadores
  Route::get('/admin/nuevojugador', ['as' => 'formjugador', 'uses'=>'Backend\JugadoresController@create']);
  //Eliminar registros de Jugadores
  Route::get('/admin/jugadores/r{jugadores}', ['as' => 'eliminarjugador', 'uses'=>'Backend\JugadoresController@destroy']);
  //********************** FIN JUGADORES ****************************************

 //********************** ESTADISTICAS ****************************************
  //Listar registros de Estadisticas
  Route::get('/admin/estadisticas', ['as' => 'verestadisticas', 'uses'=>'Backend\EstadisticasController@index']);
  //Agregar registro de Estadisticas
  Route::post('/admin/estadisticas', ['as' => 'ingresarestadistica', 'uses'=>'Backend\EstadisticasController@store']);
  //Buscar estadistica ya registrado
  Route::get('/admin/estadisticas/u{estadisticas}', ['as' => 'buscarestadistica', 'uses'=>'Backend\EstadisticasController@edit']);
  //Actualizar estadistica ya registrado
  Route::post('/admin/estadisticas/u{estadisticas}', ['as' => 'actualizarestadistica', 'uses'=>'Backend\EstadisticasController@update']);
  //Mostrar formulario de Estadisticas
  Route::get('/admin/nuevaestadistica', ['as' => 'formestadistica', 'uses'=>'Backend\EstadisticasController@create']);
  //Eliminar registros de Estadisticas
  Route::get('/admin/estadisticas/r{estadisticas}', ['as' => 'eliminarestadistica', 'uses'=>'Backend\EstadisticasController@destroy']);
  //********************** FIN ESTADISTICAS ****************************************

 //********************** Equipos ****************************************
  //Agregar registro de Equipos
  Route::post('/admin/equipos', ['as' => 'ingresarequipo', 'uses'=>'Backend\EquiposController@store']);
  //Buscar Equipo ya registrado
  Route::get('/admin/equipos/u{equipos}', ['as' => 'buscarequipo', 'uses'=>'Backend\EquiposController@edit']);
  //Actualizar Equipo ya registrado
  Route::post('/admin/equipos/u{equipos}', ['as' => 'actualizarequipo', 'uses'=>'Backend\EquiposController@update']);
  //Mostrar formulario de Equipos
  Route::get('/admin/nuevoequipo', ['as' => 'formequipo', 'uses'=>'Backend\EquiposController@create']);
  //Eliminar registros de Equipo
  Route::get('/admin/equipos/r{equipos}', ['as' => 'eliminarequipo', 'uses'=>'Backend\EquiposController@destroy']);
  //********************** FIN Equipos ****************************************

   //********************** Posiciones ****************************************
  //Agregar registro de Posiciones
  Route::post('/admin/posiciones', ['as' => 'ingresarposicion', 'uses'=>'Backend\PosicionesController@store']);
  //Buscar Posicion ya registrada
  Route::get('/admin/posiciones/u{posiciones}', ['as' => 'buscarposicion', 'uses'=>'Backend\PosicionesController@edit']);
  //Actualizar Posicion ya registrada
  Route::post('/admin/posiciones/u{posiciones}', ['as' => 'actualizarposicion', 'uses'=>'Backend\PosicionesController@update']);
  //Mostrar formulario de Posiciones
  Route::get('/admin/nuevaposicion', ['as' => 'formposicion', 'uses'=>'Backend\PosicionesController@create']);
  //Eliminar registros de Posicion
  Route::get('/admin/posiciones/r{posiciones}', ['as' => 'eliminarposicion', 'uses'=>'Backend\PosicionesController@destroy']);
  //********************** FIN Posiciones ****************************************

     //********************** Clasificaciones ****************************************
  //Agregar registro de Clasificaciones
  Route::post('/admin/clasificaciones', ['as' => 'ingresarclasificacion', 'uses'=>'Backend\ClasificacionesController@store']);
  //Buscar Clasificacion ya registrada
  Route::get('/admin/clasificaciones/u{clasificaciones}', ['as' => 'buscarclasificacion', 'uses'=>'Backend\ClasificacionesController@edit']);
  //Actualizar Clasificacion ya registrada
  Route::post('/admin/clasificaciones/u{clasificaciones}', ['as' => 'actualizarclasificacion', 'uses'=>'Backend\ClasificacionesController@update']);
  //Mostrar formulario de Clasificaciones
  Route::get('/admin/nuevaclasificacion', ['as' => 'formclasificacion', 'uses'=>'Backend\ClasificacionesController@create']);
  //Eliminar registros de Clasificacion
  Route::get('/admin/clasificaciones/r{clasificaciones}', ['as' => 'eliminarclasificacion', 'uses'=>'Backend\ClasificacionesController@destroy']);
  //********************** FIN Clasificaciones ****************************************

   //********************** preguntas ****************************************
  //Listar registros de Preguntas
  Route::get('/admin/preguntas', ['as' => 'verpreguntas', 'uses'=>'Backend\PreguntasController@index']);
  //Agregar registro de preguntas
  Route::post('/admin/preguntas', ['as' => 'ingresarpregunta', 'uses'=>'Backend\PreguntasController@store']);
  //Buscar pregunta ya registrado
  Route::get('/admin/preguntas/u{preguntas}', ['as' => 'buscarpregunta', 'uses'=>'Backend\PreguntasController@edit']);
  //Actualizar Pregunta ya registrado
  Route::post('/admin/preguntas/u{preguntas}', ['as' => 'actualizarpregunta', 'uses'=>'Backend\PreguntasController@update']);
  //Mostrar formulario de preguntas
  Route::get('/admin/nuevapregunta', ['as' => 'formpregunta', 'uses'=>'Backend\PreguntasController@create']);
  //Eliminar registros de preguntas
  Route::get('/admin/preguntas/r{preguntas}', ['as' => 'eliminarpregunta', 'uses'=>'Backend\PreguntasController@destroy']);
  //********************** FIN preguntas ****************************************

  //********************** TRAMITES ****************************************
  //Listar registros de Tramites
  Route::get('admin/solicitudes/index', 'Backend\SolicitudController@index')->name('solicitudes.index');
  Route::get('/admin/tramites', ['as' => 'vertramites', 'uses'=>'Backend\SolicitudController@store']);  
  //Buscar Tramite ya registrado
  Route::get('/admin/tramites/{id_servicio}/{id_solicitante}', ['as' => 'buscartramite', 'uses'=>'Backend\SolicitudController@edit']);
  //Actualizar estatus de Tramite ya registrado
  Route::post('/admin/tramites/{id_servicio}/{id_solicitante}', ['as' => 'actualizartramite', 'uses'=>'Backend\SolicitudController@update']);  
  //********************** FIN TRAMITES ****************************************


  //Llamar el Login de Usuario
  // Route::get('admin', ['as' => 'login', 'uses'=>'Auth\RegisterController@login']);
  //Llamar el olvido contraseña del Usuario
  // Route::post('admin', ['as' => 'request', 'uses'=>'Auth\ForgotPasswordController@remember']);
  //Cerrar la Sesión de Usuario
  // Route::post('admin', ['as' => 'cerrarsesion', 'uses'=>'Auth\RegisterController@logout']);
  //Listar registros de Usuarios

  //********************** USUARIOS ****************************************
  Route::get('/admin/usuarios', ['as' => 'verusuarios', 'uses'=>'Auth\RegisterController@list']);
  //Agregar registros de Usuarios
  Route::post('/admin/nuevousuario', ['as' => 'ingresarusuario', 'uses'=>'Auth\RegisterController@create']);
  //Buscar Usuario ya registrado
  Route::get('/admin/usuarios/u{id}', ['as' => 'buscarusuario', 'uses'=>'Auth\RegisterController@onesearch']);
  //Actualizar Usuario ya registrado
  Route::post('/admin/usuarios/u{id}', ['as' => 'actualizarusuario', 'uses'=>'Auth\RegisterController@update']);
  //Mostrar formulario de Usuario
  Route::get('/admin/nuevousuario', ['as' => 'formusuario', 'uses'=>'Auth\RegisterController@form']);
  //Eliminar registros de Usuarios
  Route::get('/admin/usuarios/r{id}', ['as' => 'eliminarusuario', 'uses'=>'Auth\RegisterController@delete']);
  // Inicio del Sistema, con login o despues del login el administrador
  Route::get('admin', 'HomeController@index')->name('index');
  //********************** FIN USUARIOS ****************************************

  Route::get('/admin/{modulo}',['as' => 'ingresarmodulo', 'uses' => 'Backend\homeController@modulos']);


  // CONFIGURACION

  Route::resource('configuracion', 'Backend\Configuracion\ConfigurarController');

  // GALERIA
  Route::get('admin/galeria/index/{tipo}/{id}', 'Backend\GaleriaController@index')->name('galeria');
  Route::get('admin/galeria/create/{tipo}/{id}', 'Backend\GaleriaController@create')->name('galeria.create');
  Route::post('admin/galeria/store', 'Backend\GaleriaController@store')->name('galeria.store');
  Route::post('admin/galeria/update', 'Backend\GaleriaController@update')->name('galeria.update');
  Route::get('admin/galeria/edit/{tipo}/{id}', 'Backend\GaleriaController@edit')->name('galeria.edit');
  Route::get('admin/galeria/destroy/{tipo}/{jugador}/{id}', 'Backend\GaleriaController@destroy')->name('galeria.destroy');


});




Auth::routes();

// Route::get('admin', 'HomeController@redireccion')->name('login');
