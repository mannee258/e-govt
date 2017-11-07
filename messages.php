<?php
require_once 'connect.php';
$contactName=$_POST['contactName'];
$contactEmail=$_POST['contactEmail'];
$contactSubject=$_POST['contactSubject'];
$contactMessage=$_POST['contactMessage'];


      $insertpost="INSERT INTO messagetbl(name, email, subject, message)
                 values('$contactName', '$contactEmail','$contactSubject','$contactMessage')";

                 if (mysql_query($insertpost)) {

    echo "<script type=\"text/javascript\">
                alert(\"New member added successfully.\");
                window.location = \"index.php\"
            </script>";

} else{
    die("Failed: " . mysql_error());
}





?>
