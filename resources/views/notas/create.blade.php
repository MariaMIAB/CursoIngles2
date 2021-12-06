@extends('layouts.rglayout')
@section('content')
	<x-guest-layout>
		<div class="card div-ex">
			<div class="card-body">
			<h1>Crear una nueva Nota</h1>
			<x-jet-validation-errors class="mb-4" />
			<form action="{{ route('notas.store') }}" method="POST">
				@csrf
				<div class="mt-4">
					<x-jet-label for="nota1" value="{{ __('Primera Nota') }}" />
					<x-jet-input id="nota1" class="block mt-1 w-full" type="number" name="nota1" :value="old('nota1')" required autofocus autocomplete="nota1" />
				</div>

				<div class="mt-4">
					<x-jet-label for="nota2" value="{{ __('Segunda Nota') }}" />
					<x-jet-input id="nota2" class="block mt-1 w-full" type="number" name="nota2" :value="old('nota2')" required autofocus autocomplete="nota2" />
				</div>

				<div class="mt-4">
					<x-jet-label for="nota3" value="{{ __('Tercera Nota') }}" />
					<x-jet-input id="nota3" class="block mt-1 w-full" type="number" name="nota3" :value="old('nota3')" required autofocus autocomplete="nota3" />
				</div>
				<div class="mt-4">
				<x-jet-label for="curso" value="{{ __('Usuario') }}" />
				<select name="usuario_id">
					@foreach($usuario as $users)
					<option value={{$users->id}}>{{$users->name}}</option>	
					@endforeach
				</select>
			</div>
					<x-jet-button class="mt-4">
						{{ __('Registro') }}
					</x-jet-button>
			</form>
		</div>
	</div>
	</x-guest-layout>
	@endsection