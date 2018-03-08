@extends('layouts/app')

@section('content')
	@empty($product)
		<h1 style="color: red">Du försökte komma åt en produkt som inte finns, FYYYY!!</h1>
	@else
		<h1>{{ $product->name }} ({{ $product->price }} kr) [{{ $product->id }}]</h1>

		<h2>Användare som har {{ $product->name }} i sin varukorg</h2>
		<ul>
		@foreach ($product->users as $user)
			<li>{{ $user->name }}</li>
		@endforeach
		</ul>
	@endempty

	<p><a href="{{ route('products.edit', ['product' => $product->id]) }}">Edit Product</a></p>

	<a href="{{ route('products.index') }}">Tillbaka</a>
@endsection
