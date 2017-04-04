@extends('layout/master')
@section('content')

 <body bgcolor="4A6591">

  <td><div align="center">
     <form id="rol" name="rol" method="POST" action="{{url('rol')}}">
     {!! csrf_field() !!}
        <h2>Rol</h2><table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Rol:</div></td>
            <td width="341"><label><select name="rol">
             <option value="Sel:" selected="selected">Sel:</option>
             <option value="Aprendiz">Aprendiz</option>
               <option value="Instructor">Instructor</option>
             <option value="Instructor">Administrador</option>
             <option value="Funcionario">Funcionario</option>
             <option value="Otro">Otro</option>
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
