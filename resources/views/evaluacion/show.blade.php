@extends('layouts.layout')

@section('title', 'Evaluacion ')

@section('content')

<h1>Bienvenido a Evaluacion {{$evaluacion->id}} {{$evaluacion->name}} </h1>
<a href="{{route('evaluacion.edit', $evaluacion)}}">Editar evaluacion</a>
<br>
<a href="{{route('evaluacion.index')}}">Volver</a>
@endsection