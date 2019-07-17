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

Route::get('/', 'SalasController@arreglos');

Route::get('/captura', 'CapturaController@registro');

Route::post('/crear/reservacion', 'CapturaController@crear');

Route::get('/next', 'SalasController@ver');

/* Route::get('/', function(){
    return view('elige');
}); */


Route::get('/editar', 'UpdateController@editar' );

Route::post('/editar/reservacion', 'UpdateController@update' );

Route::get('/borrar', 'UpdateController@borrar' );


/*Trabajando con el objeto date */
Route::get('/hora', 'HorasController@rango');
Route::get('/sala1', 'HorasController@sala1');

Route::get('/navidad', 'NavidadController@diasParaNavidad');