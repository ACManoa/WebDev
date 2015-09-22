<?php

$servername = "localhost";
$user       = "acmmanoa_db";
$pass       = "HopperSvz$4";
$dbname     = "acmmanoa_db";
        
$conn = new mysqli($servername, $user, $pass, $dbname);
        
$sql = "SELECT * FROM members Where name != '' Order By name";

$array = array();
        
if ($result = $conn->query($sql)) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
        $array[] = $row;
    }
    echo json_encode($array);
}
else{
    echo "dead in the water";
}

$result->close();
$mysqli->close();


?>