@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('cronograma.destroy',$cronograma)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Este es el Cronograma {{$cronograma->name}} id:{{$cronograma->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('cronograma.edit', $cronograma)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('cronograma.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection