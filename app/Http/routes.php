<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Todas la rutas para hacer el CRUD correspondiente a la tabla de usuarios
Route::get('usuarios', function () {
    return view('usuarios');
});

//Formulario Registro de Usuarios
Route::get('Registrar_Usuarios', function () {
    return view('Registrar_Usuarios');
});
Route::get('Actualizar_usuario', function () {
    return view('Actualizar_usuario');
});

//Ruta del  metodo para insertar datos a la base de datos
Route::post('Registrar_Usuarios','jika@registrar_usuario');

Route::get('consultar_usuario','jika@consultar');


Route::get('listar','PeliculaController@index');


Route::get('editara/{id_usuario}','jika@editar14');

Route::post('Actualizar_usuario/{id_usuario}','jika@actualizar');

Route::get('eliminara/{id_usuario}','jika@eliminar14');


















//Formulario Registro de Dispositivo
Route::get('Registrar_Dispositivos', function () {
    return view('Registrar_Dispositivos');
});

Route::post('Registrar_Dispositivos','dispotivoController@registrar_dispositivo');


Route::get('consultar_dispositivo','dispotivoController@consultar_dispositivo');


Route::get('editar/{id_dispositivo}','dispotivoController@editar14');

Route::post('Actualizar_dispositivo/{id}','dispotivoController@actualizar');

Route::get('eliminar/{id_dispositivo}','dispotivoController@eliminar14');







//Formulario Registro tipo de Dispositivos
Route::get('Registrar_Tipo_Dispositivos', function () {
    return view('Registrar_Tipo_Dispositivos');
});
//Formulario Registro de Marcas de Dispositivos
Route::get('Registrar_Marca', function () {
    return view('Registrar_Marca');
});
//Formulario de los Registros
Route::get('Registro', function () {
    return view('Registro');
});