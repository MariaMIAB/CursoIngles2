@extends('layouts.indexly')
@section('content')
<h1>Bienvenido a la seccion de Usuario </h1>
<div class="botones">
<a class="boton_personalizado" href="{{route('usuario.create')}}">Crear Usuario</a>
</div>
<div class="mt-4">
    <div class="card">
        <div class="card-body">
            <table id="user" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($usuario as $users)
                    <tr>
                    <td>{{$users->id}} </td>
                    <td><a href="{{route('usuario.show', $users->id)}}">{{$users->name}}</a></td>
                    <td>{{$users->email}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection