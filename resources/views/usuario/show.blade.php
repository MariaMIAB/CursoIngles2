@extends('layouts.layout')

@section('title', 'Usuario '. $usuario->name)

@section('content')

<h1>Bienvenido a Usuarios {{$usuario->id}} {{$usuario->name}} </h1>
<a href="{{route('usuario.edit', $usuario)}}">Editar Usuario</a>
<br>
<a href="{{route('usuario.index')}}">Volver</a>
@endsection