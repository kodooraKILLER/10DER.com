<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//IF USER DID NOT LOGIN IN LOCAL SYSTEM
if(!$_SESSION['user'] or $_SESSION['user']=='none')
	header('location: login.php');

include("connection.php");

			setcookie ("user",$_SESSION['user'],time()+ 3600);
	  		
			setcookie ("category","requester",time()+ 3600);
include("tender_create.php");
?>

<style>
body {
  min-height: 100vh;
  padding:0px;
  margin:0px;
  border:0px black solid;
}

#article {
	min-height: 450px;
}
#create_div{
	padding-bottom:350px;
}
footer {
  position: relative;
  bottom: 0px;
  margin-top: 50px;
  width: 100%;
  
}
</style>
<html>

<head>

<link rel="icon" href="images\logo1.jpg">
	
	<meta charset="UTF-8">
	<meta http_equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Dashboard | <?php echo $_SESSION['user'];?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href=".\css\cboard.css">
 
</head>
<body >
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
 
  <img class="mr-auto rounded" src="images\logo1.jpg" height="40px" width="40px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-4">
      <li class="nav-item active">
        <a class="nav-link" href="10DER.php">Home <span class="sr-only">(current)</span></a>
      </li>
  </ul>
  	 <form class="form-inline my-2 my-lg-0 mr-auto frm">
      <input class="form-control mr-sm-0" type="search" onclick="location.href='advsearch.html'"  placeholder="Search" aria-label="Search" size="100%">
      <button class="btn btn-outline-light my-2 my-sm-0 ml-1" type="submit">Search</button>
    </form>
    <ul class="navbar-nav navbar-auto">
    	  
      <li class="nav-item">
        <a class="nav-link active mr-4" href=".\logout.php"><?php echo $_SESSION['user']; ?></a>
      </li>

       <li class="nav-item dropdown active ml-2 mr-4 ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Explore
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#contact">Contact us</a>
          <a class="dropdown-item" href="#contact">About</a>
          
        </div>
      </li>
      </ul>
   </div>
 </div>
</nav>

<div id="popover2">

<h6 align="center"><img src=".\images\agreement.png" width="95%"></h6>
<h4 align="center"><u>Form of Tender</u></h4>
<div id="dater">
A-106,Vellore Institute of Technology
<br>Vellore-18
<br>
</div>

<script>
var d=new Date();document.getElementById("dater").innerHTML+=d.getDate()+"/"+(1+d.getMonth())+"/"+d.getFullYear();</script>
<br>
<div id="sellerdetails"></div>

We would like to purchase the supply of goods or services provided by your firm and fixed prices as agreed upon.
<br>
<br>
Our tender remains open for acceptance for a trial period of thirty calendar days following the tender closing date. It is confirmed that unsatisfactory performance during the trial period will lead to cancellation of tender without any prior notice.
<br>
<br>
The tender fully complies with your firm's specification. It goes without saying that the tender is fully subjected to the Terms and Conditions previously mentioned.
<br>
<br>
Should you need anything further, it can be discussed by the undersigned at the above address
<br>
<br>
Yours sincerely
<input type="text" class="form-control" placeholder="type your name to DIGI-SIGN the agreement">
<br>
<h6 align="center"><button id="ct1" class="btn btn-primary">Sanction</button><button id="ct2" class="btn btn-primary">Cancel</button></h6>
</div>    

<div id="popover" class="bg-light">
<form id="create_tender" action="#" method="POST">
<button type="button" id="close">&#10005;</button>
<br>
<h2>Create a 10der..</h2>

<h6 id="desc1">Step 1 of 2</h6><h6 id="desc2">Step 2 of 2</h6>

<div class="bg-light" style="margin-up:5px;">
<div class="container bg-white shadow" id="step1">
	<div class="form-group ">
      <label for="inputPassword4">Tender Title</label>
      <input type="text" name="title" class="form-control" id="inputPassword4" placeholder="eg: Shirt stitching tender">
    </div>
  
  <div class="form-group">
      <label for="inputState">Tender Category</label>
	  <?php 
      $myfile = fopen("categories.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
echo '<select name="categ" class="form-control">';
while(!feof($myfile)) {
  echo '<option>'.fgets($myfile) . '</option>';
}
fclose($myfile);
echo '</select>';
?>
    </div>
	<div class="form-row">
	<div class="form-group col-md-6">
      <label for="inputState">Bidding opens on:</label>
      <input type="date" id="flagger" name="start" class="form-control" placeholder="0/0/0000">
    </div>
	
	<div class="form-group col-md-6">
      <label for="inputState">Bidding closes by:</label>
      <input type="date" name="end" class="form-control" placeholder="0/0/2000">
    </div>
	</div>
</div>

<button id="s1" type="button" class="btn bbb btn-primary">Next&nbsp;&gt;</button>


<div class="container bg-white shadow" id="step2">
	<div class="form-group ">
      <label for="inputPassword4">Description</label>
      <textarea rows="5" name="description" placeholder="A Detailed description of what product/service you need from the manufacturer. "class="form-control"></textarea>
	  </div>
	  <div class="form-group ">
      <label for="inputPassword4">Terms and Conditions</label>
      <textarea rows="5" name="tandc" placeholder="List out all conditions relating to the tender, such as money-reimbursement, delay, product-quality, etc.. Also, List out the requirements, amount dispersion mechanism and cancellation norms upon quality-dissatisfaction "class="form-control"></textarea>
	  </div>

</div>

<button id="s2" type="submit" class="btn bbb btn-primary">Done&nbsp;&#10003;</button>


</div>



</form>
</div>
	
<div id="#article"  class="bg-light" style="min-height: 320px;">
<article  class="container bg-white shadow pt-5" style="min-height: 290px;">



<h2 align="left"><b>Your active 10ders </b></h2>
<hr width="95%" align="center">

<div id="create_div" style="">
<button id="create" >&nbsp;&nbsp;&Dagger;&nbsp;New...&nbsp;&nbsp;</button>
</div>

<?php

//PART A: TENDER TITLE OBTAINER
$query="select tno,title,start,status from tender where creator='".$_SESSION['user']."' and 1 order by status desc";
$result=$conn->query($query);
if($result===false||mysqli_num_rows ( $result)==0)
{
	echo '<br><br><h4 align="center"> Oops&#128532;! You havent fired up any 10ders yet! Press the "new" button to create one! </h4>';

}
else
{

	while($row = $result -> fetch_assoc())
	{
		echo '<br>';
		echo '<h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#T'.$row['tno'].': '.$row['title'].'</h4>';
		
		$v=date_create($row['start']);
		$vv=date_create();
		#echo $v,$vv;
		//PART B: TENDER BID OBTAINER
		if($row['status']==0)
		{
echo '<ul style="list-style: none;" ><li><div class="bid">

<span class="subject" style="color:#333333;"><i>This tender has been <b>closed</b>.</i></span>

<button class="kn"  style="background-color: #222222; margin-right: 0px;position:relative;bottom:5px;" onclick="location.href =\'tender_info.php?tno='.$row['tno'].'\';">&nbsp;&#9432;&nbsp;<i>Know more&nbsp;&nbsp;</i></button>


</div></li></ul><br><br>';
		}
		else if($vv<$v)
		{
			
echo '<ul style="list-style: none;" ><li><div class="bid">

<span class="subject" style="color:#333333;"><i>This tender will go live in <b style="color: #8E44AD;">'.date_diff($vv,$v)->format("%R%a days").' </b>.</i></span>

<button class="kn"  style="background-color: #8E44AD; margin-right: 0px;position:relative;bottom:5px;" onclick="location.href =\'tender_info.php?tno='.$row['tno'].'\';">&nbsp;&#9432;&nbsp;<i>Know more&nbsp;&nbsp;</i></button>


</div></li></ul><br><br>';
		}
		
		 
		else
		{
			//echo '<ul style="list-style: none;" >';
			$querysub="select * from bid where 1 and tno=".$row['tno']." ORDER BY amount ASC ";
			$resultsub=$conn->query($querysub);
			if($resultsub===false||mysqli_num_rows($resultsub)==0)
			{
				echo '<ul style="list-style: none;" ><li><div class="bid">

<span class="subject" style="color:#333333;" ><i>Nobody has bidded yet. <b style="color: #008800">Good things take time!</b></i></span>

<button class="kn"  style="background-color: #00AA55; margin-right: 0px;position:relative;bottom:5px;" onclick="location.href = \'tender_info.php?tno='.$row['tno'].'\';">&nbsp;&#9432;&nbsp;<i>Know more&nbsp;&nbsp;</i></button>


</div></li></ul><br><br>';
			}
			else
			{
				echo '<ul style="list-style: none;" >';
				while($rowsub = $resultsub -> fetch_assoc())
				{
				echo '<li><div class="bid"><b><span class="sellerid">'.$rowsub['bidder'].'</span><span style="font-size: large;">&nbsp;:-&nbsp;&nbsp;</span>
					<span class="price">&#8377;'.$rowsub['amount'].'</span></b><br>
					<span class="subject" style="color: #333333;"><b>'.$rowsub['subject'].'</b></span>
					<span class="description"><i>'.$rowsub['description'].'</i></span>
					<button class="kn">&nbsp;&#9432;&nbsp;<i>Know more&nbsp;&nbsp;</i></button>
					<button class="procure"><i>&nbsp;&#10004;&nbsp;&nbsp;Procure&nbsp;&nbsp;</i></button>
					<button class="shortlist" style="background-color: #FFA320;"><i>&nbsp;&#10710;&nbsp;&nbsp;shortlist&nbsp;&nbsp;</i></button>
					<!--SLIDER ICON--><!--HOVER BUTTON ICON--><!--SLIDER ICON-->
					</div>
					</li>';
	
				}
				echo '</ul><br><br>';
			}
			
			//echo '</ul><br><br>';
		}
	}

}
?>

</article>



</div>


<!-- ///////////////////////////////////footer//////////////////////////////// -->


<footer  class="page-footer font-small mdb-color pt-4 bg-dark text-white">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">10Der Corporation</h6>
        <p>A step towards Enchancement, Expansion and Economizing</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-white productso">
        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
        <p>
          Construction
        </p>
        <p>
          Computers
        </p>
        <p>
          Elecrtrical
        </p>
        <p>
          Food
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 links text-white">
        <h6 class="text-uppercase mb-4 font-weight-bold"> Creators</h6>
        <p>
        R Senthil Kumar
        </p>
        <p>
        Shashank Kesharwani
        </p>
        <p>
        Gunjan Kumar
        </p>
        
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div id="contact" class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-white text-left homefont">
        <h6 class="text-uppercase text-left mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> 10der corporation</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> gkr54322@gmail.com</p>
       
        <p>
          <i class="fas fa-print mr-3"></i> +91 9752422440</p>
           <p>
          <i class="fas fa-print mr-3"></i> +91 7339659559</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="#!" class="text-white">
            <strong> 10DER.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right socialo">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>

<!-- Footer -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src=".\js\cboard.js"></script>
<script src=".\js\rb_tender.js" type="text/javascript"></script>

</body>
</html>
