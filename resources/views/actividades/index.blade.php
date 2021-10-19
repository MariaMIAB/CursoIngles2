@extends('layouts.layout')

@section('title', 'Actividad')

@section('content')
<h1>Bienvenido a la seccion de Actividades </h1>
<a href="{{route('actividades.create')}}">Crear Materia</a>
<ul>
    @foreach ($actividades as $actividadess)
    <li>
        <a href="{{route('actividades.show', $actividadess->id)}}">{{$actividadess->id}} {{$actividadess->nombre_actividad}} {{$actividadess->fechapresent}}</a>
    </li>
    @endforeach
</ul>
{{ $actividades->links() }}

@endsection