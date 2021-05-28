<?php
session_start();
$_SESSION['user']='none';
		
include("connection.php");
if(isset($_COOKIE['user']))
{
	$_SESSION['user']=$_COOKIE['user'];
	if($_COOKIE['category']==="requester")
	header('Location: RequesterBoard.php');
	else
	header('Location: ProviderBoard.php');


}

include("regex.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="icon" href="images\logo1.jpg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.8">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>10DER | Walk In</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<h1>Create Account</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your email for registration</span> -->
			<input type="text" placeholder="UserName" name="sname" />
			<input type="text" placeholder="Email" name="semail"/>
			<input type="password" placeholder="Password" name="spassword" />
			<input type="password" placeholder="Confirm Password" name="scpassword" />
			<input type="text" placeholder="Mobile no" name="smobileno" />
			

			<select name="category" id="category" style="background-color: #eee;
				border: none;
				padding: 12px 15px;
				margin: 8px 0;
				width: 100%;
			">
			  <option>Choose a category</option>
			  <option value="provider">provider</option>
			  <option value="requester">requester</option>
			  
			</select>
			<button name="sign_up">Sign Up</button>

		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Sign in</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your account</span> -->
			<input type="text" placeholder="UserName" name="lname"/>

		
			<input type="password" placeholder="Password" name="lpassword"/>
	
			<button name='login' value="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/login.js"></script>
<?php

//////////////for signup//////////////////////



   
   
if(isset($_POST['sign_up']))
{
	$user=$_POST['sname'];
	$email=$_POST['semail'];
	$password=$_POST['spassword'];
	$cpassword=$_POST['scpassword'];
	$mobile=$_POST['smobileno'];
	$category=$_POST['category'];

	$pass= password_hash($password, PASSWORD_BCRYPT);
	$cpass= password_hash($cpassword, PASSWORD_BCRYPT);

	$userquery="select * from $category where username='$user'";
	$count=$conn->query($userquery);

	if($count->num_rows>0)
	{
		echo "<script>alert('username already taken')</script>";
	}
	else
		
	{


//validation of email and password
		
if(!valid_email($email)){
echo "<script>alert('NOT A VALID EMAIL')</script>";
	  
			}	
	else if($password===$cpassword)
		{
			
				$insertquery="INSERT INTO $category(username,password, mobile, email) VALUES ('$user','$pass','$mobile','$email')";
				$iquery=$conn->query($insertquery);
				if($iquery)
				{
					echo "<script>alert('inserted successfully')</script>";
					$_SESSION['user']=$user;
					
					#COOKIE EXPIRES IN 60*60 seconda= 1 Hour
	  				if($category=="requester")
					{
						header('Location: RequesterBoard.php');
					}
					else
					{
						header('Location: ProviderBoard.php');
					
					}
				}
				else
				{
					echo "<script>alert('error in insertion')</script>";
				}
			

		}
		else
		{
			echo "<script>alert('password did not match')</script>";
		}
	}

}






///////////////////////for login//////////////////////////
if(isset($_POST['login']))
{
	$luser=$_POST['lname'];
	$lpassword=$_POST['lpassword'];
	$query1="select * from requester where username='$luser'";
	$query2="select * from provider where username='$luser'";
	$result1=$conn->query($query1);
	$result2=$conn->query($query2);
	$count1=$result1->num_rows;
	$count2=$result2->num_rows;
	


	if ( $count1>0) 
	{

		#echo "<script>alert('entered')</script>";
		$email_pass = $result1->fetch_assoc();
		$db_pass=$email_pass['password'];
		
		$pass_decode=password_verify($lpassword,$db_pass);
		if($pass_decode)
		{
			$_SESSION['user']=$luser;
			
						
			header('Location: RequesterBoard.php');

		}
		else{
			echo "<script>alert('Aww, snap! Your credentials might be incorrect, Try again!')</script>";

		}
	}
	elseif ($count2>0) 
	{
	 	$email_pass = $result2->fetch_assoc();
		$db_pass=$email_pass['password'];
		$pass_decode=password_verify($lpassword, $db_pass);
		if($pass_decode)
		{
			#COOKIE EXPIRES IN 60*60 seconda= 1 Hour
			$_SESSION['user']=$luser;
	  		header('Location: ProviderBoard.php');

		}
		else 
	{

	   	echo "<script>alert('Aww, snap! Your credentials  might be incorrect, Try again!')</script>";
  
	}

	} 
	else 
	{

	   	echo "<script>alert('Aww, snap! Your credentials  might be incorrect, Try again!')</script>";
  
	}
}

?>


</body>
</html>