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
    return view('welcome');
});



Route::get('/inicio/{nombre}/{apellido}/{correo}', 'PersonaController@hola');

Route::get('/lista', 'PersonaController@listarTodos');
Route::get('/lista/{id}', 'PersonaController@listarUno');
Route::get('/persona', function () {
    return view('persona');
});
Route::post('/persona/crear','PersonaController@crear');
