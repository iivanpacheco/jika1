@extends ('layout.master')
@section ('content')
<ul>
<body bgcolor="4A6591">
<table width="200" border="1">
  <tr>
    <td width="150">id  </td>
    <td width="500">fecha_de_ingreso</td>
    <td width="100">hora_entrada</td>
    <td width="100">hora_salida</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($registro as $historial)
 <tr>
    <td>{{$historial->id}}</td>
    <td>{{$historial->fecha}}</td>
    <td>{{$historial->hora_entrada}}</td>
    <td>{{$historial->hora_salida}}</td>
    <td><a href ="{{url('editarR', $historial->id)}}" >Editar registro </a> <br>
<a href ="{{url('eliminarR', $historial->id)}}" >Eliminar registro </a></td>
       </tr>
<br>
@endforeach
</table>
</ul>
@endsection</body>
</html>