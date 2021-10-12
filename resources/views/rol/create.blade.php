@extends('layouts.layout')

@section('title', 'Rol')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear un rol</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('rol.store') }}" method="POST">
				@csrf
	
				<div>
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name"  />
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