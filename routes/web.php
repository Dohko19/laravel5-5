 <?php
// App\User::create([
// 'name' => 'Solexvintel',
// 'email' => 'solexvintel@encuesta.com',
// 'password' => bcrypt('Solex2018'),
// ]);

//Solex2018
Route::get('registro', 'UsuariosController@b')->name('registro');
Route::get('/', 'UsuariosController@index')->name('inicio');
Route::get('resultados','UsuariosController@resultado')->name('resultado');
Route::post('/','UsuariosController@store');
Route::post('/encuesta1','EncuestaController@storeP1');
Route::post('/encuesta2','EncuestaController@storeP2');
Route::post('/encuesta3','EncuestaController@storeP3');
Route::post('/encuesta4','EncuestaController@storeP4');
Route::post('/encuesta5','EncuestaController@storeP5');
Route::post('/encuesta6','EncuestaController@storeP6');
Route::post('/encuesta7','EncuestaController@storeP7');
Route::post('/encuesta8','EncuestaController@storeP8');
Route::post('/encuesta9','EncuestaController@storeP9');
Route::post('/encuesta10','EncuestaController@storeP10');
Route::post('/encuesta11','EncuestaController@storeP11');
Route::post('/encuesta12','EncuestaController@storeP12');
Route::post('/encuesta13','EncuestaController@storeP13');
Route::post('/encuesta14','EncuestaController@storeP14');
Route::post('/encuesta15','EncuestaController@storeP15');
Route::post('/encuesta16','EncuestaController@storeP16');
Route::post('/encuesta17','EncuestaController@storeP17');
Route::post('/encuesta18','EncuestaController@storeP18');
Route::post('/ResultadosUsuario/{id}','UsuariosController@verRes');
Route::get('/ResultadosUsuario/{id}','UsuariosController@verRes')->name('VerResultado');
Route::resource('encuesta','UsuariosController');
Route::get('login', 'Auth\LoginController@showloginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('Fin','UsuariosController@email')->name('email');

// Display view
Route::get('datatable', 'DataTablesController@datatable');
// Get Data
Route::get('datatable/getdata', 'DataTablesController@getPosts')->name('datatable/getdata');
Route::get('datatable/getres', 'DataTablesController@getRes')->name('datatable/getres');
//Excel data
Route::get('excel', 'ExcelExportData@export')->name('csv');
Route::get('pragexcel', 'ExcelExportData@pragexport')->name('exprag');

//--------PDP ENCUESTAS CATEL------//

Route::resource('catel', 'CatelController');
Route::get('introduccion_PDP', 'CatelController@index2')->name("index2");
Route::get('Aviso_de_Privacidad', 'CatelController@avisoprivacidad')->name("avisoprivacidad");
Route::get('Registro', 'CatelController@registro')->name("registro");
Route::resource('CatelFoto', 'ImagenCatelController');
Route::resource('CatelEncuesta', 'CatelEncuestaController');