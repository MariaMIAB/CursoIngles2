@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('evaluacion.destroy',$evaluacion)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Esta es la Evaluacion {{$evaluacion->name}} id:{{$evaluacion->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('evaluacion.edit', $evaluacion)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('evaluacion.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection