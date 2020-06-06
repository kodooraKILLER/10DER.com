<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
include("connection.php");

if(isset($_POST['tno'])&&isset($_SESSION['user'])&&($_SESSION['user']!='none'))
{
	$tno=$_POST['tno'];
	$amount=$_POST['amount'];
	$bidder=$_POST['bidder'];
	$subject=$_POST['subject'];
	$description=$_POST['description'];
	if($amount==0)
	{
		;
	}
	else
	{

	$sql = "INSERT INTO bid (tno, amount, bidder, subject, description) VALUES (".$tno.",".$amount.",'".$bidder."','".$subject."','".$description."')";
	
	if ($conn->query($sql) === TRUE) 
		echo "yes";

	
	}
	
}
else echo $_POST['amount'].$_POST['tno'].$_POST['bidder'];
?>