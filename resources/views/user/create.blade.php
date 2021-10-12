@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear usuarios</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<x-jet-validation-errors class="mb-4" />
	
			<form action="{{ route('user.store') }}" method="POST">
				@csrf
	
				<div>
					<x-jet-label for="name" value="{{ __('Name') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
				</div>
	
				<div class="mt-4">
					<x-jet-label for="email" value="{{ __('Email') }}" />
					<x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
				</div>
	
				<div class="mt-4">
					<x-jet-label for="password" value="{{ __('Password') }}" />
					<x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
				</div>
	
				<div class="mt-4">
					<x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
					<x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
				</div>
				<div class="mt-4">
					<label for=""> Foto del usuario</label>
					<input type="file" accept = "jpg, png, gif, jpeg" class="block mt-1 w-full" name="avatar">
				</div>
					<x-jet-button class="ml-4">
						{{ __('Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>