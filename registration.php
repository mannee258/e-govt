<?php
require_once 'connect.php';
$name=$_POST['name'];
$address=$_POST['address'];
$phonenum=$_POST['phoneNo'];
$password=$_POST['password'];
$sex=$_POST['sex'];
$age=$_POST['age'];

      $insertpost="INSERT INTO citizentbl(name, address, phonenum, password, sex, age)
                 values('$name', '$address','$phonenum','$password','$sex', '$age')";

      $conn->query($insertpost) or die("Could not insert post"); //insert post

      print "Message posted, to go to previous page click <A href='index.php'>Back</a>.";

?>
