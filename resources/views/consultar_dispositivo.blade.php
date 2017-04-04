<?php/** @file : consultar_dispositivo.blade.php
* @brief : Permitira consultar todos los dispositivos, para editarlos o eliminarlos.
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
    <td width="100">serial</td>
    <td width="100">Descripcion</td>
    <td width="100">codigo_barra</td>
    <td width="150">Color</td>
    <td width="100">Modelo</td>
    <td width="150">fk_id_tipo_dispositivo</td>
    <td width="100">fk_id_marca</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($dispositivos as $dis)

 <tr <tr bgcolor="ccccc">
    <td>{{$dis->id}}</td>
    <td>{{$dis->serial}}</td>
    <td>{{$dis->descripcion}}</td>
    <td>{{$dis->codigo_barra}}</td>
    <td>{{$dis->color}}</td>
    <td>{{$dis->modelo}}</td>
    <td>{{$dis->fk_id_tipo_dispositivo}}</td>

    <td>{{$dis->fk_id_marca}}</td>
    <td><a href ="{{url('editar', $dis->id)}}" >Editar dispositivo </a> <br>
<a href ="{{url('eliminar', $dis->id)}}" >Eliminar dispositivo </td>
       </tr>
<ul>
@endforeach
</ul>
@endsection