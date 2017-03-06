<!DOCTYPE html>
<html>
@extends('layout/master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Actualizar_usuario" name="Actualizar_usuario" method="POST" action="{{url('Actualizar_usuario', $usuario->id)}}">
 {!! csrf_field() !!}

<table width="500" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center">USUARIOS</div></td>
  </tr>
 <tr>
    <td width="248">id:</td>
    <td width="242"><input name="id" type="text" id="id" value ="{{$usuario->id}}"  /></td>
  </tr>

  <tr>
    <td width="248">Nombre:</td>
    <td width="242"><input name="nombre" type="text" id="nombre" value ="{{$usuario->nombre}}"  /></td>
  </tr>
  <tr>
    <td>Apellido:</td>
    <td><input name="apellido" type="text" id="apellido" value ="{{$usuario->apellido}}" /></td>
  </tr>
  <tr>
    <td>Celular</td>
    <td><input name="celular" type="text" id="celular" value ="{{$usuario->celular}}"  /></td>
  </tr>
  <tr>
    <td>Genero:</td>
    <td><select name="genero" value ="{{$usuario->genero}}" >
      <option value="Sel:" selected="selected">Sel:</option>
      <option value="Hombre">Hombre</option>
      <option value="Mujer">Mujer</option>
      <option value="Otro">Otro</option>
    </select></td>
  </tr>
  <tr>
    <td>Correo:</td>
    <td><input name="correo" type="text" id="correo"  value ="{{$usuario->correo}}" /></td>
  </tr>
  <tr>
    <td>Fecha de Nacimiento: </td>
    <td><input name="fecha_nacimiento" type="text" id="fecha_nacimiento" value ="{{$usuario->fecha_nacimiento}}"  /></td>
  </tr>
  <tr>
    <td>Rol:</td>
    <td><select name="rol" value ="{{$usuario->rol}}" >
      <option value="Sel:" selected="selected">Sel:</option>
      <option value="Aprendiz">Aprendiz</option>
      <option value="Instructor">Instructor</option>
      <option value="Instructor">Administrador</option>
      <option value="Funcionario">Funcionario</option>
      <option value="Otro">Otro</option>
        </select></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input name="bot_usu" type="submit" id="bot_enb" value="Enviar" />
      </div></td>
  </tr>
</table>

@endsection