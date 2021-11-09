@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('materia.destroy',$materia)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Este es la Materia {{$materia->name}} id:{{$materia->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('materia.edit', $materia)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('materia.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection