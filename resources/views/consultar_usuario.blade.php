<?php/** @file : consultar_usuario.blade.php
* @brief : Permitira consultar todos los usuarios, para editarlos o eliminarlos.
* @author : Ivan Pacheco
* @version : 1
* @date : 28 marzo del 2017 
*/
?>
@extends ('layout.master')
@section ('content')
<div id="Layer1" align="center">
<ul>
<body bgcolor="4A6591">
<table width="200" border="1">
  <tr bgcolor="ccccc">
    <td width="150">id  </td>
    <td width="100">nombre</td>
    <td width="100">apellido</td>
    <td width="100">identificacion</td>
    <td width="100">celular</td>
    <td width="150">genero</td>
    <td width="100">correo_electronico</td>
    <td width="100">fecha_nacimiento</td>
    <td width="100">Opciones</td>
    
  </tr>
@foreach($usuario as $clientes)

 <tr <tr bgcolor="ccccc">
    <td>{{$clientes->id}}</td>
    <td>{{$clientes->nombre}}</td>
    <td>{{$clientes->apellido}}</td>
    <td>{{$clientes->identificacion}}</td>
    <td>{{$clientes->celular}}</td>
    <td>{{$clientes->genero}}</td>
    <td>{{$clientes->correo}}</td>
    <td>{{$clientes->fecha_nacimiento}}</td>
    <td><a href ="{{url('editara', $clientes->id)}}" >Editar usuario </a> <br>
<a href ="{{url('eliminara', $clientes->id)}}" >Eliminar usuario </a></tr>
<ul>

@endforeach
</ul>
@endsection