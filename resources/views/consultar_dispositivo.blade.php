@extends ('layout.master')
@section ('content')
<ul>
@foreach($dispositivos as $dis)
<li>
{{$dis->id}}
{{$dis->serial}}
{{$dis->descripcion}}
{{$dis->codigo_barra}}
{{$dis->fk_id_tipo_dispositivo}}
{{$dis->correo}}
{{$dis->fecha_nacimiento}}
{{$dis->fk_id_marca}}
<br>
<a href ="{{url('editar', $dis->id)}}" >Editar dispositivo </a> <br>
<a href ="{{url('eliminar', $dis->id)}}" >Eliminar dispositivo </a>
</li>
@endforeach
</ul>
@endsection