<?php
# A simple CMS application to extract articles from a database and build a webpage.
# For ease of understanding, this script uses the mysqli connection methods described in
# the Head First and Larry Ullman books, and not the PDO methods described in the Jon
#  Duckett and David Powers books.

# This script does not rely on user input, the data comes only from the database and can be
# considered safe. No data testing is necessary.

# Assign host, username, password and database name to variables
$host     = "localhost"; # usually "localhost" but may be different
$user     = "curiosit_strange-tales"; # add your database username here
$password = "2Id,1~vZd(?ZgM~}M{"; # add your database user password here
$name     = "curiosit_strange-tales"; # add your database name here

# Connect to the database or stop the script and give an error message
$conn = mysqli_connect($host, $user, $password, $name) or die ("Cannot connect to database.");

# Build the query and assign it to a variable
# This query selects 5 columns from the articles table and orders them by date (newest first).
# LIMIT 10 means select only the most recent 10 articles.
$query = "SELECT article_id, headline, intro, author, published FROM articles ORDER BY published DESC LIMIT 10";

# Run the query and assign the result to a variable ($result) or give an error message
$result = mysqli_query($conn, $query) or die ("Error querying database.");

# Close the database connection
mysqli_close($conn);

# End this script and start building the page
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Strange Tales | PHP and MySQL Example</title>
		<link rel="stylesheet" href="style/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&family=Oswald:wght@300;400&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<header>
			<h1>Strange Tales</h1>
    		<p>A simple Content Management System using PHP and MySQL</p>
		</header>
		<main>
<?php
# Step through each Strange Tales article, one at a time using a while loop
# The loop will continue while there is still data to fetch
while ($row = mysqli_fetch_array($result))
{
	# Assign each array element from the $row array to a variable
	$article_id = $row['article_id'];
	$headline = $row['headline'];
	$intro = $row['intro'];
	$author = $row['author'];
	$date = $row['published'];
	
	# Convert the mysql date to a php timestamp so it can more easily be formatted
	$timestamp = strtotime($date);
	
	# Format the php timestamp for date and time
	$display_date = date('jS F Y', $timestamp);
	$display_time = date('g:ia', $timestamp);
	
	# Build the formatted markup for one article with each iteration of the while loop
	# We are adding a URL parameter to the link for article.php using the $article_id variable.
	echo "        <article> <!-- start of article card -->\n";
	echo "            <header>\n";
	echo "                <h2>$headline</h2>\n";
	echo "                <p>$display_date</p>\n";
	echo "            </header>\n";
	echo "<!-- Start of introductory text -->\n";
	echo "$intro\n";
	echo "<!-- End of introductory text -->\n";
	echo "            <p><a href=\"article.php?id=$article_id\">Read more<span class=\"arrow\">&raquo;</span></a></p>\n";
	echo "            <footer>Published: $display_time by $author</footer>\n";
	echo "        </article>\n\n";
}
# When the final article is built, the loop ends and the page can be completed
?>
		</main>
		<footer>Written for MA Web Design &amp; Content Planning by David Watson</footer>
	</body>
</html>