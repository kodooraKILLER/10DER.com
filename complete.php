<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
include("connection.php");

$query='UPDATE provider SET aoi ="'.$aoi=substr($_POST['aoi'],0,3).'", bio ="'.$_POST['bio'].'" WHERE username="'.$_SESSION['user'].'"';
$conn->query($query);
echo "<script type='text/javascript'>window.top.location='https://ten-der.azurewebsites.net/providerboard.php';</script>";

?>