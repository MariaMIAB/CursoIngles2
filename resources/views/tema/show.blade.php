@extends('layouts.layout')

@section('title', 'Tema ')

@section('content')

<h1>Bienvenido a temas{{$tema->id}} {{$tema->name}} </h1>
<a href="{{route('tema.edit', $tema)}}">Editar tema</a>
<br>
<a href="{{route('tema.index')}}">Volver</a>
@endsection