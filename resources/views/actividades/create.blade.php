@extends('layouts.layout')

@section('title', 'Crear Actividad')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Crear una nueva actividad</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<x-jet-validation-errors class="mb-4" />
	
			<form action="{{ route('actividades.store') }}" method="POST">
				@csrf
				<div>
					<x-jet-label for="name" value="{{ __('Nombre de la actividad') }}" />
					<x-jet-input id="nombre_actividad" class="block mt-1 w-full" type="text" name="nombre_actividad" :value="old('nombre_actividad')" required autofocus autocomplete="nombre_actividad" />
				</div>
				<div>
					<x-jet-label value="{{ __('Fecha inicial') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fechaini"  />
				</div>
				<div>
					<x-jet-label value="{{ __('Fecha de presentacion') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fechapresent"  />
				</div>
				<div>
				<x-jet-label for="tema_id" value="{{ __('Tema') }}" />
				<select name="tema_id">
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
						{{ __('Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>