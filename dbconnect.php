<?php 

$servername = "localhost";
$username = "stephen";
$password = "stephen";
$dbname = "impacttu_kikwetuschool";


$conn = new mysqli($servername, $username,$password, $dbname);
if($conn->connect_error) {
	die("Connection Failed : " . $conn->connect_error);
} else {
	// echo "Successfully Connected";
}