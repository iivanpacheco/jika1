@extends ('layout.master')
@section ('content')
<ul>
@foreach($marca as $mar)
<li>
{{$mar->id}}
{{$mar->marca}}
{{$mar->descripcion}}
<br>
<a href ="{{url('editar', $mar->id)}}" >Editar marca </a> <br>
<a href ="{{url('eliminar', $mar->id)}}" >Eliminar marca </a>
</li>
@endforeach
</ul>
@endsection