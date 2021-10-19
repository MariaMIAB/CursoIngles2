@extends('layouts.layout')

@section('title', 'Usuarios edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar un usuario</a></h1>

   <x-guest-layout>
	<x-jet-authentication-card>
		<x-slot name="logo">
			<x-jet-authentication-card-logo />
		</x-slot>
	<form action="{{ route('usuario.update', $usuario ) }}" method="POST">
	@csrf
	@method('put')

 <div>
					<x-jet-label for="name" value="{{ __('Name') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$usuario->name}}"/>
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

                <div>
					<select name="rol_id">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
	
					</select>
					</div>

				<div class="mt-4">
					<label for=""> Foto del usuario</label>
					<input type="file" accept = "jpg, png, gif, jpeg" class="block mt-1 w-full" name="avatar">
				</div>
					<x-jet-button class="ml-4">
						{{ __('Actualizar formulario') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
		</x-guest-layout>
		</div>



@endsection