@empty($user)
	<h1 style="color: red">Du försökte komma åt en användare som inte finns, FYYYY!!</h1>
@else
	<h1>Du vill kolla på användaren {{ $user->name }} som har ID {{ $user->id }}!</h1>
@endempty
