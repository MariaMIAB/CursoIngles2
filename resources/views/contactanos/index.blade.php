@extends('layouts.layout')

@section('title', 'Formulario De Contactos')

@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
			<form action="{{ route('contactanos.store') }}" method="POST">
				@csrf
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="namem"  />
				</div>
                <div class="mt-4">
					<x-jet-label  value="{{ __('Email') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="email"  />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Mensaje') }}" />
					<label>
					<textarea rows="6" cols="38" name="mensaje" ></textarea>
					</label>
				</div>
					<x-jet-button class="mt-4">
						{{ __('Enviar') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>
	@endsection
       