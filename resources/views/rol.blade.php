<?php/** @file : rol.blade.php
* @brief : la vista que incluye el formulario para registrar los roles.
* @author : Ivan Pacheco
* @version : 1
* @date : 28 marzo del 2017 
*/
?>
@extends('layout/master')
@section('content')

<body bgcolor="4A6591">
 <table width="900" height="538" border="0" align="center" bordercolor="#4A6591">
  <tr>
    <td width="900" bgcolor="#4A6591"><form id="form1" name="form1" method="post" action="">
      <div align="center"><img src="banner.png" width="541" height="152" /></div>
    </form>    </td>
  </tr>
  <tr>
    <td height="378" bgcolor="#4A6591"><table width="522" height="365" border="0" align="center" bordercolor="#4A6591" bgcolor="#CCCCCC">
      <tr>
        <td width="516" height="361">

  <td><div align="center">
     <form id="rol" name="rol" method="POST" action="{{url('rol')}}">
     {!! csrf_field() !!}
        <h2>Rol</h2>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Rol:</div></td>
            <td width="341"><input name="rol" type="text" id="rol" size="45" /></td>
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
