<?php
if (isset($_SERVER["REQUEST_URI"]))
{
	//var_dump($_SERVER);

	$params = array('page' => "pages/home.php",
					'active' => "home",
					'style' => "template/style.css",
					'script' => "script.js");

	$uri = str_replace("/rush00/", "", $_SERVER["REQUEST_URI"]);
	$uriExpl = explode("/", $uri);

	if (isset($uriExpl[0]) && !empty($uriExpl[0])) {
		if (file_exists("pages/".$uriExpl[0].".php")) {
			$params["page"] = "pages/".$uriExpl[0].".php";
			$params["active"] = $uriExpl[0];
			if (isset($uriExpl[1]))
				$params["product_name"] = $uriExpl[1];
		}
		else
			$params["page"] = "pages/notfound.php";
	}
	$_SESSION["params"] = $params;
}
?>
