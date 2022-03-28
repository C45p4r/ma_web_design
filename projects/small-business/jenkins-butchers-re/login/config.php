<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 1);

   $servername = "localhost";
   $dbusername = "curiosit_c45p4r";
   $dbpassword = "LZ2cLj9PUsKBDki";
   $database = "curiosit_jenkins_butchers";

   $conn = mysqli_connect($servername, $dbusername, $dbpassword, $database);

   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }
?>