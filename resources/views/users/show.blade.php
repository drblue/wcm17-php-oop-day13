@extends('layouts/app')

@section('content')
	@empty($user)
		<h1 style="color: red">Du försökte komma åt en användare som inte finns, FYYYY!!</h1>
	@else
		<h1>{{ $user->name }} ({{ $user->id }})</h1>

		<h2>Produkter i {{ $user->name }}s varukorg</h2>
		<ul>
		@foreach ($user->products as $product)
			<li>{{ $product->name }} ({{ $product->price }} kr)</li>
		@endforeach
		</ul>
	@endempty

	<a href="{{ route('users.index') }}">Tillbaka</a>
@endsection
