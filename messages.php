<?php
require_once 'connect.php';
$contactName=$_POST['contactName'];
$contactEmail=$_POST['contactEmail'];
$contactSubject=$_POST['contactSubject'];
$contactMessage=$_POST['contactMessage'];


      $insertpost="INSERT INTO messagetbl(name, email, subject, message)
                 values('$contactName', '$contactEmail','$contactSubject','$contactMessage')";

                 echo "<script type=\"text/javascript\">
                           alert(\"Message sent Successfully.\");
                           window.location = \"index.php\"
                       </script>";

                       $conn->query($insertpost) or die("Could not insert post"); //insert post




?>
