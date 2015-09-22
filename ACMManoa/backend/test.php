<?php

$servername = "localhost";
$user       = "acmmanoa_db";
$pass       = "HopperSvz$4";
$dbname     = "acmmanoa_db";
        
$conn = new mysqli($servername, $user, $pass, $dbname);
        
if ($conn->connect_error) {
    echo "dead in the water";
}
else{
    echo "good to go";
}


?>