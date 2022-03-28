<!DOCTYPE HTML>
<html lang="en" dir="ltr"x>
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/site-icon.ico" type="image/x-icon">	<!-- site icon -->
	<title>About | Jenkin's Butchers</title>	<!-- webpage title -->
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
		<h1>Jenkin's Butcher | About</h1>	<!-- header | current Page -->
		<p class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" src="imgs/banner-about.jpg" alt="about page banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
			<h2 class="underline cw">About us</h2>
			<img class="featured" src="imgs/about-01.png" alt="old photo of the founder">	<!-- featured photo -->
			<p>Established in 1932, the Jenkins’ Butchers, purveyors of premium meat are committed to serving fresh meat that is seasonal, locally sourced, and grown in a sustainable manner</p>
			<p>Over the years, we dedicated to providing excellent service to our customers. We pride ourselves in providing fresh, premium meat cut deliveried from local farm. Fresh, local produce is our main aim.</p>
			<img class="featured" src="imgs/about-02.jpg" alt="butcher and his son">	<!-- featured photo -->
			<p>Despite supermarkets have supplanted the fading traditional butcher shop as the primary source of meat, our business is happy going into fourth generation soon.  We consider our shop not just a business, but a responsibiliy to gather the best meat for our local community.</p> 
		</div>
		<div class="content-wrap">
			<h2 class="underline acw">Our Team</h2>
			<img class="side" src="imgs/butcher-02.png" alt="photo of Peter">
			<h3>Current shop owner - Peter</h3>
			<p>As the third generation of Jenkin's Butchers, I will ensure that our shop provides the greatest quality, service, and experience for our Ballyclare community.</p>
			<p>"Every customer is important to us, regardless of how much, or how little they spend"</p>
			<img class="side" src="imgs/butcher-03.png" alt="photo of William">
			<h3>Professional butcher - William</h3>
			<p>I started helping my father when I was 14, I feel like our mission is not just bringing premium products to our customers, but to bring a comfortable and enjoyable experience to them.</p>
			<p>Don't hesitate to come by even if you have no idea what you are looking for, I am sure we can give you good advice from meat cuts to recipes.</p>
			<img class="side" src="imgs/butcher-04.png" alt="photo of Adward">
			<h3>Assistant butcher - Adward</h3>
			<p>I have been working with Peter and William for more than 10 years, and I really enjoy my job as a butcher.  Jenkin's Butchers are always there listing up the best quality meats from our local farmer for you!</p>
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