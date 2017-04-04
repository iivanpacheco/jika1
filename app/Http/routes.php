<?php

/** @file : routes.php
* @brief : todas las rutas necesarias para trabajar.
* @author : Ivan Pacheco
* @version : 1
*/

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
Route::get('/', ['uses' => 'pruebaController@index']);


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
Route::post('Usuarios2','jika@registrar_usuario');

Route::get('consultar_usuario','jika@consultar');


Route::get('listar','PeliculaController@index');


Route::get('editara/{id_usuario}','jika@editar14');

Route::post('Actualizar_usuario/{id_usuario}','jika@actualizar');

Route::get('eliminara/{id_usuario}','jika@eliminar14');




















//Formulario Registro de Dispositivo
Route::get('Registrar_Dispositivos', function () {
    return view('Registrar_Dispositivos');
});

Route::post('dispositivos2','dispotivoController@registrar_dispositivo');


Route::get('consultar_dispositivo','dispotivoController@consultar_dispositivo');


Route::get('editar/{id_dispositivo}','dispotivoController@editar14');

Route::post('Actualizar_dispositivo/{id}','dispotivoController@actualizar');

Route::get('eliminar/{id_dispositivo}','dispotivoController@eliminar14');







//Formulario Registro tipo de Dispositivos
Route::get('Registrar_Tipo_Dispositivos', function () {
    return view('Registrar_Tipo_Dispositivos');
});

Route::post('Registrar_Tipo_Dispositivos','tipo_dispositivoController@registrar_tipo_dispositivos');
Route::get('consultar_tipo_dispositivo','tipo_dispositivoController@consultar_tipo_dispositivos');

Route::get('editartp/{id_tipo_dispositivo}','tipo_dispositivoController@editar14');

Route::post('Actualizar_tipo_dispositivo/{id}','tipo_dispositivoController@actualizar');

Route::get('eliminartp/{id_tipo_dispositivo}','tipo_dispositivoController@eliminar14');











//Formulario Registro de Marcas de Dispositivos
Route::get('Registrar_Marca', function () {
    return view('Registrar_Marca');
});

Route::post('marca','marcaController@registrar_marca');


Route::get('consultar_marca','marcaController@consultar_marca');


Route::get('editarm/{id_marca}','marcaController@editar14');

Route::post('Actualizar_marca/{id}','marcaController@actualizar');

Route::get('eliminarm/{id_marca}','marcaController@eliminar14');









Route::get('Registrar_rol', function () {
    return view('Registrar_rol');
});

Route::post('rol','rolController@registrar_rol');


Route::get('consultar_rol','rolController@consultar_rol');


Route::get('editarro/{id_rol}','rolController@editar14');

Route::post('Actualizar_rol/{id}','rolController@actualizar');

Route::get('eliminarrol/{id_rol}','rolController@eliminar14');












//Formulario de los Registros
Route::get('Registro', function () {
    return view('Registro');
});

Route::post('Registro','registroController@registrar_registro');
Route::get('consultar_registro','registroController@consultar_registro');

Route::get('editarR/{id_registro}','registroController@editar14');

Route::post('Actualizar_registro/{id}','registroController@actualizar');

Route::get('eliminarm/{id_registro}','registroController@eliminar14');







Route::get('Usuarios2', function () {
    return view('Usuarios2');
});

Route::get('dispositivos2', function () {
    return view('dispositivos2');
});

Route::get('rol', function () {
    return view('rol');
});
Route::get('marca', function () {
    return view('marca');
});

Route::get('tipo_dispositivo', function () {
    return view('tipo_dispositivo');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('slider', function () {
    return view('slider');
});

Route::get('banner', function () {
    return view('banner');
});

Route::get('formulario', function () {
    return view('formulario');
});

Route::get('prueba', function () {
    return view('prueba');
});

/*Route::get('menu', function () {
    return view('menu');
});*/
Route::get('menu', ['uses' => 'pruebaController@index']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');