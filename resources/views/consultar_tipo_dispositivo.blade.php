

@extends ('layout.master')
@section ('content')

<ul>
<body bgcolor="4A6591">
<table width="200" border="1">
  <tr>
    <td width="150">id  </td>
    <td width="500">tipo_dispositivo</td>
    <td width="100">descripcion</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($tipo_dispositivo as $tipo)
 <tr>
    <td>{{$tipo->id}}</td>
    <td>{{$tipo->tipo_dispositivo}}</td>
    <td>{{$tipo->descripcion}}</td>
    <td><a href ="{{url('editartp', $tipo->id)}}" >Editar tipo dispositivo </a> <br>
<a href ="{{url('eliminartp', $tipo->id)}}" >Eliminar tipo dispositivo </a></td>
       </tr>
<br>
@endforeach
</ul>
@endsection