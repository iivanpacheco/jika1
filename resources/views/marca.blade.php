<?php/** @file : marca.blade.php
* @brief : la vista que incluye el formulario para registrar las marcas.
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


     <form id="marca" name="marca" method="POST" action="{{url('marca')}}">
     {!! csrf_field() !!}
        <h2>Marca</h2>  
        <table width="251" border="0" bgcolor="#cccccc">
          <tr>
            <td width="78">Marca:</td>
            <td width="157"><label>
              <input name="marca" type="text" id="marca">
            </label></td>
          </tr>
          <tr>
            <td colspan="2"><label> </label>
                <div align="center">
                  <input type="submit" name="Submit" value="Enviar">
              </div></td>
          </tr>
        </table>
    </form>

      </td>
  </tr>

  </body>
</html>
</body>
</html>
