@extends('layouts.layout')

@section('title', 'Asistencia')

@section('content')

<h1>Bienvenido a Asistencia {{$asistencia->id}} {{$asistencia->estado}} </h1>
<a href="{{route('asistencia.edit', $asistencia)}}">Editar asistencia</a>
<br>
<a href="{{route('asistencia.index')}}">Volver</a>
@endsection