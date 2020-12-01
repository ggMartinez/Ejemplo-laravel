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


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/alta', function () {
    return view('alta');
})->middleware('autenticacion');




Route::get('/modificacion/{id}', 'PersonaController@listarPersonaParaModificar') ;
Route::get('/baja/{id}', 'PersonaController@listarPersonaParaEliminar') ;

Route::get('/listado/{id}', 'PersonaController@listarUnaPersona');
Route::get('/listado', 'PersonaController@listarTodasLasPersonas');

Route::post('/alta', 'PersonaController@agregarPersona');
Route::post('/baja', 'PersonaController@eliminarPersona');
Route::post('/modificacion', 'PersonaController@modificarPersona') ;
Route::post('/login','PersonaController@autenticarPersona');

