<?php 
// Enter the MySQL Host Address 
$dbhost = 'localhost'; 
// Enter the MySQL Username 
$dbuser = 'root'; 
// Enter the MySQL Password 
$dbpass = 'Spider234'; 
// Enter the MySQL Database Name 
$dbname = 'nigdb'; 

// Establish the MySQL Connection 
//code refrcatored to php 7 
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 

?>