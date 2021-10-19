@extends('layouts.layout')

@section('title', 'Tema')

@section('content')
<h1>Bienvenido a la seccion de Tema </h1>
<a href="{{route('tema.create')}}">Crear Tema</a>
<ul>
    @foreach ($tema as $temas)
    <li>
        <a href="{{route('tema.show', $temas->id)}}">{{$temas->id}} {{$temas->name}} {{$temas->estado}}</a>
    </li>
    @endforeach
</ul>
{{ $tema->links() }}

@endsection