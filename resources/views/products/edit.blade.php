@extends('layouts/app')

@section('content')
	<h1>Edit Product {{ $product->name }}</h1>

	<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
		@csrf
		<input type="hidden" name="_method" value="PUT" />

		<div class="form-group">
			<input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Product Name" />
		</div>

		<div class="form-group">
			<input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Product Price" />
		</div>

		<input type="submit" class="btn btn-primary" value="Update Product" />
	</form>

	<a href="{{ route('home') }}">Tillbaka</a>
@endsection
