<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	function index() {
		$users = \App\User::get();

		return view('users/index', ['users' => $users]);	
	}

	function show($user_id) {
		$user = \App\User::find($user_id);

		return view('users/show', ['user' => $user]);
	}
}
