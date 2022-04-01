<!-- || footer section || -->
<footer>
	<nav id="bottom-nav" aria-label="footer navigation">	<!-- bottom navigation bar -->
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
	<!-- website information -->
	<p>Coursework by Caspar Leung - MA Web Design and Content Planning</p>
	<p>University of Greenwich - <? echo date("Y"); ?></p>
</footer>
<script src="scripts/script.js"></script>