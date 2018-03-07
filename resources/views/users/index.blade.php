<p>Hello from Users Index view!</p>

<?php
	foreach ($users as $user) {
		echo "Användare: <a href='users/{$user->id}'>{$user->name}</a><br>";
	}
?>
