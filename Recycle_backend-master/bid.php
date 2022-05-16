<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'recycle');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "Insert into bid(username,wastename,bid_amount) values('".$_POST['username']."','".$_POST['wastename']."','".$_POST['bid_amount']."')";

if (mysqli_query($link, $sql)) {
    echo json_encode("New bid created successfully");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>