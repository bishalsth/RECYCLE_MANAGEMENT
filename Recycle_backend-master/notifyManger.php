<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'recycle');
 $count = '';
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT Count(*) as 'cnt' FROM collect";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $count = $row['cnt'];
} else {
    echo "0 results";
} 
echo json_encode($count);
mysqli_close($link);
?>