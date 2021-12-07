@extends('layouts.rglayout')
@section('content')
    <x-guest-layout>
	<div class="card div-ex">
		<div class="card-body">
	<form action="{{ route('user.update', $user) }}" method="POST">
	@csrf
	@method('put')
	<div class="mt-4">
		<h1>Editar user</h1>
		</div>
				<div class="ml-4">
					<x-jet-label for="name" value="{{ __('Nombre') }}" />
					<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}"/>
				</div>
					<x-jet-button class="ml-4">
						{{ __('Actulizar registro') }}
					</x-jet-button>
				</form>
				</div>
			</div>
	</x-guest-layout>
	@endsection