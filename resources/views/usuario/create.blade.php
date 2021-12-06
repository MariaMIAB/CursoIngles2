@extends('layouts.rglayout')
@section('content')
	<x-guest-layout>
		<div class="card div-ex">
			<div class="card-body">
		<h1>Nuevo Usuario</h1>
			<x-jet-validation-errors class="mb-4" />
			<form action="{{ route('usuario.store') }}" method="POST">
				@csrf
	
				<div class="mt-4">
					<x-jet-label for="name" value="{{ __('Nombre') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
				</div>
				<div class="mt-4">
					<x-jet-label for="email" value="{{ __('Email') }}" />
					<x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
				</div>
	
				
                <div class="mt-4">
				<x-jet-label for="genero" value="{{ __('Genero') }}" />
                <Select name="genero">
					<option value="masculino"> Masculino </option>
					<option value="femenino"> Femenino </option>
				</Select>
                </div>
				
                <div class="mt-4">
				<x-jet-label for="curso" value="{{ __('Curso') }}" />
                <Select name="curso">
					<option value="Curso 'B'"> Curso 'A' </option>
					<option value="Curso 'A'"> Curso 'B'</option>
				</Select>
                </div>
				<div class="mt-4">
				<x-jet-label for="curso" value="{{ __('Rol') }}" />
				<select name="rol_id">
					@foreach($rol as $rols)
						<option value={{$rols->id}}>{{$rols->name}}</option>	
						@endforeach
				</select>
				</div>
					<x-jet-button class="mt-4">
						{{ __('Registro') }}
					</x-jet-button>
			</form>
		</div>
	</div>
	</x-guest-layout>
@endsection