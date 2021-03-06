<?php $this_page ="Products"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">	<!-- site icon -->
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<title>Products | Jenkin's Butchers</title>	<!-- webpage title -->
	<link href="scripts/style.css" rel="stylesheet">	<!-- external style sheet -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Required for mobile devices -->
	<meta name="description" content="Jenkin's Butchers has a varierty of products on the shelf, please come visit us and ask any of our staff for recommandation!">
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
		<h1>Jenkin's Butcher | Products</h1>	<!-- header | current Page -->
		<p id="sub" class="sub">Premium meat from local farm</p>	<!-- short slogan -->
		<img class="banner" role=”banner” src="imgs/banner-products.jpg" alt="products banner">	<!-- banner reflecting the theme -->
		<!-- | sections of content | -->
		<div class="content-wrap">
			<h2 class="underline cw">Our products</h2>
			<div class="wrap2">
				<img class="categories" src="imgs/product-beef.jpg" alt="beef products">
				<h3 id="product-beef">Beef</h3>
				<ul>
					<li>Hamburger Patties</li>
					<li>Stew Meat</li>
					<li>Chuck Roast</li>
					<li>Rump Roast</li>
					<li>Sirloin Tip Roast</li>
				</ul>
			</div>
			<div class="wrap2">
				<img class="categories" src="imgs/product-pork.jpg" alt="pork products">
				<h3 id="product-pork">Pork</h3>
				<ul>
					<li>Pork chops</li>
					<li>Pork loin</li>
					<li>Pork steak</li>
					<li>Pork cutlet</li>
					<li>Spare ribs</li>
					<li>Ground pork</li>
				</ul>
			</div>
			<div class="wrap2">
				<img class="categories" src="imgs/product-chicken.jpg" alt="chicken products">
				<h3 id="product-chicken">Chicken</h3>
				<ul>
					<li>Boneless breasts</li>
					<li>Boneless thighs</li>
					<li>Ground chicken breast</li>
					<li>Ground chicken thigh</li>
					<li>Chicken wings</li>
					<li>Whole chicken</li>
				</ul>
			</div>
			<div class="wrap2">
				<img class="categories" src="imgs/product-lamb.jpg" alt="lamb products">
				<h3 id="product-lamb">Lamb</h3>
				<ul>
					<li>Boneless shoulder</li>
					<li>Lamb ribs</li>
					<li>Sirloin Chop</li>
					<li>Fore Shank</li>
					<li>Boneless leg</li>
					<li>Lamb cubed steak</li>
				</ul>
			</div>
			<div class="wrap2">
				<img class="categories" src="imgs/product-sausages.jpg" alt="other products">
				<h3 id="product-others">Others</h3>
				<ul>
					<li>Homemade sausages</li>
					<li>Deli cheese</li>
					<li>pack of eggs</li>
				</ul>
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