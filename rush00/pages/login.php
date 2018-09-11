
<?php

if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
	$LogoutForm = include("template/user/logout.php");
	$UpdateUserForm = include("template/user/update.php");
	echo'
	<div class="LogoutForm">
		<h2>Logout</h2>
		'.$LogoutForm.'
	</div>';
	echo'
	<div class="UpdateUserForm">
		<h2>Edit Profile</h2>
		'.$UpdateUserForm.'
	</div>';
}
else {
	$LoginForm = include("template/user/login.php");
	$signinForm = include("template/user/signin.php");
	echo '
	<div class="loginForm">
		<h2>I have an account.</h2>
		'.$LoginForm.'
	</div>';
	echo '
	<div class="signinForm">
		<h2>I create my account.</h2>
		'.$signinForm.'
	</div>';
}
?>
