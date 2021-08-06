<?php

error_reporting(0);
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ver1";

// Create connection
//$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


#1$2y$10$R7V5UR8M0K8Rp
#$2y$10$R7V5UR8M0K8Rp

*/
$flagdb=1;
$conn=mysqli_init(); 
mysqli_real_connect($conn, "ver1.mysql.database.azure.com", "senthil@ver1", "V_innovate1t", "ver1", 3306);

if ($conn->connect_error) {
	$flagdb=2;
	mysqli_real_connect($conn, "verseco.mysql.database.azure.com", "senthil@verseco", "V_innovate1t", "ver1", 3306);

}
else
{
	
$conn2=mysqli_init(); 
mysqli_real_connect($conn, "verseco.mysql.database.azure.com", "senthil@verseco", "V_innovate1t", "ver1", 3306);

$flagdb=1;
}
//echo $flagdb;
?>

