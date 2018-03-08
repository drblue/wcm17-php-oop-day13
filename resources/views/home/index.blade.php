@extends('layouts/app')

@section('content')
	<h1>Välkommen!</h1>

	<ul>
		<li><a href="{{ route('users.index') }}">Users</a></li>
		<li><a href="{{ route('products.index') }}">Products</a></li>
	</ul>
@endsection
