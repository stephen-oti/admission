<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shule";


$dbh = new mysqli($servername, $username,$password, $dbname);
if($dbh->connect_error) {
	die("Connection Failed : " . $dbh->connect_error);
} else {
	// echo "Successfully Connected";
}
?>