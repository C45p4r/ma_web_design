<?php $this_page ="404Error"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">	<!-- support most characters and symbols -->
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">	<!-- site icon -->
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<title><? echo $this_page; ?> | Jenkin's Butchers</title>	<!-- webpage title -->
	<link href="scripts/style.css" rel="stylesheet">	<!-- external style sheet -->
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
	<main role="main">
		<h1><? echo $this_page; ?></h1>	<!-- header | current Page -->
		<p class="sub">Oh dear, We are really sorry, seems like something has gone wrong.</p>
		<p class="sub">You might want to check out the <a class="underline" href="https://www.wpoven.com/blog/error-404-not-found/">Link</a> Here for an answer</p>
		<!-- || contact us section with bottom navigation|| -->
		<!-- section included with php -->
		<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/contact-us.inc.php'; ?>
	</main>
	<!-- || footer section || -->
	<!-- section included with php -->
	<? include $_SERVER['DOCUMENT_ROOT'] . '/projects/small-business/jenkins-butchers-re/php-include/footer.inc.php'; ?>
</body>
</html>