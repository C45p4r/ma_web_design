<?php $this_page ="Home"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/site-icon.ico" type="image/x-icon">	<!-- site icon -->
	<title><? echo $this_page; ?> | Jenkin's Butchers</title>	<!-- webpage title -->
	<link href="scirpts/style.css" rel="stylesheet">	<!-- external style sheet -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Required for mobile devices -->
	<!-- use of external google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Forum&family=IM+Fell+English+SC&family=Jost:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
	<!-- svg of the contact icons -->
	<!-- section included with php -->
	<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/svg-icon.inc.php'; ?>

	<!-- || header section || -->
	<!-- section included with php -->
	<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/header.inc.php'; ?>

	<!-- || main content section || -->
	<main>
		<h1><? echo $this_page; ?> | Jenkin's Butchers</h1>	<!-- header | current Page -->
		<p class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" src="imgs/banner-home.jpg" alt="home banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
			<h2 class="underline cw">Your Local Butcher</h2>	<!-- sub-title with underline (svg) --> 
			<img class="featured" src="imgs/butcher-01.jpg" alt="photo of a butcher">	<!-- featured photo --> 
			<p>Jenkins' Butchers is a traditional butcher shop in Ballyclare that has proudly served the Ballyclare community for the past 90 years. </p>
			<p>We provides locally reared, choice and prime beef that has been aged for at least 21 days for tenderness and flavour.  We also provide a huge selection of pork, lamb, and poultry, as well as homemade sausages and various deli chesses.</p>
			<p>Come and bring home the finest cut of meat for you and your family!</p>
		</div>
		<div class="content-wrap">
			<h2 class="underline acw">We proudly offer</h2>
			<div class="offers">	<!-- gallery-like view showing different offers -->
				<figure>
					<a href="products.html">
						<img src="imgs/beef.png" alt="nice cut of beef">	
					</a>
						<figcaption>Beef</figcaption>
				</figure>
				<figure>
					<a href="products.html">
						<img src="imgs/pork.png" alt="nice cut of pork">
					</a>
						<figcaption>Pork</figcaption>
				</figure>
				<figure>
					<a href="products.html">
						<img src="imgs/chicken.png" alt="nice cut of poultry">
					</a>
						<figcaption>Chicken</figcaption>
				</figure>
				<figure>
					<a href="products.html">
						<img src="imgs/lamb.png" alt="nice cut of lamb">
					</a>
					<figcaption>Lamb</figcaption>
				</figure>
				<figure>
					<a href="products.html">
						<img src="imgs/sausages.png" alt="homemade sausages">
					</a>
					<figcaption>Sausages</figcaption>				
				</figure>
				<figure>
					<a href="products.html">
						<img src="imgs/cheese.png" alt="deli cheese">
					</a>
					<figcaption>Deli</figcaption>
				</figure>
			</div>
		</div>
		<div class="content-wrap">
			<h2 class="underline cw">How to find us</h2>
				<!-- embed google map using provided code (iFrame) -->
				<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.634159957998!2d-6.001213284427698!3d54.75123607625364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4861a58dea11c2a3%3A0x8219878eced9e36e!2s41%20Main%20St%2C%20Ballyclare%20BT39%209AA!5e0!3m2!1sen!2suk!4v1643913452706!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		
		<!-- || contact us section with bottom navigation|| -->
		<!-- section included with php -->
		<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/contact-us.inc.php'; ?>

	</main>

	<!-- || footer section || -->
	<!-- section included with php -->
	<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/footer.inc.php'; ?>

</body>
</html>

