<?php/** @file : consultar_rol.blade.php
* @brief : Permitira consultar todos los roles, para editarlos o eliminarlos.
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
<table width="" border="1">
  <tr bgcolor="ccccc">
    <td width="50">id  </td>
    <td width="200">rol</td>
    <td width="200">descripcion</td>
    <td width="100">Opciones</td>    
  </tr>
@foreach($rol as $roles)
 <tr bgcolor="ccccc">
    <td>{{$roles->id}}</td>
    <td>{{$roles->rol}}</td>
    <td>{{$roles->descripcion}}</td>
    <td><a href ="{{url('editarro', $roles->id)}}" >Editar roles </a> <br>
<a href ="{{url('eliminarrol', $roles->id)}}" >Eliminar roles</a></td>
       </tr>
<br>
@endforeach
</ul>
@endsection
</table>
</body>
</ul>
</div>