@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('user.destroy',$user)}}" method="POST">
    @csrf
    @method('delete')
</form>
        <div class="card-body sec">
<h4>Este es el user {{$user->name}} id:{{$user->id}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('user.edit', $user)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('user.index')}}">Volver</a>
</div>
</div>

@endsection