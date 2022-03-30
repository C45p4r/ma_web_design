<?php
#step through each news article, one at a time
while ($row = mysqli_fetch_array($result)) {

	$headline = $row['headline'];
	$date = $row['pubdate'];
	$markup = $row['markup'];

	#convert mysql date to php timestamp
	$timestamp = strtotime($date);

	#format php timestamp
	$display_date('jS F Y', $timestamp);

	# print out the news story
	echo "<h1>$headline</h1>";
	echo "<p>$display_date</p>";
	echo "$markup";
}
?>