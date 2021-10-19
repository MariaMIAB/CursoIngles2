@extends('layouts.layout')

@section('title', 'Materia')

@section('content')
<h1>Bienvenido a la seccion de Materia </h1>
<a href="{{route('materia.create')}}">Crear Materia</a>
<ul>
    @foreach ($materia as $materias)
    <li>
        <a href="{{route('materia.show', $materias->id)}}">{{$materias->id}} {{$materias->name}}</a>
    </li>
    @endforeach
</ul>
{{ $materia->links() }}

@endsection