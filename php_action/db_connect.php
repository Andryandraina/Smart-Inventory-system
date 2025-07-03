<?php 	

$localhost = "localhost";
$username = "root";
$password = "n@";
$dbname = "store";
$store_url = "http://gestion_de_stock.local/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
