@extends('layout/master')
@section('content')

 <body bgcolor="4A6591">

  <td><div align="center">
     <form id="marca" name="marca" method="POST" action="{{url('marca')}}">
     {!! csrf_field() !!}
        <h2>Rol</h2><table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Marca:</div></td>
            <td width="341"><label><select name="marca" size="1">
              <option value="Sel:" selected="selected">Sel:</option>
              <option value="hp">hp</option>
              <option value="lenovo">lenovo</option>
              <option value="Otros">Otros</option>
                        </select></label></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Descripcion:</div></td>
            <td width="341"><input name="descripcion" type="text" id="descripcion" size="45" /></td>
          </tr>
        </table>
        <input type="submit" name="Submit" value="Enviar">
    </form>

      </td>
  </tr>

  </body>
</html>
</body>
</html>
