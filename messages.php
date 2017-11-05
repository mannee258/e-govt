<?php
require_once 'connect.php';
$contactName=$_POST['contactName'];
$contactEmail=$_POST['contactEmail'];
$contactSubject=$_POST['contactSubject'];
$contactMessage=$_POST['contactMessage'];


      $insertpost="INSERT INTO messagetbl(name, email, subject, message)
                 values('$contactName', '$contactEmail','$contactSubject','$contactMessage')";

      $conn->query($insertpost) or die("Could not insert post, go to previous page click <A href='index.php'>Back</a>."); //insert post

      print "Message posted, to go to previous page click <A href='index.php'>Back</a>.";

?>
