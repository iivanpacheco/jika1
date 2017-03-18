@extends('layout/master')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Registrar_rol" name="Registrar_rol" method="POST" action="{{url('Registrar_rol')}}">
  <div align="center">
    <blockquote>
      <blockquote>
        <p>{!! csrf_field() !!}</p>
        <p>
          <body>
Rol           </p>
        <table width="251" border="0">
          <tr>
            <td width="78">Rol:</td>
            <td width="157"><label>
              <input name="rol" type="text" id="rol">
            </label></td>
          </tr>
          <tr> <br>
            <td>Descripcion:</td>
            <td><input name="descripcion" type="text" id="descripcion"></td>
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