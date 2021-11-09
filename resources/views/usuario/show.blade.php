@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('usuario.destroy',$usuario)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Este es el Usuario {{$usuario->name}} id:{{$usuario->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('usuario.edit', $usuario)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('usuario.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection
