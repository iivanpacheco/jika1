<?php/** @file : Actualizar_rol.blade.php
* @brief : Cotiene el formulario para actualizar el rol.
* @author : Ivan Pacheco
* @version : 1
* @date : 28 marzo del 2017 
*/
?>@extends('layout/master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Actualizar_rol" name="Actualizar_rol" method="POST" action="{{url('Actualizar_rol',$rol->id)}}">
  <div align="center">
    <blockquote>
      <blockquote>
        <p>{!! csrf_field() !!}</p>
        <p>
          <body>
Rol           </p>
        <table width="251" border="0">
		
		<tr>
            <td width="78">Id:</td>
            <td width="157"><label>
              <input name="id" type="text" id="id" value ="{{$rol->id}}">
            </label></td>
          </tr>
          <tr>
            <td width="78">Rol:</td>
            <td width="157"><label>
              <input name="rol" type="text" id="rol" value ="{{$rol->rol}}">
            </label></td>
          </tr>
          <tr> <br>
            <td>Descripcion:</td>
            <td><input name="descripcion" type="text" id="descripcion" value ="{{$rol->descripcion}}"></td>
          </tr>
          <tr>
            <td colspan="2"><label> </label>
                <div align="center">
                  <input type="submit" name="Submit" value="Enviar">
              </div></td>
          </tr>
        </table>
      </blockquote>
    </blockquote>
    </div>
</form>    

</table>
</body>
</html>

@endsection