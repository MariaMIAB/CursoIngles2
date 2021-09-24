@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')
<h1>Bienvenido a la seccion de los usuarios </h1>
<a href="{{route('user.create')}}">crear usuario</a>
<ul>
    @foreach ($user as $users)
    <li>
        <a href="{{route('user.show', $users->id)}}">{{$users->id}} {{$users->name}}</a>
    </li>
    @endforeach
</ul>
{{ $user->links() }}

@endsection