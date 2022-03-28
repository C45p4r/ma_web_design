<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/site-icon.ico" type="image/x-icon">	<!-- site icon -->
	<title>Contact | Jenkin's Butchers</title>	<!-- webpage title -->
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
		<h1>Jenkin's Butcher | Contact</h1>	<!-- header | current Page -->
		<p class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" src="imgs/banner-home.jpg" alt="home banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
			<h2 class="underline cw">How to find us</h2>
			<p>Come to our local shop at 41 Main Street, Ballyclare and have a taste of our locally produced premium meat!</p>
			<!-- embed google map using provided code (iFrame) -->
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.634159957998!2d-6.001213284427698!3d54.75123607625364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4861a58dea11c2a3%3A0x8219878eced9e36e!2s41%20Main%20St%2C%20Ballyclare%20BT39%209AA!5e0!3m2!1sen!2suk!4v1643913452706!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="content-wrap">
			<h2 class="underline white">Other methods</h2>
			<!-- contact details -->
			<div class="btmInfo">
				<a href="index.html">
					<picture class="shop-logo small">	<!-- small logo -->
						<source type="image/svg+xml" srcset="imgs/logo-white.svg">
						<img src="imgs/logo.png" alt="Jenkin's Butcher logo">	<!-- fallback png file for svg -->
					</picture>
				</a>
				<p>Opening Hours:</p>	
				<p>Mon to Fri: 0800-1800</p>
				<p>Sat to Sun: 1030-1700</p>
			</div>
			<address>	
				<a href="mailto:contact@jenkinsbutcher.com">	<!-- link to default mail app -->
					<svg class="icon icon-envelop">	<!-- svg icon -->
						<use xlink:href="#icon-envelop"></use>
					</svg>
					<span class="btmInfo">contact@jenkinsbutcher.com</span><br />
				</a>
				<a href="tel:+442893952009">	<!-- link to phone app -->
					<svg class="icon icon-phone">	<!-- svg icon -->
						<use xlink:href="#icon-phone"></use>
					</svg>
					<span class="btmInfo">+44 28 9395 2009</span>
				</a>
			</address>
		</div>
	</main>

	<!-- || footer section || -->
	<!-- section included with php -->
	<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/footer.inc.php'; ?>

</body>
</html>