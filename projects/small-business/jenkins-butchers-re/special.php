<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/site-icon.ico" type="image/x-icon">	<!-- site icon -->
	<title>Special | Jenkin's Butchers</title>	<!-- webpage title -->
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
		<h1>Jenkin's Butcher | Special</h1>	<!-- header | current Page -->
		<p class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" src="imgs/banner-special.jpg" alt="special offers banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
			<h2 class="underline cw">Special Offers</h2>
			<img class="categories" src="imgs/special-bundle.jpg" alt="meat bundle offer">
			<h3>Meat Bundle</h3>
			<p>Small family Butcher Baskets (~150 GBP)<p>
			<ul>
				<li>~1.5kg of steaks and/or chops</li>
				<li>~2.5kg of larger roasting and/or braising cuts</li>
				<li>~ 1 kg of of ground meat</li>
			</ul>
			<p>Large family Butcher Baskets (~200 GBP)<p>
			<ul>
				<li>~2.5kg of steaks and/or chops</li>
				<li>~3.5kg of larger roasting and/or braising cuts</li>
				<li>~ 2 kg of of ground meat</li>
			</ul>
			<img class="categories" src="imgs/special-bbq.jpg" alt="bbq bundle offer">
			<p>Weekend bundle (45 GPB)<p>
			<ul>
				<li>1 Whole chicken</li>
				<li>3 lbs Pork Loin Chops</li>
				<li>5 lbs Boneless Blade Steak</li>
				<li>3 lbs Lean Ground Beef</li>
			</ul>
			<p>Value bundle for family (65 GPB)<p>
			<ul>
				<li>4 lbs Pork Loin Chops</li>
				<li>5 lbs Sirloin Tip Steak</li>
				<li>2 Whole chicken</li>
				<li>3 lbs Pork Side Ribs</li>
			</ul>
		</div>
		<div class="content-wrap">
			<h2 class="underline white">Contact us</h2>
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
				<a href="https://goo.gl/maps/maJHvH7Akt7LfnARA">	<!-- link to google map -->
					<svg class="icon icon-location">	<!-- svg icon -->
						<use xlink:href="#icon-location"></use>	
					</svg>
					<span class="btmInfo">41 Main Street, Ballyclare</span><br />
				</a>
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