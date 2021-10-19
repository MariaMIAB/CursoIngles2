@extends('layouts.layout')

@section('title', 'Materia '. $materia->name)

@section('content')

<h1>Bienvenido a Materia {{$materia->id}} {{$materia->name}} </h1>
<a href="{{route('materia.edit', $materia)}}">Editar materia</a>
<br>
<a href="{{route('materia.index')}}">Volver</a>
@endsection