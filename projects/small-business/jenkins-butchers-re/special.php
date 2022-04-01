<?php $this_page ="Special"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/site-icon.ico" type="image/x-icon">	<!-- site icon -->
	<title>Special | Jenkin's Butchers</title>	<!-- webpage title -->
	<link href="scripts/style.css" rel="stylesheet">	<!-- external style sheet -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Required for mobile devices -->
	<meta name="description" content="Jenkin's Butchers provides special meat bundle, catering your needs!">
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
		<p id="sub" class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" src="imgs/banner-special.jpg" alt="special offers banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
		<h2 class="underline cw">Special Offers</h2>
			<div class="wrap1">
				<img class="categories" src="imgs/special-bundle.jpg" alt="meat bundle offer">
				<div class="text-wrap">
					<h3>Meat Bundle</h3>
					<p>Small family Butcher Baskets (~150 GBP)</p>
					<ul>
						<li>~1.5kg of steaks and/or chops</li>
						<li>~2.5kg of larger roasting and/or braising cuts</li>
						<li>~ 1 kg of of ground meat</li>
					</ul>
					<p>Large family Butcher Baskets (~200 GBP)</p>
					<ul>
						<li>~2.5kg of steaks and/or chops</li>
						<li>~3.5kg of larger roasting and/or braising cuts</li>
						<li>~ 2 kg of of ground meat</li>
					</ul>
				</div>
			</div>
			<div class="wrap1">
				<img class="categories" src="imgs/special-bbq.jpg" alt="bbq bundle offer">
				<div class="text-wrap">
					<p>Weekend bundle (45 GPB)</p>
					<ul>
						<li>1 Whole chicken</li>
						<li>3 lbs Pork Loin Chops</li>
						<li>5 lbs Boneless Blade Steak</li>
						<li>3 lbs Lean Ground Beef</li>
					</ul>
					<p>Value bundle for family (65 GPB)</p>
					<ul>
						<li>4 lbs Pork Loin Chops</li>
						<li>5 lbs Sirloin Tip Steak</li>
						<li>2 Whole chicken</li>
						<li>3 lbs Pork Side Ribs</li>
					</ul>
				</div>
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