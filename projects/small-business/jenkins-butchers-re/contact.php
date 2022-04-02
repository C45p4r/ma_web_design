<?php $this_page ="Contact"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">	<!-- site icon -->
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<title>Contact | Jenkin's Butchers</title>	<!-- webpage title -->
	<link href="scripts/style.css" rel="stylesheet">	<!-- external style sheet -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Required for mobile devices -->
	<meta name="description" content="Jenkin's Butcher is located at the Main Street of Ballyclare, come and visit us during our opening hour for the best meat cut!">
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
	<main role="main">
		<h1>Jenkin's Butcher | Contact</h1>	<!-- header | current Page -->
		<p id="sub" class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" role=”banner” src="imgs/banner-home.jpg" alt="home banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap h-card">
			<h2 class="underline cw">How to find us</h2>
			<!-- embed google map using provided code (iFrame) -->
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.634159957998!2d-6.001213284427698!3d54.75123607625364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4861a58dea11c2a3%3A0x8219878eced9e36e!2s41%20Main%20St%2C%20Ballyclare%20BT39%209AA!5e0!3m2!1sen!2suk!4v1643913452706!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<p>Come to the <span class="p-name">Jenkin's Butchers</span> shop at 41 Main Street, Ballyclare and have a taste of our locally produced premium meat!</p>
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