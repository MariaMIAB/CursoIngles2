@extends('layouts.layout')

@section('title', 'Usuario')

@section('content')
<h1>Bienvenido a la seccion de Usuario </h1>
<a href="{{route('usuario.create')}}">Crear Usuario</a>
<ul>
    @foreach ($usuario as $usuarios)
    <li>
        <a href="{{route('usuario.show', $usuarios->id)}}">{{$usuarios->id}} {{$usuarios->name}}</a>
    </li>
    @endforeach
</ul>
{{ $usuario->links() }}

@endsection