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
	<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
		<symbol id="icon-phone" viewBox="0 0 32 32">
			<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>
		</symbol>
		<symbol id="icon-envelop" viewBox="0 0 32 32">
			<path d="M29 4h-26c-1.65 0-3 1.35-3 3v20c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-20c0-1.65-1.35-3-3-3zM12.461 17.199l-8.461 6.59v-15.676l8.461 9.086zM5.512 8h20.976l-10.488 7.875-10.488-7.875zM12.79 17.553l3.21 3.447 3.21-3.447 6.58 8.447h-19.579l6.58-8.447zM19.539 17.199l8.461-9.086v15.676l-8.461-6.59z"></path>
		</symbol>
		<symbol id="icon-location" viewBox="0 0 32 32">
			<path d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z"></path>
		</symbol>
		</defs>
	</svg>
	<!-- || header section || -->
	<header>
		<!-- top logo -->
		<a href="index.html">
			<picture class="shop-logo">
				<source type="image/svg+xml" srcset="imgs/logo-blue.svg">
				<img src="imgs/logo-blue.png" alt="Jenkin's Butcher logo">
			</picture>
		</a>
		<!-- top navigation bar -->
		<nav id="top-nav">
			<ul>
				<li><a href="about.html">About</a></li>
				<li>Special</li>
				<li><a href="products.html">Products</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<!-- basic contact information without link -->
		<span class="upper">Mon-Fri 0800-1800 | Sat-Sun 1030-1700</span>
		<div class="strips-upper"></div>	<!-- visual element - blue stripy awning -->
		<address>
			<span class="lower">41 Main Street, Ballyclare</span>
		</address>
		<div class="strips-lower"></div>	<!-- visual element - blue stripy awning -->
	</header>
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