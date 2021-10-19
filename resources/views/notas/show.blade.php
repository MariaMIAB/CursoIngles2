@extends('layouts.layout')

@section('title', 'Notas')

@section('content')

<h1>Bienvenido a Materia {{$notas->id}} {{$notas->notafinal}} </h1>
<a href="{{route('notas.edit', $notas)}}">Editar Nota</a>
<br>
<a href="{{route('notas.index')}}">Volver</a>
@endsection