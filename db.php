<?php

function getDB()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	return (mysqli_connect($servername, $username, $password, "rush00"));
}
?>
