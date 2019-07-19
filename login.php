<?php
session_start();
if (!empty($_POST)) {
// Create connection
$conn = new mysqli("localhost", "root", "", "web");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "connection successful<br><br>";
}
$user = $_POST["username"];
$pass = $_POST["password"];
$sql1 = "SELECT * from users where username='".$user."' and password= '".$pass."' ";
$result = $conn->query($sql1);



if ($result->num_rows == 1) {
$_SESSION['username']=$user;
header('Location:home.php');
}
else{
echo "Username or Password is incorrect";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


   <style>
@import url('https://fonts.googleapis.com/css?family=Anton|Roboto+Condensed');
</style> 
<style type="text/css">
  body{
    font-family: 'Roboto Condensed', sans-serif; 
  }
</style>
    
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    $('[data-toggle="popover"]').popover();
    $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>



<style type="text/css">

	.alignleft {
    float: left;
    margin-right: 15px;
}
}
.alignright {
    float: right;
    margin-left: 15px;
}
.aligncenter {
    display: block;
    margin: 0 auto 15px;
}
a:focus { outline: 0 solid }
img {
    max-width: 100%;
    height: auto;
}
.fix { overflow: hidden }
h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0 0 15px;
    font-weight: 700;
}
html,
body { height: 100% }

a {
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    color: #333;
}
a:hover { text-decoration: none }



.search-box{margin:80px auto;position:absolute;}
.caption{margin-bottom:50px;}
.loginForm input[type=text], .loginForm input[type=password]{
	margin-bottom:10px;
}
.loginForm input[type=submit]{
	background:#fb044a;
	color:#fff;
	font-weight:700;
	
}


#pswd_info {
	background: #dfdfdf none repeat scroll 0 0;
	color: #fff;
	left: 20px;
	position: absolute;
	top: 5px;
}
#pswd_info h4{
    background: black none repeat scroll 0 0;
    display: block;
    font-size: 14px;
    letter-spacing: 0;
    padding: 17px 0;
    text-align: center;
    text-transform: uppercase;
}
#pswd_info ul {
    list-style: outside none none;
}
#pswd_info ul li {
   padding: 10px 45px;
}



.valid {
	background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/vq43s2wib/valid.png") no-repeat scroll 2px 6px;
	color: green;
	line-height: 21px;
	padding-left: 22px;
}

.invalid {
	background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/olmaj1p8z/invalid.png") no-repeat scroll 2px 6px;
	color: red;
	line-height: 21px;
	padding-left: 22px;
}


#pswd_info::before {
    background: #dfdfdf none repeat scroll 0 0;
    content: "";
    height: 25px;
    left: -13px;
    margin-top: -12.5px;
    position: absolute;
    top: 50%;
    transform: rotate(45deg);
    width: 25px;
}
#pswd_info {
    display:none;
}
</style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="border-bottom-color: 10px solid orange">
      <div class="container" >
     
        <a data-toggle="tooltip" title="home sweet home!" class="navbar-brand responsive" href="home.php" style="font-size: 35px; padding-left: -20px"><img class="img-fluid responsive" src="http://www.mamodular.com/wp-content/uploads/2016/10/Ma-Logo-SATURATED-White.png" style="height: 50px; width: 50px;" > <b class="hide"> mobileArena</b></a>
        <button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        
      

        <div class="collapse navbar-collapse" id="navbarResponsive"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-right: -70px">
          <ul class="navbar-nav ml-auto "  >
           
             <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link dropdown-toggle text-uppercase no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  >Brands</a>
                <div class="haha dropdown-menu mega-menu v-2 row z-depth-1 special-color" aria-labelledby="navbarDropdownMenuLink1" id="wow" >
                    <div class="row mx-md-4 mx-1 boy" >
                        <div class="col-md-6 col-xl-2 ">
                           <a href="brands.php?q=samsung" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Samsung</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="brands.php?q=apple" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Apple</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Sony</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Nokia</h6></a>
                        </div>
                         <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >LG</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >HTC</h6></a>
                        </div>
                        

                    </div>
                     <div class="row mx-md-4 mx-1 boy" >
                        <div class="col-md-6 col-xl-2 ">
                           <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Motorola</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Huawei</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Xaomi</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Microsoft</h6></a>
                        </div>
                         <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Google</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Acer</h6></a>
                        </div>
                    </div>
                    <div class="row mx-md-4 mx-1 boy">
                        <div class="col-md-6 col-xl-2 ">
                           <a href="brands.php?q=oppo" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Oppo</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Asus</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >One plus</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Black Berry</h6></a>
                        </div>
                         <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Panasonic</h6></a>
                        </div>
                        <div class="col-md-6 col-xl-2 ">
                            <a href="" > <h6 style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 25px; color: white;" >Hp</h6></a>
                        </div>
                    </div>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="contact.php" data-toggle="tooltip" title="signal coverage">MULTI-DROP</a>
        <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#" class="dropdown-item">step1</a></li>
      <li><a tabindex="-1" href="#" class="dropdown-item">step2</a></li>
      <li class="dropdown-submenu">
         <a class="test" tabindex="-1" href="#"  class="dropdown-item" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp step3 </a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#" class="dropdown-item">2nd level step1</a></li>
          <li><a tabindex="-1" href="#" class="dropdown-item">2nd level step2</a></li>
          <li class="dropdown-submenu">
            <a class="test" href="#"  class="dropdown-item" style="text-decoration: none;">&nbsp&nbsp&nbsp&nbsp 2nd level step3 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#" class="dropdown-item">3rd level step1</a></li>
              <li><a href="#" class="dropdown-item">3rd level step2</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
      </li>
           
           <li class="nav-item">
                              <a class="nav-link" href="compare.php?q=IPHONE8" data-toggle="tooltip" title="mobile Comparison pane">COMPARISON</a>
            </li>
              <li class="nav-item">
              <a class="nav-link " href="coverage.php" data-toggle="tooltip" title="coverage">COVERAGE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="faq.php" data-toggle="tooltip" title="frequently asked questions">FAQ</a>
            </li>
       <li class="nav-item" data-toggle="tooltip" title="click to load the about section">
              <a class="nav-link" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" data-toggle="tooltip" title="contact information">CONTACT</a>
            </li>
             <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-sign-in"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="signup.php" data-toggle="tooltip" title="sign up">Sign up</a>
                <a class="dropdown-item" href="login.php" data-toggle="tooltip" title="log in">Log in</a>
              </div>
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>
	
    

<div class="container" style="padding-top: 50px">
	
      <h1 class="mt-4 mb-3">Log In
        
      </h1>


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Log In</li>
      </ol>

	<div class="row">
		<div class="col-md-6 col-md-offset-4 text-center">
			<div class="">
				<div class="caption">
					<h3>Login here</h3>
					
				</div>
				<form action="" class="loginForm" method="post">
					<div class="">

						<input type="text" id="name" class="form-control" placeholder="Full Name" name="username">
						<input type="password" id="paw" class="form-control" placeholder="Password" name="password">
						<input type="submit" id="submit" class="form-control" value="Submit">

						<p>Don't have an account? <b><a href="signup.php">Sign up here</a></b> </p>
					</div>
				</form>
				
			</div>

		</div>
		
		
		<div class="col-md-6 col-md-offset-4 text-center">
			<img src="http://newtrizcare.com/images/program-login-block.jpg" >
		</div>
	</div>



<hr>
 <div class="row wow fadeIn" data-wow-delay="0.4s " data-wow-duration="1.4s">
        <div class="col-lg-6">
          <h3 style="font-family: helvetica; font-weight: 50px; font-size: 30px; color: orange;">About mobileArena</h3>
          <p style="font-family: helvetica; font-weight: 50px; font-size: 25px; color: grey;">Developed by Hassaan Akbar Cheema & Sameer bin Raees </p>
          
              <strong style="font-family: helvetica; font-weight: 50px; color: grey;">Developed to give users authentic and up to date information</strong>
            
          <p style="font-family: helvetica; font-weight: 50px;color: grey;">Disclaimer. Mobile Phone Prices / price list is updated daily from local Mobile shops & Mobile dealers in Pakistan but we can't guarantee that mobile prices / price list on this page is 100% correct (Human error is possible). Always visit your local shop for exact mobile prices. mobileArena Pakistan - Nokia mobile prices / LG mobile prices / Samsung mobile prices / Sony Ericsson mobile prices / HTC mobile prices - mobileArena Prices in Pakistan</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="https://peeky.pk/wp-content/uploads/2017/09/a24c6376fb767f9c56c23afb2a76b9d5.jpg" alt="">
        </div>
      </div>

      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p style="font-style: Arial, sans-serif; font-weight: 50px; font-size: 30px; color: grey;">Thankyou for using <b style="color: orange">mobileArena</b></p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Click to the <b style="color: orange">TOP</b></a>
        </div>
      </div>

    </div>
</div>





<footer class="nb-footer container-fluid py-5 bg-dark">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="about">
  
  <p>The mobileArena is the number one source for the most authentic & upto date news about mobile launch dates, reviews ,specifications & so much more. You will know something about everything related to mobiles.
  Keep up to date with our latest feeds, newest lists & a whole bunch of mobile information.</p>

  
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
  <i class="fa fa-google-plus"></i>
    <i class="fa fa-linkedin"></i>
   
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Help Center</h2>
  <ul class="list-unstyled">
        <li><a href="faq.php" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
    <li><a href="compare.php?q=IPHONE8" title=""><i class="fa fa-angle-double-right"></i>Comparison</a></li>
    
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Customer information</h2>
  <ul class="list-unstyled">
    <li><a href="about.php" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
    <li><a href="compare.php?q=IPHONE8" title=""><i class="fa fa-angle-double-right"></i> Features</a></li>
    <li><a href="contact.php" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
    
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Security & privacy</h2>
  <ul class="list-unstyled">
    <li><a href="policy.php" title=""><i class="fa fa-angle-double-right"></i> Terms & Conditions</a></li>
    <li><a href="policy.php" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
    <li><a href="policy.php" title=""><i class="fa fa-angle-double-right"></i> Cookies Policy</a></li>
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
  <h2 class="title">Address</h2>
  <p>Room no. 426, Attar II, NUST H-12, Islamabad, Punjab, Pakistan, Subcontinent, Asia, Earth, Solar System, Universe, Multiverse</p>
  
</div>
</div>
</div>
</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p>Copyright © 2018. mobileArena.</p>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</footer>
	




<script type="text/javascript">
	$(document).ready(function(){
	
	$('input[type=password]').keyup(function() {
		var pswd = $(this).val();
		
		//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
		
		//validate letter
		if ( pswd.match(/[A-z]/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate number
		if ( pswd.match(/\d/) ) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}
		
		//validate space
		if ( pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
			$('#space').removeClass('invalid').addClass('valid');
		} else {
			$('#space').removeClass('valid').addClass('invalid');
		}
		
	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});
	
});
</script>
</body>
</html>