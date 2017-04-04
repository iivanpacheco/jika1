@extends ('layout.master')
@section ('content')

<ul>
<body bgcolor="4A6591">
<table width="200" border="1">
  <tr>
    <td width="150">id  </td>
    <td width="500">rol</td>
    <td width="100">descripcion</td>
    <td width="100">Opciones</td>
    
  </tr>

@foreach($rol as $roles)
 <tr>
    <td>{{$roles->id}}</td>
    <td>{{$roles->rol}}</td>
    <td>{{$roles->descripcion}}</td>
    <td><a href ="{{url('editarro', $roles->id)}}" >Editar roles </a> <br>
<a href ="{{url('eliminarrol', $roles->id)}}" >Eliminar roles</a></td>
       </tr>
<br>
@endforeach
</ul>
@endsection