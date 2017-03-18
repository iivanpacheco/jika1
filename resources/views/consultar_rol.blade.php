@extends ('layout.master')
@section ('content')
<ul>
@foreach($rol as $roles)
<li>
{{$roles->id}}
{{$roles->rol}}
{{$roles->descripcion}}
<br>
<a href ="{{url('editar', $roles->id)}}" >Editar roles </a> <br>
<a href ="{{url('eliminar', $roles->id)}}" >Eliminar roles</a>
</li>
@endforeach
</ul>
@endsection