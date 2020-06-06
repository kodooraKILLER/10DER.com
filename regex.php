<?php


function checkemail($str) {
         return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
   }
//validation of email and password
		if(!preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[\W])(?=\S*[A-Z])(?=\S*[\d])\S*$',$password))
			{
				
      echo "<script>alert('Please follow the standard password convention')</script>";
	  header("location: login.php");
			}
		else if(!checkemail($email)){
      echo "<script>alert('Invalid email address. Try again')</script>";
	  header("location: login.php");
			}
  
?>