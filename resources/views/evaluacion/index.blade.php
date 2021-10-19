@extends('layouts.layout')

@section('title', 'Evaluacion')

@section('content')
<h1>Bienvenido a la seccion de Evaluaion</h1>
<a href="{{route('evaluacion.create')}}">Crear Evaluacion</a>
<ul>
    @foreach ($evaluacion as $evaluacions)
    <li>
        <a href="{{route('evaluacion.show', $evaluacions->id)}}">{{$evaluacions->id}} {{$evaluacions->name}}</a>
    </li>
    @endforeach
</ul>
{{ $evaluacion->links() }}

@endsection