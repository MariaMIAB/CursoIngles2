@extends('layouts.layout')

@section('title', 'Nota')

@section('content')
<h1>Bienvenido a la seccion de Notas </h1>
<a href="{{route('notas.create')}}">Crear Nota</a>
<ul>
    @foreach ($notas as $notass)
    <li>
        <a href="{{route('notas.show', $notass->id)}}">{{$notass->id}} {{$notass->notafinal}}</a>
    </li>
    @endforeach
</ul>
{{ $notas->links() }}

@endsection