<!DOCTYPE php>
<php lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mobileArena</title>
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
<link rel="stylesheet" href="animate.css">
    <script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              <style type="text/css">
                .papa{
background-image: url(http://bit.ly/2gPLxZ4); 
 width: 250px;
 height: 350px;
 position: absolute;
word-wrap: break-word;
}

.papa:before{
 content: '';
background-image: url(http://bit.ly/2gPLxZ4); 
 position: absolute;
 left: 0;
 right: 0;
 top: 0; 
 bottom: 0;
 filter: blur(10px);
}
@media only screen and (max-width: 1200px)  {
.lat{
	padding-top: 300px
}
@media only screen and (max-width: 994px)  {
.lat{
	padding-top: 350px
}
@media only screen and (max-width: 767px)  {
.lat{
	padding-top: 700px
}


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
  document.getElementById("showusr").innerHTML = "" + str;
    if (str.length == 0) {
        document.getElementById("showusr").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showusr").innerHTML = this.responseText;
                 document.getElementById("phone1").style.display="none";
            }
        };
        xmlhttp.open("GET", "getmobile.php?q=" + str, true);
        xmlhttp.send();
    }
}

function chkusr1(str) {
  document.getElementById("showusr1").innerHTML = "" + str;
    if (str.length == 0) {
        document.getElementById("showusr1").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showusr1").innerHTML = this.responseText;
                 
            }
        };
        xmlhttp.open("GET", "getmobile.php?q=" + str, true);
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
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="signup.php" data-toggle="tooltip" title="sign up">Sign up</a>
                <a class="dropdown-item" href="login.php" data-toggle="tooltip" title="log in">Log in</a>
              </div>
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>
     <div class="container" >
     <br><br><br>
      <h1 class="mt-4 mb-3">Comparison
        <small>(Mobiles)</small>
      </h1>


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Comparison</li>
      </ol>
      <div style="width: 100% ; padding-top: 30px; padding-bottom: 30px">
          
      </div>
     <table>
     <tr>
     <div>
     <select onchange="chkusr(this.value)" id="phone1">
         <option value="" selected>Select...</option>
            <option value="IPHONE8">IPhone8</option>
            <option value="IPHONE7">IPhone7</option>
            <option value="IPHONE6">IPhone6</option>
            <option value="IPHONE SE">IPhone SE</option>
            <option value="GALAXY J7 PRO">Samsung Galaxy J7 PRO</option>
            <option value="GALAXY J1 MINI">Samsung Galaxy J1 MINI</option>
            <option value="GALAXY S9">Samsung Galaxy S9</option>
            <option value="OPPO F7">OPPO F7</option>
            <option value="OPPO F5">OPPO F5</option>
            <option value="OPPO A83">OPPO A83</option>
          </select>
     <td style="width: 50%" id="showusr">

    
</td>
<td id="showusr1">

    <div class="row latest wow fadeInUp" data-wow-delay="0.4s " data-wow-duration="1.4s" >
     <div class="col-lg-12 mb-4 " style=" background-color: #353942;">
     <?php
            $q=$_REQUEST["q"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "web";

            // Create connection
            $conn = new mysqli($servername, $username, $password,$db);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "SELECT * FROM mobiles";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                    if ($row['name'] == $q) {
                        # code...
                    
        ?>
        <b style="color: white; font-size: 40px"> <?php echo "" .$row['name']; ?> </b>
        <select onchange="chkusr1(this.value)">
        <option value="" selected>Select...</option>
            <option value="IPHONE8">IPhone8</option>
            <option value="IPHONE7">IPhone7</option>
            <option value="IPHONE6">IPhone6</option>
            <option value="IPHONE SE">IPhone SE</option>
            <option value="GALAXY J7 PRO">Samsung Galaxy J7 PRO</option>
            <option value="GALAXY J1 MINI">Samsung Galaxy J1 MINI</option>
            <option value="GALAXY S9">Samsung Galaxy S9</option>
            <option value="OPPO F7">OPPO F7</option>
            <option value="OPPO F5">OPPO F5</option>
            <option value="OPPO A83">OPPO A83</option>
          </select>
     </div>
     

    
         <div class="col-lg-6  mb-4" style=" height: 350px;">
           <center><img src="<?php echo "" .$row['url']; ?> " class="img-fluid" style="height: 300px;width: 300px "></center>
        </div>
      
  
    


       
        <div class="col-lg-6  mb-4" style=" height: 350px;  padding-bottom: 50px">
        <b>  <?php echo "" .$row['name']; ?> </b>
  <p style="color: red"><?php echo "" .$row['price']; ?></p>
          <table class="table" style="margin-top: 40px;">
        
      <tr>

 
   <h6> WHAT'S NEW?</h6><br>
    <?php echo "" .$row['new']; ?> </td>
      </tr>

    
  </table>
            


     
   </div>
      

      <div class="row latest wow fadeInUp" data-wow-delay="0.4s " data-wow-duration="1.4s"  >
        
   
    <div class="col-lg-10 col-md-12 mb-4" style="height: 900px;padding-bottom: 30px ">
    <div class="container" style="padding-top: 40px">
  <h2>Specifications</h2>
 <br>
  <table class="table">
   
    <tbody>
      <tr>
        <td rowspan="3"  style="width: 25% ;"><h4> BUILD </h4></td>
        <td  style="width: 75%">OS: <?php echo "" .$row['os']; ?></td>
        
      </tr>
      <tr>
        <td style="width: 75%">DIMENSIONS:  <?php echo "" .$row['dimensions']; ?></td> 
      </tr>
      <tr>
        <td  style="width: 75%">WEIGHT:  <?php echo "" .$row['weight']; ?></td>
      </tr>

      <tr>
        <td rowspan="3"  style="width: 25% ; "><h4> DISPLAY </h4></td>
        <td colspan="2" style="width: 75%">TECHNOLOGY:  <?php echo "" .$row['technology']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">SIZE:  <?php echo "" .$row['displaysize']; ?></td> 
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">RESOLUTION:  <?php echo "" .$row['resolution']; ?></td>
      </tr>

      <tr>
        <td rowspan="2"  style="width: 25% ; "><h4> CAMERA:  </h4></td>
        <td colspan="2" style="width: 75%">FRONT:  <?php echo "" .$row['front']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">REAR/MAIN:  <?php echo "" .$row['rear']; ?></td> 
      </tr>
      

      <tr>
        <td rowspan="2"  style="width: 25% ;"><h4> PROCESSOR</h4></td>
        <td colspan="2" style="width: 75%">CPU:  <?php echo "" .$row['cpu']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">CHIPSET:  <?php echo "" .$row['chipset']; ?></td> 
      </tr>


      <tr>
        <td rowspan="2"  style="width: 25% ;"><h4>MEMORY</h4></td>
        <td colspan="2" style="width: 75%">BUILT-IN:  <?php echo "" .$row['builtin']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">SD-CARD:  <?php echo "" .$row['sdcard']; ?></td> 
      </tr>

       <tr>
        <td rowspan="2"  style="width: 25% ;"><h4>BATTERY</h4></td>
        <td colspan="2" style="width: 75%">CAPACITY:  <?php echo "" .$row['capacity']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">TALKTIME:  <?php echo "" .$row['talktime']; ?></td> 
      </tr>

       <tr>
        <td rowspan="3"  style="width: 25% ;"><h4>CONNECTIVITY</h4></td>
        <td colspan="2" style="width: 75%">2G:  <?php echo "" .$row['2g']; ?></td>
        
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">3G:  <?php echo "" .$row['3g']; ?></td> 
      </tr>
      <tr>
        <td colspan="2" style="width: 75%">4G:  <?php echo "" .$row['4g']; ?></td> 
      </tr>
       <tr>
        <td colspan="2" style="width: 75%"></td> 
      </tr>
      
    </tbody>
  </table>
 
</div>

</div>
 <?php
}
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</td>
</tr>
</table>
<br><br><br><br><br><br><br><br><br><br>
<div class="lat">
<h4 class="my-4" style="font-family: helvetica; background-color: #353942; color: white; padding: 15px;"  data-toggle="popover" title="latest devices" data-placement="bottom" data-content="you can view latest devices here">LATEST DEVICES</h4>
      <!-- Marketing Icons Section -->
      <div class="row latest wow fadeInUp" data-wow-delay="0.4s " data-wow-duration="1.4s"  >
        <div class="col-lg-3 col-md-6 mb-4" style="height: 400px">
          <div class="card h-100">
            <h4 class="card-header">Oppo F7</h4>
            <div class="card-body">
            <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyJjT-UrlF1-f2FtIikvGpHlQYcGGsHddC1wsAbPq-b_cJCK0J" class="img-fluid"></center>
            </div>
            <b style="color: red"><center> 47000 Rs </center> </b>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Learn More</button>
            </div>
          </div>
        </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyJjT-UrlF1-f2FtIikvGpHlQYcGGsHddC1wsAbPq-b_cJCK0J">
            <h5 class="modal-title" id="exampleModalLabel">Oppo F7 <br> price: 47000 Rs
            </h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        
               <p style="font-family: helvetica"> NETWORK Technology  GSM / HSPA / LTE<br>LAUNCH  Announced 2018, March Status  Available. Released 2018, April<br>BODY  Dimensions  156 x 75.3 x 7.8 mm (6.14 x 2.96 x 0.31 in)<br>Weight  158 g (5.57 oz)<br>SIM Dual SIM (Nano-SIM, dual stand-by)<br>CAMERA  Primary 16 MP, f/1.8, phase detection autofocus, LED flash, check quality<br>
            Secondary 25 MP, f/2.0, 1080p</p>
          </div>
          <div class="progress" style="margin-left: 10px; margin-right:10px ">
    <div class="progress-bar" style="width:70%; ">70% likes it</div>
  </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



         <div class="col-lg-3 col-md-6 mb-4" style="height: 400px">
          <div class="card h-100">
            <h4 class="card-header">Nokia7</h4>
            <div class="card-body">
         <center>    <img src="http://mobilearena.pk/wp-content/uploads/2017/10/Nokia-7.jpg" style="width: 200px; height: 200px" class="img-fluid"></center>
         
            </div>
            <b style="color: red"><center> 54000 Rs </center> </b>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Learn More</button>
            </div>
          </div>
        </div>
        <div class="modal fade responsive" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <img src="http://mobilearena.pk/wp-content/uploads/2017/10/Nokia-7.jpg" style="width: 200px; height: 200px" class="img-fluid>
            <h5 class="modal-title" id="exampleModalLabel">Nokia7<br> price: 54000 Rs
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        
               <p style="font-family: helvetica"> NETWORK Technology  GSM / HSPA / LTE<br>LAUNCH  Announced 2018, March Status  Available. Released 2018, April<br>BODY  Dimensions  156 x 75.3 x 7.8 mm (6.14 x 2.96 x 0.31 in)<br>Weight  158 g (5.57 oz)<br>SIM Dual SIM (Nano-SIM, dual stand-by)<br>CAMERA  Primary 16 MP, f/1.8, phase detection autofocus, LED flash, check quality<br>
            Secondary 25 MP, f/2.0, 1080p</p>
          </div>
          <div class="progress" style="margin-left: 10px; margin-right:10px ">
    <div class="progress-bar" style="width:70%; ">67% likes it</div>
  </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


         <div class="col-lg-3 col-md-6 mb-4" style="height: 400px">
          <div class="card h-100">
            <h4 class="card-header">iphone 8</h4>
            <div class="card-body">
         <center>    <img src="https://cdn.homeshopping.pk/product_images/o/685/1__09791_zoom.jpg" style="width: 200px; height: 200px" class="img-fluid"></center>
 
            </div>
            <b style="color: red"><center> 82000 Rs </center> </b>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Learn More</button>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <img src="https://cdn.homeshopping.pk/product_images/o/685/1__09791_zoom.jpg" style="width: 200px; height: 200px" class="img-fluid>
            <h5 class="modal-title" id="exampleModalLabel3">iphone 8<br> price: 82000 Rs
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        
               <p style="font-family: helvetica"> NETWORK Technology  GSM / HSPA / LTE<br>LAUNCH  Announced 2018, March Status  Available. Released 2018, April<br>BODY  Dimensions  156 x 75.3 x 7.8 mm (6.14 x 2.96 x 0.31 in)<br>Weight  158 g (5.57 oz)<br>SIM Dual SIM (Nano-SIM, dual stand-by)<br>CAMERA  Primary 16 MP, f/1.8, phase detection autofocus, LED flash, check quality<br>
            Secondary 25 MP, f/2.0, 1080p</p>
          </div>
          <div class="progress" style="margin-left: 10px; margin-right:10px ">
    <div class="progress-bar" style="width:70%; ">83% likes it</div>
  </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


         
         <div class="col-lg-3 col-md-6 mb-4" style="height: 400px">
          <div class="card h-100">
            <h4 class="card-header">Huawei P20 Pro</h4>
            <div class="card-body">
         <center>    <img src="https://technosoups.com/wp-content/uploads/2018/03/huawei-p20-lite.png" style="width: 200px; height: 200px" class="img-fluid"></center>
        
            </div>
            <b style="color: red"><center> 76500 Rs </center> </b>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">Learn More</button>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <img src="https://technosoups.com/wp-content/uploads/2018/03/huawei-p20-lite.png" style="width: 200px; height: 200px" class="img-fluid>
            <h5 class="modal-title" id="exampleModalLabel">Huawei P20 Pro<br> price: 765000 Rs
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        
                <p style="font-family: helvetica"> NETWORK Technology  GSM / HSPA / LTE<br>LAUNCH  Announced 2018, March Status  Available. Released 2018, April<br>BODY  Dimensions  156 x 75.3 x 7.8 mm (6.14 x 2.96 x 0.31 in)<br>Weight  158 g (5.57 oz)<br>SIM Dual SIM (Nano-SIM, dual stand-by)<br>CAMERA  Primary 16 MP, f/1.8, phase detection autofocus, LED flash, check quality<br>
            Secondary 25 MP, f/2.0, 1080p</p>
          </div>
          <div class="progress" style="margin-left: 10px; margin-right:10px ">
    <div class="progress-bar" style="width:70%; ">76% likes it</div>
  </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
         
      <hr>
       <div class="row wow fadeIn" data-wow-delay="0.4s " data-wow-duration="1.4s" style="padding-top: 50px">
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
      <hr>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
  </body>

</php>
