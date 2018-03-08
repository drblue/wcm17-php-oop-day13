@extends('layouts/app')

@section('content')
	<h1>Users</h1>

	<ul>
	@foreach($users as $user)
		<li><a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></li>
	@endforeach
	</ul>

	<a href="{{ route('home') }}">Tillbaka</a>
@endsection
