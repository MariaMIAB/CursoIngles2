@extends('layouts.rglayout')
@section('content')
	<x-guest-layout>
		<div class="card div-ex">
			<div class="card-body">
		<h1>Crear Rol</h1>
		<x-jet-validation-errors class="mb-4" />
			<form action="{{ route('rol.store') }}" method="POST">
				@csrf
	
				<div class="mt-4">
					<x-jet-label for="name" value="{{ __('Nombre') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
				</div>
					<x-jet-button class="ml-4">
						{{ __('Registro') }}
					</x-jet-button>
					</form>
				</div>
			</div>
	</x-guest-layout>
	@endsection