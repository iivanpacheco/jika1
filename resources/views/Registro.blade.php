<?php/** @file : registro.blade.php
* @brief :la vista que incluye el formulario para ingresar los registros.
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

<form id="Registro" name="Registro" method="POST" action="{{url('Registro')}}">
 {!! csrf_field() !!}
<title>Registro</title>
</head>
<body>
<table width="500" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center">REGISTRO</div></td>
  </tr>
  <tr>
    <td>Fecha:</td>
    <td><input name="fecha" type="text" id="fecha" /></td>
  </tr>
  <tr>
    <td>Hora entrada: </td>
    <td><input name="hora_entrada" type="text" id="hora_entrada" /></td>
  </tr>
  <tr>
    <td>Hora salida::    </td>
    <td><input name="hora_salida" type="text" id="hora_salida" /></td>
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