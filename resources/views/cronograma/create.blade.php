@extends('layouts.layout')

@section('title', 'Cronograma')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear un nuevo cronograma</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('cronograma.store') }}" method="POST">
				@csrf
				<label>
					Descripcion:
					 <br>
					 <textarea rows="6" cols="20" class="block mt-1 w-full" name="descripcion" ></textarea>
				</label>
				<div>
					<x-jet-label value="{{ __('Fechaini') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fechaini"  />
				</div>
				<div>
					<x-jet-label value="{{ __('Fechafin') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fechafin"  />
				</div>
				<br>
					<x-jet-button class="ml-4">
							<br>
						{{ __('Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>