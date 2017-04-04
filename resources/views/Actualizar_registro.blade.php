<?php/** @file : Actualizar_registro.blade.php
* @brief : Cotiene el formulario para actualizar  el registro.
* @author : Ivan Pacheco
* @version : 1
* @date : 28 marzo del 2017 
*/
?><!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Actualizar_registro" name="Actualizar_registro" method="POST" action="{{url('Actualizar_registro', $registro->id)}}">

 {!! csrf_field() !!}
<title>Registro</title>
</head>
<body>
<table width="500" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center">REGISTRO</div></td>
  </tr>
  <tr>
    <td>Id:</td>
    <td><input name="id" type="text" id="id" value="{{$registro->id}}" /></td>
  </tr>
  <tr>
    <td>Fecha:</td>
    <td><input name="fecha" type="text" id="fecha" value="{{$registro->fecha}}"/></td>
  </tr>
  <tr>
    <td>Hora entrada: </td>
    <td><input name="hora_entrada" type="text" id="hora_entrada" value="{{$registro->hora_entrada}}" /></td>
  </tr>
  <tr>
    <td>Hora salida::    </td>
    <td><input name="hora_salida" type="text" id="hora_salida" value="{{$registro->hora_salida}}" /></td>
  </tr>
  <tr>
    <td colspan="2"><form id="form1" name="form1" method="post" action="">
      <label>
        <div align="center">
          <input name="bot_registro" type="submit" id="bot_registro" value="Enviar" />
        </div>
      </label>
    </form>    </td>
  </tr>
</table>
</body>
</html>