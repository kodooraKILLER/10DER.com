<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
include("connection.php");

$query='UPDATE provider SET aoi ="'.$aoi=substr($_POST['aoi'],0,3).'", bio ="'.$_POST['bio'].'" WHERE username="'.$_SESSION['user'].'"';
$conn->query($query);
header('location: ProviderBoard.php');
?>