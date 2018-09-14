<?php
if (isset($_POST["submit"]) && isset($_POST["login"]) && isset($_POST["oldpw"]) && isset($_POST["newpw"])) {
	
	$users = array();
	if (!file_exists("../private")) {
		mkdir("../private");
	}
	else {
		if ($file = file_get_contents("../private/passwd")) {
			$users = unserialize($file);
			foreach ($users as &$user) {
				if ($user["login"] == $_POST["login"]) {
					if ($user["passwd"] == hash("whirlpool", $_POST["oldpw"])) {
						$user["passwd"] = hash("whirlpool", $_POST["newpw"]);
						echo "OK\n";
						exit;
					}
				}
			}
			echo "ERROR\n";
		}
	}
	file_put_contents("../private/passwd", serialize($users));
}

