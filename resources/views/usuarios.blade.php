<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>



<body bgcolor="4A6591">
<form id="form1" name="form1" method="post" action="{{url('usuarios')}}">
{!! csrf_field()!!}
  <table width="200" border="1">
    <tr>
      <td colspan="2">Registro Peliculas </td>
    </tr>
    <tr>
      <td>titulo</td>
      <td><label>
        <input type="text" name="titulo" />
      </label></td>
    </tr>
    <tr>
      <td>genero</td>
      <td><label>
 <select name="genero">
          <option value="select:">select:</option>
          <option value="accion">accion</option>
          <option value="aventura">aventura</option>
          <option value="drama">drama</option>
          <option value="Fantasía">Fantasía</option>
          <option value="Musicales">Musicales</option>
          <option value="Eroticas+18">Eroticas+18</option>
          <option value="Suspenso">Suspenso</option>
          <option value="Terror">Terror</option>
          <option value="Infantiles">Infantiles</option>
          <option value="Juveniles">Juveniles</option>
          <option value="Familiares">Familiares</option>

        </select>      </label></td>
    </tr>   
     <tr>
      <td>protagonista</td>
      <td><label>
      <input type="text" name="protagonista" />
      </label></td>
    </tr> <tr>
      
    </tr> <tr>
      <td>idioma</td>
      <td><label>
      <input type="text" name="idioma" />
      </label></td>
    </tr> <tr>
      <td>duracion</td>
      <td><label>
      <input type="text" name="duracion" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Enviar" />
          </div>
      </label></td>
    </tr>
  </table>

</body>
</html>