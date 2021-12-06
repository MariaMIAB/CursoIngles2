@extends('layouts.showLayout')
@section('content')
<form id="eliminar" action="{{route('notas.destroy',$notas)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
<h4>Usuario id:{{$notas->usuario_id}}</h4>
<h4>nota 1:{{$notas->nota1}}</h4>
<h4>nota 2:{{$notas->nota2}}</h4>
<h4>nota 3:{{$notas->nota3}}</h4>
<h4>nota final:{{$notas->notafinal}}</h4>
<div class="botones mt-4">
<a class="boton_personalizado " href="{{route('notas.edit', $notas)}}">Editar</a>
<button class="boton_personalizado " form="eliminar" type="submit">Eliminar</button>
<a class="boton_personalizado " href="{{route('notas.index')}}">Volver</a>
</div>
</div>
</div>
</div>
@endsection