<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Actualizar_tipo_dispositivo" name="Actualizar_tipo_dispositivo" method="POST" action="{{url('Actualizar_tipo_dispositivo', $tipo_dispositivo->id)}}">
 {!! csrf_field() !!}
<body>
<table width="500" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center">TIPO DE DISPOSITIVO</div></td>
  
  <tr>
    <td>Id:</td>
    <td><input name="id" type="text" id="id" value="{{$tipo_dispositivo->id}}" /></td>
  </tr></tr>
  <tr>
    <td>Descripcion:</td>
    <td><input name="descripcion" type="text" id="descripcion" value="{{$tipo_dispositivo->descripcion}}" /></td>
  </tr>
  <tr>
    <td>Tipo:</td>
    <td><input name="tipo_dispositivo" type="text" id="tipo_dispositivo" value="{{$tipo_dispositivo->tipo_dispositivo}}"/></td>
  </tr>
  <tr>
    <td colspan="2"><form id="form1" name="form1" method="post" action="">
      <label>
        <div align="center">
          <input name="bot_tipo_disp" type="submit" id="bot_tipo_disp" value="Enviar" />
        </div>
      </label>
    </form>    </td>
  </tr>
</table>
</body>
</html>