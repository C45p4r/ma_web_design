<?php $this_page ="Home"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">	<!-- site icon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<title><? echo $this_page; ?> | Jenkin's Butchers</title>	<!-- webpage title -->
	<link href="scripts/style.css" rel="stylesheet">	<!-- external style sheet -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Required for mobile devices -->
	<meta name="description" content="Jenkin's Butchers provides the best meat cut for you, fresh from local farm everyday, come visit us!">
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
		<h1><? echo $this_page; ?> | Jenkin's Butchers</h1>	<!-- header | current Page -->
		<p id="sub" class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" role=”banner” src="imgs/banner-home.jpg" alt="home banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
			<h2 class="underline cw">Your Local Butcher</h2>	<!-- sub-title with underline (svg) --> 
			<div class="wrap1">
				<img class="featured" src="imgs/butcher-01.jpg" alt="photo of a butcher">	<!-- featured photo --> 
				<div class="text-wrap-more">
					<p>Jenkins' Butchers is a traditional butcher shop in Ballyclare that has proudly served the Ballyclare community for the past 90 years. </p>
					<p>We provides locally reared, choice and prime beef that has been aged for at least 21 days for tenderness and flavour.  We also provide a huge selection of pork, lamb, and poultry, as well as homemade sausages and various deli chesses.</p>
					<p>Don't worry if you don't know much about different meat cuts, just ask any of our staff/butcher, we are glad to explain and give you recommandations accorrding to your needs</p>
					<p>Come and bring home the finest cut of meat for you and your family!</p>
				</div>
			</div>
		</div>
		<div class="content-wrap-more">
			<h2 class="underline acw">We proudly offer</h2>
			<div class="offers">	<!-- gallery-like view showing different offers -->
				<figure>
					<a href="	">
						<img src="imgs/beef.png" alt="nice cut of beef">	
					</a>
						<figcaption>Beef</figcaption>
				</figure>	
				<figure>
					<a href="products.php">
						<img src="imgs/pork.png" alt="nice cut of pork">
					</a>
						<figcaption>Pork</figcaption>
				</figure>
				<figure>
					<a href="products.php">
						<img src="imgs/chicken.png" alt="nice cut of poultry">
					</a>
						<figcaption>Chicken</figcaption>
				</figure>
				<figure>
					<a href="products.php">
						<img src="imgs/lamb.png" alt="nice cut of lamb">
					</a>
					<figcaption>Lamb</figcaption>
				</figure>
				<figure>
					<a href="products.php">
						<img src="imgs/sausages.png" alt="homemade sausages">
					</a>
					<figcaption>Sausages</figcaption>				
				</figure>
				<figure>
					<a href="products.php">
						<img src="imgs/cheese.png" alt="deli cheese">
					</a>
					<figcaption>Deli</figcaption>
				</figure>
			</div>
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

