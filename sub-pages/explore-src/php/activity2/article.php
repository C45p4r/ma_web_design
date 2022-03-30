<?php
# A simple CMS application to extract articles from a database and build a webpage.
# For ease of understanding, this script uses the mysqli connection methods described in
# the Head First and Larry Ullman books, and not the PDO methods described in the Jon
# Duckett and David Powers books.
# This application contains an example of input validation to prevent SQL injection.

# The value of $_GET, taken from the URL parameter is unsafe because it has been in the
# public domain. It must be validated.
# Validate input: if id is set (has a value = not null) and the data type is an integer,
# it seems to be OK, so assign the value to a variable ($article).
# If it doesn't pass the test, issue a 404 error, exit the script and print a message.
if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $article=$_GET['id'];
}else{
	header('HTTP/1.0 404 Not Found');
	exit("<h1>Not Found</h1>\n<p>The submitted data is not valid.</p>");
}
# If we're still in the script, all is OK, so proceed

# Assign host, username, password and database name to variables
$host     = "localhost"; # usually "localhost" but may be different
$user     = "curiosit_strange-tales"; # add your database username here
$password = "2Id,1~vZd(?ZgM~}M{"; # add your database user password here
$name     = "curiosit_strange-tales"; # add your database name here

# Connect to the database or stop the script and give an error message
$conn = mysqli_connect($host, $user, $password, $name) or die ("Cannot connect to database.");

# Build the query and assign it to a variable
# This query uses a WHERE clause to select just one row, determined by the value of $article.
$query = "SELECT article_id, headline, article, author, novel, published FROM articles WHERE article_id = $article";

# Run the query and assign the result to a variable ($result) or give an error message
$result = mysqli_query($conn, $query) or die ("Error querying database.");

# Close the database connection
mysqli_close($conn);

# Only one row in the result so we don't need a while loop
$row = mysqli_fetch_array($result);

# Check that id points to a real article - if $row doesn't have a value, we know there's a problem.
# If that article doesn't exist, issue a 404 error, exit and print a message.
if (!$row) {
	header('HTTP/1.0 404 Not Found');
	exit("<h1>Not Found</h1>\n<p>The requested article does not exist.</p>");
}

# If all the tests have been passed and we've reached this point, all is OK.
# Assign each array element from the $row array to a variable
$article_id = $row['article_id'];
$headline = $row['headline'];
$article = $row['article'];
$author = $row['author'];
$novel = $row['novel'];
$date = $row['published'];
	
# Convert the mysql date to a php timestamp so it can more easily be formatted
$timestamp = strtotime($date);
	
# Format the php timestamp for date and time
$display_date = date('jS F Y', $timestamp);
$display_time = date('g:ia', $timestamp);

# End this script and start building the page
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><? echo $headline; ?> | Strange Tales</title>
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
# Bulid the formatted markup for the Strange Tales article
echo "            <article>\n";
echo "                <header>\n";
echo "                    <h2>$headline</h2>\n";
echo "                    <p><cite>An extract from the novel <b>$novel</b> by $author</cite></p>\n";
echo "                </header>\n";
echo "<!-- Start of article markup -->\n";
echo "$article\n";
echo "<!-- End of article markup -->\n";
echo "                <p><a href=\"index.php\"><span class=\"arrow\">&laquo;</span>Back to homepage</a></p>\n";
echo "                <footer>Published: $display_date at $display_time</footer>\n";
echo "            </article>\n";
# When the markup for the full article is complete, the page can be completed
?>
		</main>
		<footer>Written for MA Web Design &amp; Content Planning by David Watson</footer>
	</body>
</html>