<?php/** @file : Actualizar_marca.blade.php
* @brief : Cotiene el formulario para actualizar marcas.
* @author : Ivan Pacheco
* @version : 1
* @date : 28 marzo del 2017 
*/
?>

@extends('layout/master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Actualizar_marca" name="Actualizar_marca" method="POST" action="{{url('Actualizar_marca', $marca->id)}}">
  <div align="center">
    <blockquote>
      <blockquote>
        <p>{!! csrf_field() !!}</p>
        <p>
          <body>
  Marca           </p>
        <table width="251" border="0">
         <tr>
            <td width="78">id:</td>
            <td width="157"><label>
              <input name="id" type="text" id="id" value ="{{$marca->id}}">
            </label></td>
          </tr>

          <tr>
            <td width="78">Marca:</td>
            <td width="157"><label>
              <input name="marca" type="text" id="marca" value ="{{$marca->marca}}">
            </label></td>
          </tr>
          <tr> <br>
            <td>Descripcion:</td>
            <td><input name="descripcion" type="text" id="descripcion" value ="{{$marca->descripcion}}"></td>
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