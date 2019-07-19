<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta chartset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- Default Theme -->


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


<script>
function chkusr(str) {
    if (str.length == 0) {
        document.getElementById("showusr").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showusr").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "checkusername.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

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
              <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="signup.php" data-toggle="tooltip" title="sign up"><button type="button" class="btn btn-default" style="width:100%">Sign up</button></a>
                <a class="dropdown-item" href="login.php" data-toggle="tooltip" title="log in" ><button type="button" class="btn btn-default" style="width:100%" >Login</button></a>
              </div>
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="padding-top: 50px">
    	

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Sign up</li>
      </ol>
    	
      <div class="row">
      <div class="col-lg-6">
    <form class="well form-horizontal" id="contact_form" name="myForm" action=""
onsubmit="return validateForm()" method="post">
<fieldset>

<!-- Form Name -->
<legend><h2><b>&nbsp Sign up Form</b></h2></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-10 control-label">First Name</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name"  class="form-control"  type="text" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-10 control-label" >Last Name</label> 
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name"  class="form-control"  type="text" required>
    </div>
  </div>
</div>

 	
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-10 control-label">Username</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <input  name="uname" placeholder="Username"  class="form-control" type="text" required onkeyup="chkusr(this.value)">
   &nbsp&nbsp&nbsp&nbsp <span id="showusr"></span>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-10 control-label">Select Country and Province</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <select id="country" required>
  <option value="pakistan">Pakistan </option>
  <option value="india">India </option>
</select>&nbsp&nbsp&nbsp
<select id="province" required>

</select>
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-10 control-label" >Password</label> 
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="p" placeholder="Password" class="form-control"  type="password" required name="passwod">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-10 control-label" >Confirm Password</label> 
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="cpassword" placeholder="Confirm Password" class="form-control"  type="password" required >
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-10 control-label">E-Mail</label>  
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input  placeholder="E-Mail Address" class="form-control"  type="email" required name="mail">
    </div>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" value="submit" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>

<div class="col-lg-6">
  <img src="http://new.hearingfusion.com/wp-content/uploads/2015/03/Sign-Up-Now-Icon.png" class="img-fluid" style="width: 500px;height: 500px;margin-top: 130px">
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

        <div class="col-lg-6" >

          <img class="img-fluid rounded" src="https://peeky.pk/wp-content/uploads/2017/09/a24c6376fb767f9c56c23afb2a76b9d5.jpg" alt="">
        </div>
      </div>
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
    
    <script>
    function validateForm() {
    
    var x = document.forms["myForm"]["upassword"].value;
    if(x.length<8){

      alert("Minimum 8 characters are required in pasword!");
      return false;
    }

  

    var x = document.forms["myForm"]["cpassword"].value;
     var y = document.forms["myForm"]["upassword"].value;
    if (x != y) {
        alert("Password do not match!");
        return false;
    }
   
}






$(document).ready(function() {
  $("#country").click(function() {
    $("#province").html("");
    var a = $("#country").val();
    $.getJSON("data.json", function(x) {
      if (a == "pakistan")
      { 
        var i;
        for (i = 0; i < x.pakistan.length; i++)
        {
          $("#province").append("<option>" + x.pakistan[i] + "</option>");
        } 
      }
      if (a == "india")
      { 
        var i;
        for (i = 0; i < x.india.length; i++)
        {
          $("#province").append("<option>" + x.india[i] + "</option>");
        } 
      }
      if (a == "USA")
      { 
        var i;
        for (i = 0; i < x.USA.length; i++)
        {
          $("#province").append("<option>" + x.USA[i] + "</option>");
        } 
      }
    });
  });

});
</script>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>


<?php

if (!empty($_POST)) {
// Create connection
$conn = new mysqli("localhost", "root", "", "web");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "connection successful<br><br>";
}

$user = $_POST["uname"];
$pass = $_POST["passwod"];
$firstn = $_POST["fname"];
$lastn = $_POST["lname"];
$email = $_POST["mail"];




$sql = "INSERT INTO users (username, password, first_name, last_name, email)
VALUES ('". $user ."', '". $pass ."', '". $firstn ."', '". $lastn ."', '". $email ."')";

if ($conn->query($sql) === TRUE) {
   echo" <script>alert('New record created successfully');</script>";
} else {
    echo "Error: " . $sql . "<br><br>" . $conn->error . "<br><br>";
}


$conn->close();
}
?>

</html>