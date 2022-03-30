<?php $page_name = "PHP test"; ?>
<html>
	<head>
		<title><?php echo $page_name ?></title>
	</head>
	<body>
		<h1><?php echo $page_name ?></h1>
		<?php 
			# print something
			echo "<p>Hello World!</p>"; 

			# declare variables
			# convention: veriable names are seperate by using "_" underscore
			$page_number = 5;

			#tell us what date it is
			$today = date("l"); // that;s a lower-case "L"
			echo "<p>Today is $today</p>";
			if ($today == "Saturday" OR $today == "Sunday") {
				echo "<p>Hooray!  It's the weekend.</p>";
			} else {
				echo "<p>Oh, it's just another work day.</p>";
			}
		?>
	</body>
</html>