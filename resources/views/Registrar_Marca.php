<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body bgcolor="4A6591">

<form id="Registrar_Marca" name="Registrar_Marca" method="POST" action="{{url('Registrar_Marca')}}">
  <div align="center">
    <blockquote>
      <blockquote>
        <p>{!! csrf_field() !!}</p>
        <p>
          <body>
          Marca           </p>
        <table width="251" border="0">
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
      </blockquote>
    </blockquote>
    </div>
</form>    

</table>
</body>
</html>
