<?php/** @file : usuarios2.blade.php
* @brief : e la vista que incluye el formulario para registrar los usuarios.
* @author : Ivan Pacheco
* @version : 1
* @date : 28 marzo del 2017 
*/
?>

@extends('layout/master')
@section('content')
<title>Registrar Usuarios </title>

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
      
     <form id="Usuarios2" name="Usuarios2" method="POST" action="{{url('Usuarios2')}}">
     {!! csrf_field() !!}
     <h2>Registro Usuarios</h2>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Nombres:</div></td>
            <td width="341"><label>
              <input name="nombre" type="text" id="nombre" required="" size="45" />
            </label></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Apellidos:</div></td>
            <td width="341"><input name="apellido" type="text" id="apellido" size="45" required=""  /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Identificacion:</div></td>
            <td width="341"><input name="identificacion" type="text" id="identificacion" size="45" required=""  /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Celular:  </div></td>
            <td width="341"><input name="celular" type="text" id="celular" size="45" required=""  /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Correo_electronico: </div></td>
            <td width="341"><input name="correo" type="text" id="correo" size="45"  required="" /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Contrase&ntilde;a: </div></td>
            <td width="341"><input name="password" type="password" id="password" size="45" required="" /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="164" height="24"><div align="center">Confirmar contrase&ntilde;a: </div></td>
            <td width="341"><input name="password" type="password" id="password" size="45" required=""  /></td>
          </tr>
        </table>
        <table width="516" border="0" bgcolor="#CCCCCC">
          <tr>
            <td width="510" height="125"><div align="left">
              <table width="510" border="0">
                <tr>
                  <td width="164">Fecha de Nacimiento: </td>
                  <td width="336"><input type="date" required="" name="fecha_nacimiento" /></td>
                </tr>
              </table>
            </div>
              <p align="center">
                <label> 
                <div align="left">Genero: 
                  <select name="genero" size="1">
                    <option value="Sel:" selected="selected">Sel:</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otros">Otros</option>
                  </select>
                
                </label>
        
        
             
          </tr>
       </table>

       <input type="submit" name="Submit" value="Enviar"> 
     </form>
      </td>
  </tr>
</table>
</body>
</html>
</body>
</html>
