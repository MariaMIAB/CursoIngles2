@extends('layouts.layout')

@section('title', 'Asistencia edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar la asistencia</a></h1>

   <x-guest-layout>
	<x-jet-authentication-card>
		<x-slot name="logo">
			<x-jet-authentication-card-logo />
		</x-slot>
	<form action="{{ route('asistencia.update', $asistencia ) }}" method="POST">
	@csrf
	@method('put')

	
				<div class="mt-4">
					<x-jet-label for="estado" value="{{ __('Estado') }}" />
					<Select name="estado">
						<option value="Presente"> Presente </option>
						<option value="Falta"> Falta </option>
						<option value="Retraso"> Retraso </option>
					</Select>

				</div>

                <div>
					<select name="usuario_id">
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

					<x-jet-button class="ml-4">
						{{ __('Actualizar Asistencia') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
		</x-guest-layout>
		</div>



@endsection