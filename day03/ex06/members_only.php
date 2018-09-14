<?php
if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys") {
	$image = base64_encode(file_get_contents("../img/42.png"));
	
	echo "<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,$image'>
</body></html>\n";
}
else {
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
?>
