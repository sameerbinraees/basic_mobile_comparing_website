<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="animate.css">
	<script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style type="text/css">

  nav{
  	position: sticky;
  }
  .n img{
  	
  height: auto;	
  	width:100%;
  	
  	opacity:0.8;
  }
 	
  .centered {
    position: absolute;
    top: 50%;   
}
.centered h1,h2,h4{
	color:white ;
}
.aboutskills{
	text-align: left;
	
}



@media only screen and (max-width: 1066px) {
.centered{
	display: none;
}
}


.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}

.timeline > li {
  margin-bottom: 20px;
  position: relative;
}

.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}

.timeline > li:after {
  clear: both;
}

.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}

.timeline > li:after {
  clear: both;
}

.timeline > li > .timeline-panel {
  width: 46%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}

.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}

.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}

.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}

.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

.timeline-badge.primary {
  background-color: #2e6da4 !important;
}

.timeline-badge.success {
  background-color: #3f903f !important;
}

.timeline-badge.warning {
  background-color: #f0ad4e !important;
}

.timeline-badge.danger {
  background-color: #d9534f !important;
}

.timeline-badge.info {
  background-color: #5bc0de !important;
}

.timeline-title {
  margin-top: 0;
  color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}

.timeline-body > p + p {
  margin-top: 5px;
}

.timeline-panel{
	background-color: white; 
}

.page-header h1{
	color: white;	
}

.zoom:hover {
    transition: 0.7s;
    transform: scale(1.02); 
    
}

.zoom1:hover{
	 transition: 0.9s;
    transform: scale(1.12); 
}

.responsive {
    width: 220px;
    height: auto;
}

.projects{
	padding-top: 10px;	
}

.hidp, .hidb{
	display: none;
}

a{
	text-decoration: none;
}

.hidep, .hideb{
	display: none;
}

.zoom1 a{
	color:rgb( 86, 101, 115 );
	text-decoration: none;
}

.zoom1 a:hover{
	color:rgb(  128, 139, 150  );
	text-decoration: none;
}

.fa-facebook ,.fa-linkedin {
  padding: 25px;
  font-size: 40px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  
}
.zoom2:hover{
transition: 0.5s;
    transform: scale(1.52); 
}
.zoom3:hover{
transition: 0.4s;
    transform: scale(1.12); 
}

#msgEmail:hover{
 border-color: black;
}
							
#msgBody:hover{
	
 border-color: black;
}

#msgEmail{
	border:2px solid;
color: grey;

}
							
#msgBody{
	border:2px solid;
color: grey;

}
#map {
        height: 400px;
        width: 100%;
       }
						





  </style>
</head>
<body>
 

<div id="home" class="n text-center" style="margin-bottom:0 height:100%;">
	<img src="imga1.jpg">
  <div class="centered wow flipInX" data-wow-delay="0.7s">

 	<h1> Hello and Welcome!</h1>
 	<h2>I'm Sameer</h2>
 	<h4>&nbsp A front-end webdeveloper and a programmer </h4>
 	<a class="js-scroll-trigger text-white" href="#about"><button type="button" class="btn bg-primary text-white">Read more</button></a>
 	
 	</div>
</div>

<div class="sticky-top wow fadeIn" data-wow-delay="0.2s">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand zoom3" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"> &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="#about">About</a>
      </li> &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="#education">Education</a>
      </li> &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="#workexperience">Work Experience</a>
      </li>     &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="#portfolio">Portfolio</a>
      </li> &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="#blog">Blog</a>
      </li> &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="CV.pdf">Resume</a>
      </li> &nbsp &nbsp &nbsp &nbsp
      <li class="nav-item">
        <a class="nav-link zoom3" href="#contact">Contact</a>
      </li>
    </ul>
  </div>  
</nav>
</div>
<!-- About -->
<br>

<div id="about" class="container text-center bg-light wow fadeIn" data-wow-duration="1.7s" data-wow-delay="0.5s"  >
  <h1>About me?</h1>
  <p><em>A Computer Science student</em></p>
  <p>I'm Sameer Bin Raees, a computer science student in National University of Sciences and Technology (NUST), Islamabad, Pakistan. I basically belong to <em>Sargodha </em> city also known as <em>City of Eagles</em>. I'm currently in my 2nd year of study, precisely in 4th semester. I'm writing all of this because of an assignment of our course <em>Web Engineering</em>.  </p>
  <h3 class="aboutskills">My skills include:</h3>
  <ul class="aboutskills">
  	<li>Programming</li>
  	<li>Front end web development</li>
  	<li>Android Development</li>
  	<li>MySQL</li>
  	<li>Assembly Language</li>
  	<li>MS Office</li>
  </ul>
  
</div>


<div id="education" class="bg-dark ">
 <center><div class="page-header"><h1>Education</h1></div></center>
  <ul class="timeline" style="padding-left: 10px; padding-right: 10px; ">
    <li>
      <div class="timeline-badge" ></div>
      <div class="timeline-panel zoom wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"" >
        <div class="timeline-heading">
          <h4 class="timeline-title">2016-2020</h4>
          
        </div>
        <div class="timeline-body ">
          <p>Bachelors of Computer Science</p>
          <p>from National University of Sciences and Technology (NUST)</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge"></div>
      <div class="timeline-panel zoom wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"">
        <div class="timeline-heading">
          <h4 class="timeline-title">2014-2016</h4>
        </div>
        <div class="timeline-body">
          <p>F.Sc (Pre-Engineering)</p>
          <p>from ACME College of Excellence, Sargodha</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge"></div>
      <div class="timeline-panel zoom wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"">
        <div class="timeline-heading">
          <h4 class="timeline-title">2012-2014</h4>
          
        </div>
        <div class="timeline-body">
          <p>Matric</p>
          <p>from Sanai Schools System, Sargodha</p>
        </div>
      </div>
    </li>
    </ul>
</div>

<div id="workexperience" class="container text-center bg-light wow lightSpeedIn" data-wow-duration="1.1s" data-wow-delay="0.7s" >
	<h1>Work experience</h1>
	<p>As I'm a student not having any kind of industry experience so obviously no one will give me a job.<br>Yeah, you guessed it right! I don't have any working experience.<br> But I do look forward for an internship which is directly related to my field of work or my intrests.</p>
</div>

		<div class="wow rotateInUpLeft bg-dark text-muted">
			<center>
			<h1>Portfolio</h1>
			</center>
          	<br>
          <div class="row " data-wow-duration="0.8s" data-wow-delay="0.7s" id="portfolio" >

          <div class="col-sm-4 zoom3" style="padding-left: 50px;" ><img class="card-img-top" src="http://img.weiku.com/a/016/688/NBTLC_10_traffic_lights_signal_controller_7189_6.jpg" alt="Card image cap" style="height: 200px; width: 380px; 
          ">
          <div class="card-body">
          <h5 class="card-title">Intelligent traffic signals</h5>
          <p class="card-text">Project of Information and Communications Technology (ICT)<br> Based on embedded systems</p>
          </div>
          <hr>
          </div>
          <div class="col-sm-4 zoom3" style="padding-left: 40px;"> <img class="card-img-top" src="kashipara.com_image003-png.png" alt="Card image cap" style="height: 200px; width: 370px">
          <div class="card-body">
          <h5 class="card-title">Airline Management System</h5>
          <p class="card-text">Project of Object Oriented Programming <br> Language used is Java</p>
          </div>
          <hr>
          </div>
          <div class="col-sm-4 zoom3"> <img class="card-img-top" src="rsz_bk-tree-2.png" alt="Card image cap" style="height: 200px; width: 360px">
          <div class="card-body">
          <h5 class="card-title">Dictionary</h5>
          <p class="card-text">Project of Data Structures and Algorithm <br> Data Structure used is BK Tree</p>
          </div>
          <hr>
          </div>
          <div id = "demo" class="collapse" style="padding: 15px">
          <div class="row">
          <div class="col-sm-4 zoom3" style="padding-left: 50px;" ><img class="card-img-top" src="https://www.electronicshub.org/wp-content/uploads/2014/08/Screaming-Siren-Circuit-Diagram.jpg" alt="Card image cap" style="height: 200px; width: 380px">
          <div class="card-body">
          <h5 class="card-title">Home Security System</h5>
          <p class="card-text">Project of Digital Logic Design <br> Sequential Logic is used</p>
          </div>
          <hr>
          </div>
          <div class="col-sm-4 zoom3" style="padding-left: 50px;"><img class="card-img-top" src="https://i.otto.de/i/otto/14780034/revell-modellbausatz-flugzeug-airbus-a350-900-massstab-1-144-weiss.jpg?$formatz$" alt="Card image cap" style="height: 200px; width: 380px">
          <div class="card-body">
          <h5 class="card-title">Airbus reservation system</h5>
          <p class="card-text">Project of Programming <br> Language used is C++ </p>
          </div>
          <hr>
          </div>
          <div class="col-sm-4 zoom3" style="padding-left: 50px;"><img class="card-img-top" src="https://st2.depositphotos.com/1605528/6293/i/950/depositphotos_62938867-stock-photo-list-of-human-diseases.jpg" alt="Card image cap" style="height: 200px; width: 380px">
          <div class="card-body">
          <h5 class="card-title">Disease Database</h5>
          <p class="card-text">Project of Data Base Systems <br> Developed with mysql</p>
          </div>
          <hr>
          </div>
          </div>
      </div>
  </div>
  </div>
 	        
      </section>
      <center class="bg-dark">
          <button type="button" class="btn btn-info wow rotateInUpLeft" data-wow-duration="0.8s" data-wow-delay="0.7s"" data-toggle="collapse" data-target="#demo" style="width: 110px">More/Less</button>
         
         <p><br><br></p>
</center>
 <br>


      <section class="resume-section p-3 p-lg-5 d-flex flex-column wow rotateInUpRight" data-wow-duration="0.8s" data-wow-delay="0.7s" id="blog">

        <div class="my-auto">
        	<center>
        	<h1>Blogs</h1>
        	</center>
        	<br>

         <div class="row">
          <div class="col-sm-4 zoom3" > <h5 class="card-title">Oculus Rift</h5>
          <p class="card-text">​Oculus Rift is 3D headset gaming gadget...
          YES this is what it really is!!!
          Virtual Reality gaming becomes true in the form of oculus rift. This 3D headset lets the user to mentally feel that he is literally inside a video game. In the Rift’s virtual world, you could turn your head around with ultra-low rotational latency to view the virtual world in high...</p>
     
          <a href="https://futuretrendsict.weebly.com/" target="_blank" class="btn btn-primary">Read more...</a>
          <hr>
          </div>
          <div class="col-sm-4 zoom3"><h5 class="card-title">DNA Digital Storage</h5>
          <p class="card-text">DNA Digital storage is an extraordinary idea that will combine technology and nature.          This combination will yield an outcome which will revolutionize the way of handling and storing data as well as porting it from one place to another.
          Some estimates shows that 1 gram of DNA can store 1 thousand TB of data that is what we call a super storage...</p>
          <a href="https://futuretrendsict.weebly.com/" target="_blank" class="btn btn-primary">Read more...</a>
          <hr>
          </div>
          <div class="col-sm-4 zoom3"><h5 class="card-title">3D Printing</h5>
          <p class="card-text">Ever thought what a machine can't do? well now you might!
          3D printing , the most talked technology of 21st century. This technology will change the way you think and express your ideas, it makes your goals vast but clear. 3D printing encompasses every single thing you can think off. From sneakers made up of carbon fibers to the sky scrappers...  </p>
          <a href="https://futuretrendsict.weebly.com/" target="_blank" class="btn btn-primary">Read more...</a>
          <hr>
          </div>
          <div id = "demo2" class="collapse" style="padding: 15px">
          <div class="row">
          <div class="col-sm-4 zoom3" ><h5 class="card-title">Contexual Awareness</h5>
          <p class="card-text">It is the property of mobile devices that can enable the device to sense and adapt to the user's environment.
          Contextual awareness which originated basically from UBIQUITOUS COMPUTING.
          Now what is Ubiquitous computing?
          It is the concept in which computing can be done anywhere and anytime in the...</p>
          <a href="https://futuretrendsict.weebly.com/" target="_blank" class="btn btn-primary">Read more...</a>
          <hr>
          </div>
          <div class="col-sm-4 zoom3"><h5 class="card-title">Artificial Synopsis</h5>
          <p class="card-text">After artificial intelligence the most latest advancement in that scope is "artificial synapses". These "artificial synapses" paves the way for brain like computers.
          This technology is inspired from the natural synapses present at the junction of sensory, motor and relay neurons. The real work of these natural synapses...</p>
          <a href="https://futuretrendsict.weebly.com/"  target="_blank" class="btn btn-primary">Read more...</a>
          <hr>
          </div>
          <div class="col-sm-4 zoom3"><h5 class="card-title">Prosthetic Hand</h5>
          <p class="card-text">If we look at the medicine terminology "prosthesis" means to artificially replace any missing part of the body which may be lost due to trauma or any disease.
          For the first time scientists are able to restore sensory feelings in a patient while he was controlling the "Prosthetic Hand".
​          A four week clinical trial have been...</p>
          <a href="https://futuretrendsict.weebly.com/" target="_blank" class="btn btn-primary">Read more...</a>
          <hr>
          </div>
          </div>
          <br>
          
      </section>
      <center>
          <button type="button" class="btn btn-info wow rotateInUpRight" data-wow-duration="0.8s" data-wow-delay="0.7s"" data-toggle="collapse" data-target="#demo2" style="width: 110px">More/Less</button>
          <p><br><br></p>
          </center>
          <br>

<div id="contact" class="bg-dark wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">

<div class="section">
			<div class="container">
				<h2 class="section-title"><i class="fa fa-envelope"></i> Want to contact?</h2>
				<h3 class="text-info">Feel free to say hi!</h3>
				<p class="text-info">Kindly fill the form below and I'll revert back to you shortly.</p>
				<br>
				<div class="row">
					<div class="col-md-3 wow fadeInLeft contact-details-box" data-wow-delay="0.6s">
						<h3 class="text-info">Contact Me.</h3>
						<div class="contact-details text-muted">
							<p class="zoom"><i class="fa fa-map-marker"></i> National University of Sciences and Technology, Islamabad, 44000, PK</p>
							<p  class="zoom"><i class="fa fa-phone"></i> +92 322 7009296</p>
							<p  class="zoom"><i class="fa fa-envelope-o"></i> mraees.bscs16seecs@gmail.com</p>
						</div>
					</div>
					<div class="col-md-7">
						<form id="contact-form">
							
							<div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
								<input type="email" placeholder="Email" class="form-control" id="msgEmail">
							</div>

							<br>
							<div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
							<textarea class="form-control" rows="5" placeholder="Message" id="msgBody"></textarea>
							</div>
							<br>
							<div class="col-md-offset-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
								
								<input type="submit" value="Send Message" class="form-control btn btn-success" name="sendMsg">
							</div>
						</form>
					</div>
				</div>
			
				<center>
				<div class="copyright ">
					<span><a href="https://www.facebook.com/sameer.bin.raees"><i class="fa fa-facebook zoom2"></i></a></span><span><a href="https://www.linkedin.com/in/muhammad-sameer-bin-raees-791871146/" target="_blank"><i class="fa fa-linkedin zoom2"></i></a></span> 
					<br>
					<a href="CV.pdf" target="_blank"><button class='btn btn-success'><i class="fa fa-download" style="color:#fff;"></i> Download Resume</button></a>
							
		</div>
		</center>		
		</div>	
</div>
<br>
<br>
<div id="googleMap">
	<div class = "container wow fadeIn">
		<h2 class = "section-title text-info">Want to meet?</h2>
		<p class = "slogan text-info">here is where you can find me</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13287.869096967632!2d72.97601075960388!3d33.64256699286181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9675aaaaaaab%3A0xc5180922c44eb86b!2sNational+University+of+Sciences+and+Technology+(NUST)!5e0!3m2!1sen!2s!4v1525725675259" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>
	<br>
</div>


</body>
</html>