<nav>
	<ul>
		<li <?php if ($params["active"] == "home") {echo "class='active'";}?>><a href="/rush00/home">Home</a></li>
		<li <?php if ($params["active"] == "shoes") {echo "class='active'";}?>><a href="/rush00/shoes">Shoes</a></li>
		<li <?php if ($params["active"] == "tshirts") {echo "class='active'";}?>><a href="/rush00/tshirts">T-Shirts</a></li>
		<li <?php if ($params["active"] == "pants") {echo "class='active'";}?>><a href="/rush00/pants">Pants</a></li>
		<?php
			if (isset($_SESSION["logged"])) {
				echo "<li style='float:right'";
				if ($params["active"] == "login") {echo "class='active'";}
				echo"><a href='/rush00/login'>Account</a></li>";
			}
			else {
				echo "<li style='float:right'";
				if ($params["active"] == "login") {echo "class='active'";}
				echo "><a href='/rush00/login'>Log</a></li>";
			}
		?>
		<li <?php if ($params["active"] == "cart") {echo "class='active'";}?> style='float:right'><a href="/rush00/cart">Cart</a></li>
	</ul>
</nav>
