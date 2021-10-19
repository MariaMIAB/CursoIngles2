@extends('layouts.layout')

@section('title', 'Actividad ')

@section('content')

<h1>Bienvenido a Actividades {{$actividades->id}} {{$actividades->name}} </h1>
<a href="{{route('actividades.edit', $actividades)}}">Editar actividad</a>
<br>
<a href="{{route('actividades.index')}}">Volver</a>
@endsection