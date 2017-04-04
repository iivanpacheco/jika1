<?php/** @file : consultar_tipo_dispositivo.blade.php
* @brief : Permitira consultar todos los tipos de  dispositivos, para editarlos o eliminarlos.
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
    <td width="500">tipo_dispositivo</td>
    <td width="100">descripcion</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($tipo_dispositivo as $tipo)
 <tr bgcolor="ccccc">
    <td>{{$tipo->id}}</td>
    <td>{{$tipo->tipo_dispositivo}}</td>
    <td>{{$tipo->descripcion}}</td>
    <td><a href ="{{url('editartp', $tipo->id)}}" >Editar tipo dispositivo </a> <br>
<a href ="{{url('eliminartp', $tipo->id)}}" >Eliminar tipo dispositivo </a></td>
       </tr>
<br>
@endforeach
</ul>
@endsection