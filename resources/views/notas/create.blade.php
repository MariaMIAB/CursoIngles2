@extends('layouts.layout')

@section('title', 'Crear Nota')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Crear una nueva Nota</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<x-jet-validation-errors class="mb-4" />
	
			<form action="{{ route('notas.store') }}" method="POST">
				@csrf
				<div>
					<x-jet-label for="nota1" value="{{ __('Nota1') }}" />
					<x-jet-input id="nota1" class="block mt-1 w-full" type="number" name="nota1" :value="old('nota1')" required autofocus autocomplete="nota1" />
				</div>

				<div>
					<x-jet-label for="nota2" value="{{ __('Nota2') }}" />
					<x-jet-input id="nota2" class="block mt-1 w-full" type="number" name="nota2" :value="old('nota2')" required autofocus autocomplete="nota2" />
				</div>

				<div>
					<x-jet-label for="nota3" value="{{ __('Nota3') }}" />
					<x-jet-input id="nota3" class="block mt-1 w-full" type="number" name="nota3" :value="old('nota3')" required autofocus autocomplete="nota3" />
				</div>

				<div>
					<x-jet-label for="notafinal" value="{{ __('Notafinal') }}" />
					<x-jet-input id="notafinal" class="block mt-1 w-full" type="number" name="notafinal" :value="old('notafinal')" required autofocus autocomplete="notafinal" />
				</div>
		
					<x-jet-button class="ml-4">
						{{ __('Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>