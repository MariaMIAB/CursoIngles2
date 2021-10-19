@extends('layouts.layout')

@section('title', 'Cronograma edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar una materia</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('cronograma.update', $cronograma) }}" method="POST">
				@csrf
				@method('put')
	
				<label>
					 <br>
					 <x-jet-label value="{{ __('Descripcion') }}" />
					 <textarea rows="6" cols="20" class="block mt-1 w-full" name="descripcion" ><?php echo $cronograma->descripcion?></textarea>
			
				</label>
				<div>
					<x-jet-label value="{{ __('Fechaini') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fechaini" value="{{$cronograma->fechaini}}"  />
				</div>
				<div>
					<x-jet-label value="{{ __('Fechafin') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fechafin" value="{{$cronograma->fechafin}}" />
				</div>

				<br>
					<x-jet-button class="ml-4">
							<br>
						{{ __('Actulizar registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>