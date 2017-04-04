@extends('layout/master')
@section('content')

<link rel="stylesheet" type="text/css" href="Estilos.css" />
</head>

<body>
<table width="900" border="0" align="center" bgcolor="#FFFFFF" >
  <tr>
    <th height="152"><div align="left"><img src="banner.png" width="871" height="180" />
    </div>
      <table width="136" border="0" align="right">
        <tr>
          <td width="130"><div align="center">
            <form id="form1" name="form1" method="post" action="">
              <label>
             
              </label>
            </form>
            <a href="Usuarios2" target="_parent">Iniciar Sesion</a> </div></td>
        </tr>
    </table></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>


<a href="usuarios2"> <input name="iniciar_sesion" type="submit" id="iniciar_sesion" value="iniciar sesion" /></a>
             {!!csrf_field()!!}
@endsetcion
