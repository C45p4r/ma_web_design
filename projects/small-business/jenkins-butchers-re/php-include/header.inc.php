<!-- || header section || -->
<header>
	<!-- top logo -->
	<a href="index.php">
		<picture class="shop-logo">
			<source type="image/svg+xml" srcset="imgs/logo-blue.svg">
			<img src="imgs/logo-blue.png" alt="Jenkin's Butcher logo">
		</picture>
	</a>
	<!-- top navigation bar -->
	<nav id="top-nav" aria-lable = "website">
		<ul>
			<?php
			if ($this_page == "About"){
				echo "<li>About</li>";
			} else{
				echo "<li><a href=\"about.php\">About</a></li>";
			}
			if ($this_page == "Special"){
				echo "<li>Special</li>";
			} else{
				echo "<li><a href=\"special.php\">Special</a></li>";
			}
			if ($this_page == "Products"){
				echo "<li>Products</li>";
			} else{
				echo "<li><a href=\"products.php\">Products</a></li>";
			}
			if ($this_page == "Contact"){
				echo "<li>Contact</li>";
			} else{
				echo "<li><a href=\"contact.php\">Contact</a></li>";
			}
			?>
		</ul>
	</nav>
	
	<!-- basic contact information without link -->
	<span class="upper">Mon-Fri 0800-1800 | Sat-Sun 1000-1700</span>
	<div class="strips-upper"></div>	<!-- visual element - blue stripy awning -->
	<address>
		<span class="lower">41 Main Street, Ballyclare</span>
	</address>
	<div class="strips-lower"></div>	<!-- visual element - blue stripy awning -->
</header>