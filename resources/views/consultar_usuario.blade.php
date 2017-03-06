@extends ('layout.master')
@section ('content')
<ul>
@foreach($usuario as $clientes)
<li>
{{$clientes->id}}
{{$clientes->nombre}}
{{$clientes->apellido}}
{{$clientes->celular}}
{{$clientes->genero}}
{{$clientes->correo}}
{{$clientes->fecha_nacimiento}}
{{$clientes->fk_id_rol}}
<br>
<a href ="{{url('editara', $clientes->id)}}" >Editar usuario </a> <br>
<a href ="{{url('eliminara', $clientes->id)}}" >Eliminar usuario </a>
</li>
@endforeach
</ul>
@endsection