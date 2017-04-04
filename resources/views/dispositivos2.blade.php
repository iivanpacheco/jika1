@extends('layout/master')
@section('content')

 <body bgcolor="4A6591">

  <td><div align="center">
     <form id="dispositivos2" name="dispositivos2" method="POST" action="{{url('dispositivos2')}}">
     {!! csrf_field() !!}
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Serial:</div></td>
            <td width="341"><label>
              <input name="serial" type="text" id="serial" size="45" />
            </label></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Descripcion:</div></td>
            <td width="341"><input name="descripcion" type="text" id="descripcion" size="45" /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Codigo:  </div></td>
            <td width="341"><input name="codigo_barra" type="text" id="codigo_barra" size="45" /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="26"><div align="center">
              <p>Marca:
                </label>
</p>
            </div></td>
            <td width="341"><select name="marca" size="1">
              <option value="Sel:" selected="selected">Sel:</option>
              <option value="hp">hp</option>
              <option value="lenovo">lenovo</option>
              <option value="Otros">Otros</option>
                        </select></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">
              <label>
              <div align="center">Tipo Dispositivo:</div></td>
            <td width="341"><select name="tipo_dispositivo">
              <option value="Sel:" selected="selected">Sel:</option>
              <option value="portatil">portatil</option>
              <option value="Camara">Camara</option>
              <option value="Otro">Otro</option>
                        </select></td>
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
