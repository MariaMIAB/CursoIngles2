@extends('layouts.rglayout')
@section('content')
<h1>Bienvenido</h1>
<a href="{{route('user.create')}}">Crear nuevo</a>
<ul>
    @foreach ($user as $users)
    <li>
        <a href="{{route('user.show', $users->id)}}">{{$users->id}} {{$users->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $user->links() }}
</div>
@endsection