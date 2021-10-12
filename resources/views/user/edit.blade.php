@extends('layouts.layout')

@section('title', 'Usuarios edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar un usuario</a></h1>

   <x-guest-layout>
	<x-jet-authentication-card>
		<x-slot name="logo">
			<x-jet-authentication-card-logo />
		</x-slot>
	<form action="{{ route('user.update', $user ) }}" method="POST">
	@csrf
	@method('put')

 <div>
					<x-jet-label for="name" value="{{ __('Name') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}"/>
				</div>
	
				<div class="mt-4">
					<x-jet-label for="email" value="{{ __('Email') }}" />
					<x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}"/>
				</div>
	
				<div class="mt-4">
					<x-jet-label for="password" value="{{ __('Password') }}" />
					<x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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