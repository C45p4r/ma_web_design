<?php
# host, username, password and database name
$host = "localhost";
$username = "";
$password = "";
$db_name = "";

# connect to mysql and select database
$conn = mysqli_connect($host, $username, $password, $db_name);

# build a database query
$query = "SELECT field FROM data_base_name";

# run the query and assign the result to a variable
$result = mysql_query($conn, $query);

# close the connection
mysqli_close($conn);
?>