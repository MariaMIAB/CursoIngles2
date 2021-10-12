@extends('layouts.layout')

@section('title', 'Rol '. $rol->name)

@section('content')

<h1>Bienvenido al rol {{$rol->id}} {{$rol->name}} </h1>
<a href="{{route('rol.edit', $rol)}}">editar rol</a>
<br>
<a href="{{route('rol.index')}}">volver a los roles</a>
@endsection