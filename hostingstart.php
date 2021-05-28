<?php
session_start();

///////this hides the error///////
error_reporting(0);


include("connection.php");

?>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images\logo1.jpg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<meta http_equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>10DER</title>
  	<link rel="stylesheet" href="css\10DER.css">
  	<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->



    <!-- this is the working cdn -->
  	<!-- <script src="https://kit.fontawesome.com/d5accb5737.js" crossorigin="anonymous"></script> -->
<style type="text/css">
		
       .frm{
        	margin-left:5%;
        }
       
       .loginmargin{
       	margin-left:"10px";
       }
       .mainbody{
        margin:2%;
        margin-left: 5%;
        margin-right: 5%;

       }
       .mainbody img{
        margin-bottom: 2%;
        margin-left:none;
        margin-right:none;
       }
       .productso a,.links a{
        color:white;
       }
       .socialo ul li a:hover {
                background-color: #AE2A2A;
                font-size:18px;
       }
       ul li a{
        transition:all 0.7s ease;
       }
       .homefont i:hover {
                
                font-size:20px;
                transition:all 0.7s ease;
       }
       .just{
                text-align: justify;
          text-justify: inter-word;

       }

       
       /* body{
       	background-color: #D6E7FF

        }*/
       /*.bgimg{
        background-image: url('logo.png');
        background-size: 100% 100%;
        background-attachment: fixed;
        width:100%;
        heig*/
       
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
 
  <img class="mr-auto rounded" src="images\logo1.jpg" height="40px" width="40px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-4">
      <li class="nav-item active">
        <a class="nav-link" href="<?php if(!$_SESSION['user'] or $_SESSION['user']=='none'){echo "10DER.php";}else{if($_COOKIE['category']=='requester')echo "RequesterBoard.php";else echo "ProviderBoard.php";}?>"><?php if(!$_SESSION['user'] or $_SESSION['user']=='none'){echo "Home";}else{echo $_SESSION['user'];}?> <span class="sr-only">(current)</span></a>
      </li>
  </ul>
  	 <form class="form-inline my-2 my-lg-0 mr-auto frm">
      <input class="form-control mr-sm-0" type="search" onclick="location.href='advsearch.html'"  placeholder="Search" aria-label="Search" size="100%">
      <button class="btn btn-outline-light my-2 my-sm-0 ml-1" type="submit">Search</button>
    </form>
    <ul class="navbar-nav navbar-auto">
    	  
      <li class="nav-item">

        <a class="nav-link active mr-4" <?php if(!$_SESSION['user'] or $_SESSION['user']=='none'){echo "href='.\login.php'";}else{echo "href='.\logout.php'";}?> >
            <?php if(!$_SESSION['user'] or $_SESSION['user']=='none'){echo "Login";}else{echo "Logout";}?>


        </a>
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
<!-- ////////////////body//////////////////////////////////////// -->



  <img src="images\laying.png" style="width:100%;">
  <div class="mainbody">
  <h1 class="text-centre">Active Tenders</h1>
  <hr>

<div class="row">
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow p-4 mb-4 bg-white">
    <!-- <img src="images\firstimage.jpg" class="card-img-top" alt="..."> -->
    <div class="card-body cx">
      <b><h5 class="card-title">School uniform</h5></b>
      <p class="card-text just">A well reputed school in Chennai needs a local uniform producer. Manufacturer should produce clothes before June 2020.</p>
      <br>
      <p class="card-text"><small class="text-muted" >Current lowest bid: Rs. 50,000</small></p>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow p-4 mb-4 bg-white">
    <!-- <img src="images\firstimage.jpg" class="card-img-top" alt="..."> -->
    <div class="card-body cx" >
      <h5 class="card-title">Cars</h5>
      <p class="card-text just">A grand-budget film requires 20 cars for rent. The duration of the rent is 48 hours. Interested car dealers please participate.</p><br><br>
      <p class="card-text"><small class="text-muted">Current lowest bid: Rs. 20,000</small></p>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow p-4 mb-4 bg-white">
    <!-- <img src="images\firstimage.jpg" class="card-img-top" alt="..."> -->
    <div class="card-body cx">
      <h5 class="card-title">Onions</h5>
      <p class="card-text just">The free food foundation needs 10000kg onions for the upcoming festival. Farmers interested must yield good quality onions.</p><br>
      <p class="card-text"><small class="text-muted">Bidding opens in few hours</small></p>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow p-4 mb-4 bg-white">
    <!-- <img src="images\firstimage.jpg" class="card-img-top" alt="..."> -->
    <div class="card-body cx">
      <h5 class="card-title">Plant saplings</h5>
      <p class="card-text just">A couple is willing to offer saplings to visitors for their marriage. A minimum of 1000 saplings are needed. Price negotiable.</p><br>
      <p class="card-text"><small class="text-muted">Current lowest bid: Rs. 12,500</small></p>
    </div>
  </div>
</div>

</div>

  
</div>
</div>
</div>
<hr>
<!-- ///////////////////2nd last part////////////// -->
<div class="bg-light">
<div class="container bg-white shadow pt-5">
  <h1 class="text-centre">Our EEE's</h1>
  <div class="row mt-4">
    <div class="col-lg-6 mb-4">  <img src="images\feature3.png" alt="2nd image" class="img-fluid">
   </div>
    <div class="col-lg-6">
	<br>
      <h2>EXPAND</h2>
      <p>A businessman needs links, a businessman needs contacts. The more people you interact with, the greater the chance of expanding your ideas. We, at 10der, trust that more than technology, the <b>people</b> are more important.
	  Hence, we have framed a system that helps consumers make contacts with businessmen and businessmen expand their business.
	  </p>
      <p>What's in it for them? Its a 2-way-benefit: consumer gets hold of innovative businessmen, while businessmen have chance to expand their trade, thereby pushing the geographical limits</p>
    </div>
    
  </div>
   <div class="row mt-4 ">
       <div class="col-lg-6">
      
	<br>
	<br>
	  <h2 class="text-center">ENHANCE</h2>
      <p>
	  With more options, the consumer has the freedom to choos only <b>the best of the best</b>. If there are any issues with the business link formed with a person, the consumer can quickly shift the business link to a more trustworthy manufacturer/ service provider.
	  The abundance of options helps consumers to choose the best product/ service. We believe that quality and quantity are highly important, and hence it is necessary for each and every consumer to use his/her rights to spend money only on the best product/ service.
	  
	  </p><p>The quality of service/ product demanded using this portal is hence, guaranteed to be a class apart, due to high competency amongst the businessmen to attract customers. Enhancement of quality-checked!</p>
    </div>
    <div class="col-lg-6 mt-4">
      
      <img src="images\feature1.jpg" alt="2nd image" class="img-fluid">
    </div>
 
    
  </div>
   <div class="row mt-4">
    <div class="col-lg-6 mt-4 mb-4">
      <img src="images\feature2.jpg" alt="2nd image" class="img-fluid">
    
	 </div>
    <div class="col-lg-6 mt-4 mb-4">
      <h2 class="text-centre">ECONOMIZE</h2>
      <p>We at 10der, believe that cost effeciency is the key to develop a better customer-businessman relationship. Due to high competency of businessmen, it becomes very probable for consumers to expect prices far below than the offline price. In the trade-war, <b>price falls</b> become a common aspect. Consumers from various fields hence tend to use this portal for getting better offers, and more cost-effecient 2/ services
	  </p><p>A wise man once said, "if you find a gap in the market, then it becomes your duty to fill the gap by capitalizing its potential!" There are a lot of market-gaps in and around the world due to geographical limitations and social reasons. Hence, it is our duty to fill this gap and make it more economic for both the consumers and the traders, <b>for a brighter tommorrow!</b></p>
    </div>
    
  </div>
</div>  
</div>
<hr>

<!-- ///////////////////////////////////footer//////////////////////////////// -->


<footer class="page-footer font-small mdb-color pt-4 bg-dark text-white">

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

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</body>
</html>
