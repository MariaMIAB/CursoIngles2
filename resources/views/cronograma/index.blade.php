@extends('layouts.layout')

@section('title', 'Cronograma')

@section('content')
<h1>Bienvenido a la seccion de Cronograma </h1>
<a href="{{route('cronograma.create')}}">Crear un nuevo cronograma</a>
<ul>
    @foreach ($cronograma as $cronogramas)
    <li>
        <a href="{{route('cronograma.show', $cronogramas->id)}}">{{$cronogramas->id}} {{$cronogramas->descripcion}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $cronograma->links() }}
</div>
@endsection