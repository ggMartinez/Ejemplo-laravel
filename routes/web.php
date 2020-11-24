<?php

use App\Http\Controllers\PersonaController;



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

Route::get('/', function () {
    return view('inicio');
});


Route::get('/alta', function () {
    return view('alta');
});

Route::get('/baja', function () {
    return view('baja');
});

Route::get('/modificacion/{id}', 'PersonaController@listarPersonaParaModificar') ;

Route::get('/listado/{id}', 'PersonaController@listarUnaPersona');
Route::get('/listado', 'PersonaController@listarTodasLasPersonas');

Route::post('/alta', 'PersonaController@agregarPersona');
Route::post('/baja', 'PersonaController@eliminarPersona');
Route::post('/modificacion', 'PersonaController@modificarPersona') ;


