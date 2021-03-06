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
// Rutas del grupo 10-11
Route::get('/', function () {
    return view('home');
});

Route::get('/registrarAlumnos', 'alumnosController@registrarAlumnos');

Route::get('/consultarAlumnos', 'alumnosController@consultarAlumnos');

Route::post('/guardarAlumno', 'alumnosController@guardarAlumno');

Route::get('/eliminarAlumno/{id}', 'alumnosController@eliminarAlumno');	

Route::get('editarAlumno/{id}', 'alumnosController@editarAlumno');

Route::post('actualizarAlumno/{id}', 'alumnosController@actualizarAlumno');

Route::get('alumnosPDF', 'alumnosController@alumnosPDF');

Route::get('carreraAlumnosPDF/{id}', 'alumnosController@carreraAlumnosPDF');

//Rutas del grupo de 14-15

Route::get('/grupo2', function () {
    return view('grupo2/home');
});















