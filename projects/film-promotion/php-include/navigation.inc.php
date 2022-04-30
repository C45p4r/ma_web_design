<!-- top navigation bar -->
<nav role=”navigation” aria-lable = "website">
	<ul>
		<?php
		if ($this_page == "home"){
			echo "<li>Home</li>";
		} else{
			echo "<li><a href=\"index.php\">About</a></li>";
		}
		if ($this_page == "screen-times"){
			echo "<li>Screen Times</li>";
		} else{
			echo "<li><a href=\"screen-time.php\">Screen Times</a></li>";
		}
		if ($this_page == "Products"){
			echo "<li>The Film</li>";
		} else{
			echo "<li><a href=\"film.php\">The Film</a></li>";
		}
		if ($this_page == "quotes"){
			echo "<li>Quotes</li>";
		} else{
			echo "<li><a href=\"quotes.php\">Quotes</a></li>";
		}
		?>
	</ul>
</nav>