@extends('layouts.layout')

@section('title', 'Editar Tema')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Editar Tema</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<x-jet-validation-errors class="mb-4" />
	
			<form action="{{ route('tema.update',$tema ) }}" method="POST">
				@csrf
				@method('put')
				<div>
					<x-jet-label for="name" value="{{ __('Name') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$tema->name}}" required autofocus autocomplete="name" />
				</div>
				<div>
					<x-jet-label for="estado" value="{{ __('estado') }}" />
					<Select name="estado">
						<option value="Avanzado"> Avanzado </option>
						<option value="Falta"> Falta </option>
					</Select>
					</div>
				<div>
				<x-jet-label for="materia_id" value="{{ __('materia') }}" />
				<select name="materia_id">
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
						{{ __('Actualizar Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>