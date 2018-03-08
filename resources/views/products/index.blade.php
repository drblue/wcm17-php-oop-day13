@extends('layouts/app')

@section('content')
	<h1>Products</h1>

	<ul>
	@foreach($products as $product)
		<li><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->name }}</a> ({{ $product->price }} kr)</li>
	@endforeach
	</ul>

	<p>
		<a href="{{ route('products.create') }}">Create new Product</a>
	</p>

	<a href="{{ route('home') }}">Tillbaka</a>
@endsection
