@extends('layouts.layout')

@section('title', 'Asistencia')

@section('content')
<h1>Bienvenido a la seccion de asistencia </h1>
<a href="{{route('asistencia.create')}}">Crear una nueva Asistencia</a>
<ul>
    @foreach ($asistencia as $asistencias)
    <li>
        <a href="{{route('asistencia.show', $asistencias->id)}}">{{$asistencias->id}} {{$asistencias->estado}}</a>
    </li>
    @endforeach
</ul>
{{ $asistencia->links() }}

@endsection