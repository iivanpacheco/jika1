@extends ('layout.master')
@section ('content')
<div id="Layer1" align="center">
<ul>
<body bgcolor="4A6591">
<table width="200" border="1">
  <tr bgcolor="ccccc">
    <td width="150">id  </td>
    <td width="100">Marca</td>
    <td width="100">Descripcion</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($marca as $mar)

 <tr bgcolor="ccccc">
    <td>{{$mar->id}}</td>
    <td>{{$mar->marca}}</td>
    <td>{{$mar->descripcion}}</td>
    <td><a href ="{{url('editarm', $mar->id)}}" >Editar marca <br>
<a href ="{{url('eliminarm', $mar->id)}}" >Eliminar marca </a> </a></td>
       </tr>




<br>


@endforeach
</table>
</ul>
@endsection