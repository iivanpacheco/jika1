<?php/** @file : consultar_registro.blade.php
* @brief : Permitira consultar todos los registros, para editarlos o eliminarlos.
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
    <td width="500">fecha_de_ingreso</td>
    <td width="100">hora_entrada</td>
    <td width="100">hora_salida</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($registro as $historial)
 <tr bgcolor="ccccc">
    <td>{{$historial->id}}</td>
    <td>{{$historial->fecha}}</td>
    <td>{{$historial->hora_entrada}}</td>
    <td>{{$historial->hora_salida}}</td>
    <td><a href ="{{url('editarR', $historial->id)}}" >Editar registro </a> <br>
<a href ="{{url('eliminarR', $historial->id)}}" >Eliminar registro </a></td>
       </tr>
<br>
@endforeach
</table>
</ul>
@endsection</body>
</html>