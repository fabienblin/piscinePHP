<?php
if (isset($_POST["submit"]) && isset($_POST["login"]) && isset($_POST["passwd"])) {
	
	$users = array();
	if (!file_exists("../private")) {
		mkdir("../private");
	}
	else {
		if ($file = file_get_contents("../private/passwd")) {
			$users = unserialize($file);
			foreach ($users as $user) {
				if ($user["login"] == $_POST["login"]) {
					echo "ERROR\n";
					exit;
				}
			}
			$users[] = array("login"=>$_POST["login"], "passwd"=>hash("whirlpool", $_POST["passwd"]));
			echo "OK\n";
		}
	}
	file_put_contents("../private/passwd", serialize($users));
}

