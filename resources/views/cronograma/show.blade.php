@extends('layouts.layout')

@section('title', 'Cronograma '. $cronograma->name)

@section('content')

<h1>BIENVENIDO A CRONOGRAMA {{$cronograma->id}} {{$cronograma->name}} </h1>
<a href="{{route('cronograma.edit', $cronograma)}}">editar cronograma</a>
<br>
<a href="{{route('cronograma.index')}}">volver a cronograma</a>
@endsection