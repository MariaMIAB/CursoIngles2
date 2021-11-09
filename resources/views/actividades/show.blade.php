@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('actividades.destroy',$actividades)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Esta es la Actividad {{$actividades->name}} id:{{$actividades->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('actividades.edit', $actividades)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('actividades.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection