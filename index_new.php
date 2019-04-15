<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
      window.history.forward();
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Shrimp Farm Monitoring System for Bangladesh based on IoT</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>	
	.button1 {
  display: inline-block;
  padding: 8px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 35px;
  box-shadow: 0 0px #999;
}

.button1:hover {background-color: #3e8e41}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
	
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box"style= "color: blue  " >
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index_new.php" class="logo" style= "color: #641E16  "><b>Shrimp Farm Monitoring System for Bangladesh based on IoT</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
              
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
				<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<button class="button1"><a class="logout" href="Home Page\Login\login.php">Logout</a></button>
			
		<?php endif ?>
                    
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <!--profile piture which is connected to profile.html page -->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="index_new.php"><img src="assets/img/ewu.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">EWU</h5>
              	  	
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dashboard"></i>
                          <span>ACTIVITY</span>
                      </a>
                  

                  <ul class="sub-menu">
                      <!--<a href="javascript:;" >-->
                         
                          <!--ui changed as project element -->
						  <li><a  href="https://console.thinger.io/#/dashboard/RASADIN?authorization=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJEYXNoYm9hcmRfUkFTQURJTiIsInVzciI6InJhc2FkaW4ifQ.UQ-oDXYOAmLY_rmRjjvss4x_LNA2f94_L6KO-KjpI7E"target="_blank">GAUGES</a></li>
						  <li><a  href="https://console.thinger.io/#/dashboard/RASADIN1?authorization=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJEYXNoYm9hcmRfUkFTQURJTjEiLCJ1c3IiOiJyYXNhZGluIn0.GADzSGO-3sJtIlhFXfTLS_xSErbMBWrjmDv4upc_gkk"target="_blank">TIME SERIES CHARTS</a></li>
						  <li><a  href="https://console.thinger.io/?fbclid=IwAR3y8OEtACIlE7B4byZYDL7CWl71e1EWmhBlip1uFozmJi1KM0eZe0TmgOY#/console/bucket/bucket1?authorization=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJEYXNoYm9hcmRfUkFTQURJTiIsInVzciI6InJhc2FkaW4ifQ.UQ-oDXYOAmLY_rmRjjvss4x_LNA2f94_L6KO-KjpI7E"target="_blank">LIVE DATA MONITORING</a></li>
						  
						  <!-- eyta holo amader nijer gauge <li><a  href="radial-component.html">GAUGES</a></li>
                  </li>-->
                     <!-- <ul class="sub">
                          <li><a  href="general.html">ph meter</a></li>
                          <li><a  href="buttons.html">terbidity</a></li>
                          <li><a  href="panels.html">temperature</a></li>
                          <li><a  href="panels.html">uv meter</a></li>
                      </ul>-->
                  </ul>
</li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>REPORT</span>
                      </a>
                          <ul class="sub-menu">
                          <!--components changed as statistics -->
						  
						    <center><li><a  href="ReportCsv\csvtosql\index.php">REPORT GENERATE</a></li></center>
                          </ul>
                   
                      <!--<ul class="sub">
                          <li><a  href="calendar.html">daily report</a></li>
                          <li><a  href="gallery.html">weekly report</a></li>
                          <li><a  href="todo_list.html">monthly report</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-car"></i>
                          <span>GUIDE</span>
                      </a>
                      <ul class="sub-menu">
                          
                          <li><a target="_blank" href="video.html">USER MANUAL</a></li>
                          
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-home"></i>
                          <span>ABOUT</span>
                      </a>
                      <ul class="sub-menu">
                          
                          <li><a target="_blank" href="test.html">ABOUT US </a></li>
                          <li><a  href="About Project/generic.html">ABOUT PROJECT </a></li>
						 
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">

                  	<!--add slide show-->
                  	<scale="1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {


  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 1.0s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration:1s;
  animation-name: fade;
  animation-duration: 1s;
}

@-webkit-keyframes fade {
  from {opacity: .1} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slide/rasadin1.jpg" style="width:135% ">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slide/452672.jpg" style="width:135%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slide/rasadin3.jpg" style="width:135%">
  <div class="text"></div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>
<!--end slide show-->
                  

                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      <!--trying input guage-->
                      <!--<stylesheet" href="../fonts/fonts.css">-->
  <style>
table {
    width:50%;
  
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    
}
th, td {
    padding: 0px;
    text-align:right;
}

table td:nth-child(1) {
   background-color: ;
   color: white;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4169E1;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: RED}

.button:active {
  background-color: BLUE;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
a {
    color: #FFFF00;
    text-decoration: none;
}

</style>
</head>

<body onload="init();" style= "background: url(slide/.jpg); background-size: 80%; background-color: gray;">
<!--<pre></pre>-->

   
 

<!--end guage implementation-->
					
					

      <!--main content end-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    

   
  

  </body>
</html>
