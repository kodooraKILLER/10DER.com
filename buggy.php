<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ver2";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
          if (isset($_POST["syp"])) 
          
		  {
			  $name = $_POST["syp"];
			  		$insertquery="INSERT INTO bug(syp) VALUES ('$name')";
				$iquery=$conn->query($insertquery);
			
}



?>

<html>
<body>
<form action="buggy.php" method="post">
<input type="text" name="syp" value="">
<input type="submit">
</form>
</body>
</html>