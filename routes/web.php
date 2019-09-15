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
//rutas

Route::get('/ciudades/{id}','generalController@getCiudades');

Route::resource('','principal\indexcontroller');
Route::resource('index','principal\indexcontroller');
Route::resource('registrocandidato','principal\registrocandidatocontroller');
Route::resource('registrovotante','principal\registrovotantecontroller');
Route::resource('registropartido','principal\registropartidocontroller');
Route::resource('registroadministrador','principal\registroadministradorcontroller');
Route::resource('login','principal\logincontroller');
Route::resource('registraduria','principal\indexregistraduriacontroller');
Route::resource('resultados','principal\consultaresultadoscontroller');
Route::resource('resultadogobernacion','principal\resultadogobernacioncontroller');

Route::resource('resultadoalcaldia','principal\resultadoalcaldiacontroller');
Route::resource('resultadoconcejo','principal\resultadoconcejocontroller');
