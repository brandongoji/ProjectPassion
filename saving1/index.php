<html>
<?php
session_start();
 include ("function.php"); 
?>

<head>
	<title>Website</title>
	<link rel="stylesheet" type="text/css" href="project.css">

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>
<body>
<center>
    <header>
        <div id="nav">
        	<h3>Project Passion</h3>
        	<ul>
        		<li><a href="#">Home</a></li>
        		<li><a href="blog.php">Blog</a></li>
        		<li><a href="pictures.html">Pictures</a></li>
        		<li><a href="contact.html">contact</a></li>
        	</ul>
        </div>
    </header>
    
    <div id="slider">
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/me11.jpg" alt="" title="" id="wows0_0"/></li>
		<li><img src="data0/images/me1010.jpg" alt="" title="" id="wows0_1"/></li>
		<li><img src="data0/images/me1111.jpg" alt="" title="" id="wows0_2"/></li>
		<li><img src="data0/images/me1212.jpg" alt="" title="" id="wows0_3"/></li>
		<li><img src="data0/images/me22.jpg" alt="" title="" id="wows0_4"/></li>
		<li><img src="data0/images/me33.jpg" alt="" title="" id="wows0_5"/></li>
		<li><img src="data0/images/me44.jpg" alt="" title="" id="wows0_6"/></li>
		<li><img src="data0/images/me55.jpg" alt="" title="" id="wows0_7"/></li>
		<li><img src="data0/images/me66.jpg" alt="" title="" id="wows0_8"/></li>
		<li><img src="data0/images/me77.jpg" alt="" title="" id="wows0_9"/></li>
		<li><a href="http://wowslider.com"><img src="data0/images/me88.jpg" alt="bootstrap slider" title="" id="wows0_10"/></a></li>
		<li><img src="data0/images/me99.jpg" alt="" title="" id="wows0_11"/></li>
	</ul></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

    </div>
    
    <div id="content">
       <div id="join">
       <h2>Join Us</h2>
       <form action="" method="POST"><br>
       <input type="text" name="username" placeholder="username" required="required"><br><br>
       <input type="email" name="email" placeholder="email" required="required"><br><br>
       <input type="password" name="password" placeholder="password" required="required"><br><br>
       <input type="submit" name="submit" value="SignUp">    
       </form>
       <?php InsertUser(); ?>
       </div>
       <div id="happy">
       <h2>Are You Happy</h2>
       <h4>Does our service live up to your expectations?</h4>
       <div id="pic1">
       <a href="#">Yes</a>
       </div>

       <div id="pic2">
       <a href="#">No</a>
       </div>
       </div>
       <div id="login">
       <h2>Login Here</h2>
       <form action="login.php" method="POST"><br>
       <input type="text" name="uemail" placeholder="email" required="required"><br><br>
       <input type="password" name="upassword" placeholder="password" required="required"><br><br>
       <input type="submit" name="login" value="login">  

       </div>    </div>

    <footer>
        <p> Designed By -Ashish Kumar</p>

    </footer>