@extends('layout/master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Actualizar_dispositivo" name="Actualizar_dispositivo" method="POST" action="{{url('Actualizar_dispositivo', $dispositivos->id)}}">
 {!! csrf_field() !!}
<body>
<table width="500" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center">DISPOSITIVO</div></td>
  </tr>
  <tr>
    <td>Id:</td>
    <td><input name="id" type="text" id="id" value ="{{$dispositivos->id}}" /></td>
  </tr>
  <tr>
    <td>Serial:</td>
    <td><input name="serial" type="text" id="serial" value ="{{$dispositivos->serial}}" /></td>
  </tr>
  <tr>
    <td>Descripcion:</td>
    <td><input name="descripcion" type="text" id="descripcion" value ="{{$dispositivos->descripcion}}"/></td>
  </tr>
  <tr>
    <td>Codigo:    </td>
    <td><input name="codigo_barra" type="text" id="codigo_barra" value ="{{$dispositivos->codigo_barra}}"/></td>
  </tr>
  <tr>
  <td> Marca:  </td>   
   <td>    <select name="marca" id="marca" value ="{{$dispositivos->marca}}">
          <option value="Sel:">Sel:</option>
        </select></td>

        <tr>
 <td> Tipo Dispositivo   </td>      
        <td>  <select name="tipo_dispositivo" id="tipo_dispositivo" value ="{{$dispositivos->tipo_dispositivo}}">
          <option value="Sel:">Sel:</option>
        </select></td>
       
        <tr>
          <div align="center">
           <td> <input name="bot_disp" type="submit" id="bot_disp" value="Enviar" /></td>
            </div>
          </label>
            </form>
    </td>
  </tr>
</table>
</body>
</html>
@endsection