<?php

if (isset($_GET["action"]))
{
	if ($_GET["action"] == "get" && isset($_GET["name"]) && isset($_COOKIE[$_GET["name"]])) {
		echo $_COOKIE[$_GET["name"]]."\n";
	}
	elseif ($_GET["action"] == "set" && isset($_GET["name"]) && isset($_GET["value"])) {
		if (setcookie($_GET["name"], $_GET["value"], time() + 3600) == False)
			echo "Error\n";
	}
	elseif ($_GET["action"] == "del") {
		setcookie($_GET["name"], $_GET["value"], time() - (3600 * 24));
	}
}