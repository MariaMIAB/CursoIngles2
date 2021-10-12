@extends('layouts.layout')

@section('title', 'User '. $user->name)

@section('content')

<h1>Bienvenido a Usuarios {{$user->id}} {{$user->name}} </h1>
<a href="{{route('user.edit', $user)}}">editar Usuario</a>
<br>
<a href="{{route('user.index')}}">volver a Usuarios</a>
@endsection