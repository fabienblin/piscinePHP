
<?php
session_start();

$_SESSION["login"] = "";
$_SESSION["passwd"] = "";

if (isset($_GET["submit"]) && isset($_GET["login"]) && isset($_GET["passwd"])) {
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}

echo '
<form method="get" action="index.php">
	Identifiant: <input name="login" type="text" value="'.$_SESSION["login"].'" />
	<br />
	Mot de passe: <input type="password" name="passwd" value="'.$_SESSION["passwd"].'" />
	<input type="submit" name="submit" value="OK"/>
</form>
';
