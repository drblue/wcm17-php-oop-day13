<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	function index() {
		$users = User::get();

		return view('users/index', ['users' => $users]);	
	}

	function show(User $user) {
		return view('users/show', ['user' => $user]);
	}
}
