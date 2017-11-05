<?php
require("connect.php");

$q1 = "DROP TABLE IF EXISTS messagetbl";
// mysqli_query($q1) or die(mysqli_error()." at line ". __LINE__);
$conn->query($q1);

$q1 = "CREATE TABLE messagetbl (
  name varchar(20) NOT NULL default '',
  email varchar(20) NOT NULL default '',
  subject varchar(20) NOT NULL default '',
  message varchar(50) NOT NULL default '',
  PRIMARY KEY  (name)) ";
$a = "y";

// mysqli_query($q1) or die(mysqli_error()." at line ". __LINE__);
$conn->query($q1);

$q1 = "DROP TABLE IF EXISTS citizentbl";
$conn->query($q1);

$q1 = "CREATE TABLE citizentbl (
  name varchar(20) NOT NULL default '',
  address varchar(150) NOT NULL default '',
  phonenum varchar(20) NOT NULL default '',
  password varchar(50) NOT NULL default '',
  sex varchar(10) NOT NULL default '',
  age varchar(10) NOT NULL default '',
  PRIMARY KEY  (name)) ";
$a = "y";

// mysqlii_query($q1) or die(mysqli_error()." at line ". __LINE__);
$conn->query($q1);
////////////////////////////////
print "Table created successfully";

?>
