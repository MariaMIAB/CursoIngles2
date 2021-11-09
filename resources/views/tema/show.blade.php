@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('tema.destroy',$tema)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Este es el Tema {{$tema->name}} id:{{$tema->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('tema.edit', $tema)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('tema.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection