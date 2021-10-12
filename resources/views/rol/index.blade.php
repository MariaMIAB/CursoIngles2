@extends('layouts.layout')

@section('title', 'Rol')

@section('content')
<h1>Bienvenido a la seccion de Roles </h1>
<a href="{{route('rol.create')}}">Crear curso</a>
<ul>
    @foreach ($rol as $rols)
    <li>
        <a href="{{route('rol.show', $rols->id)}}">{{$rols->id}} {{$rols->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $rol->links() }}
</div>
@endsection