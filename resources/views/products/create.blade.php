@extends('layouts/app')

@section('content')
	<h1>Create new Product</h1>

	<form method="POST" action="{{ route('products.store') }}">
		@csrf

		<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Product Name" />
		</div>

		<div class="form-group">
			<input type="number" name="price" class="form-control" placeholder="Product Price" />
		</div>

		<input type="submit" class="btn btn-primary" value="Create Product" />
	</form>

	<a href="{{ route('home') }}">Tillbaka</a>
@endsection
