
<?php
	session_start();
	include("connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
   
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

 
   .wrapper {
    text-align: center;
}

.button {
    position: relative;
	background-color:#00aeef;
	color:#fff;
    top: 50%;
	-webkit-border-radius:40px;
    -moz-border-radius:40px;
    border-radius:40px;
	height: 45px;
  width: 200px;
  margin-top:30px;
  margin-right: 100px;
}

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields 
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}*/

/* Set a style for all buttons 
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}*/

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   /* padding-top: 60px;*/
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
 

   width: 40%; 	/*Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
   
   
      <title>Educativeaid</title>
      <!-- Meta Tags -->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<meta name="keywords" content="Preparation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.css" rel="stylesheet">
      <!-- //font-awesome icons -->
	  <link href="css/owl.carousel.css" rel="stylesheet">
      <!--stylesheets-->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
     <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
   </head>
   <body>

<!--/banner-->
<!-- banner -->
<header>
	<section class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
		
			<div class="header-bar">
				<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
               <div class="hedder-up">
			       <!--<h1><a class="navbar-brand" href="index.html">Educativeaid</a></h1>-->
                  <img src="new/logo.png" >
			   </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                   <ul class="navbar-nav">
						  
							<div class="row">
							 
                              <div class="col-md-7">							
                            <input type="text" class="search-text" name="s" placeholder=" Search..."> 
                                </div>							
                              <div class="col-md-5">							
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
							</div>
                          
							</div>	
							
							 <li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							 </li>
							 <li class="nav-item">
								<a href="bInstractor.php#" class="nav-link ">Become Instractor</a>
							 </li>
							  <li class="nav-item">
								<a href="#" class="nav-link">My Courses</a>
							 </li>
							 <!-- <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
										Help
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									    <a href="contact.html" class="dropdown-item">Contact</a>
										<!--<a class="dropdown-item" href="codes.html">Codes</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="about.html">About</a>
									</div>
								</li>-->
								<li class="nav-item">
								<a href="#" class="nav-link"><img src="new/cart.png" ></a>
							 </li>
							 
							   <li class="nav-item" >
							  <form action="index.php" method="post">
							     <?php
										if(!isset($_SESSION['userAccessInfo'])){
										
									    	echo "<script>
												var logged = false;
											</script>";
											
										
										}
										else{

											echo "<script>
											var logged = true;
										</script>";
											
										}
									?>
								</form>	
							</li>
							<a id = 'logout' href='logout.php'><img style='border-radius:10%' src='new/logout.png' ></a>
							<div id="login">
							<img onclick="document.getElementById('id01').style.display='block'" style="margin-right:3px;" src="new/login.png" >		
								<div id="id01" class="modal"  >
  
									<form class="modal-content animate" action="process.php" method="POST">
										<div class="imgcontainer">
										  	  
										   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

										</div>

										<div class="container">
										
										<div class="wthree_head_section">
											<h2 class="w3l_header" style="'color:#00aeef;">------Log In------</h2>
											<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>-->
										</div>
										
										<div class="row w3-services-grids">
				                         <div class="col-lg-12 w3-services-right-grid">
										
										    <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											 <!--<form  action="process.php" method="POST">-->
												<i class="fa fa-phone" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="mobile_no" placeholder=" Mobile No" required>
	                                            
                                                </div>
										     </div>
											<div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											  
												 <i class="fa fa-lock" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="password"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="password" placeholder=" Password" required>
	                                            
                                               </div>
										     </div>
											
											<div class="row w3-icon-grid-gap1" >
					                           <div class="col-md-12 w3-icon-grid1">
													  <button id="lgbtn" style="margin-top:20px;-webkit-border-radius:40px; -moz-border-radius:40px;border-radius:40px;height:40px;width:90%;background-color:#00aeef;color:#fff" type="submit" value="submit">Login</button>
													  
												</div>
										     </div>	
											 <!--</form>-->
											
                                           										 
                                            <!-- <label style='float:left;margin-top:5px'>											 
											<input type='checkbox' checked='checked' name='remember'> Remember me</label>-->
										  
										</div>
										</div>
										

										<div class="container" style="background-color:#00aeef;width:100%;margin-top:80px;height:60px">
										  <!--<button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>Cancel</button>-->
										  <p>Have not an account? <a href="#signup" onclick="document.getElementById('id02').style.display='block'"  style="color:#fff;padding-top:5px">Sign Up</a></p>
										  <!--<span class='psw'>Forgot <a href='#'>password?</a></span>-->
										</div>
										</div>
									</form>
									  
								</div>
										
										
							</div>						
							
                              
									
									
								
							 <div id="signup">
							 
								<img onclick="document.getElementById('id02').style.display='block'" style="margin-left:3px;border-radius:10%" src="new/signup.png" >
								
								<div id="id02" class="modal" >
  
									  <form class="modal-content animate" action="process.php" method="POST">
										<div class="imgcontainer">
										  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
										  
										</div>

										<div class="container">
										
										<div class="wthree_head_section">
											<h2 class="w3l_header" style="color:#00aeef;">------Sign Up------</h2>
											<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>-->
										</div>
										
										<div class="row w3-services-grids">
				                         <div class="col-lg-12 w3-services-right-grid">
										    <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												<i class="fa fa-user" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="uname" placeholder=" Full Name" required>
	                                            </form>
                                               </div>
										     </div>
											<div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												 <i class="fa fa-university" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="psw" placeholder=" University Name" required>
	                                            </form>
                                               </div>
										     </div>
											 
											 <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												 <i class="fa fa-phone" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="psw" placeholder=" Mobile No" required>
	                                            </form>
                                               </div>
										     </div>
											 
											 <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												 <i class="fa fa-phone" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="psw" placeholder=" Guardian Mobile No (Optional)" >
	                                            </form>
                                               </div>
										     </div>
											 
											 <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												 <i class="fa fa-envelope" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="psw" placeholder=" Email" required>
	                                            </form>
                                               </div>
										     </div>
											 
											  <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												 <i class="fa fa-lock" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="psw" placeholder=" Password" required>
	                                            </form>
                                               </div>
										     </div>
											 
											  <div class="row w3-icon-grid-gap1" >
											<div class="col-md-12" >
											   <form >
												 <i class="fa fa-lock" style="background-color:#00aeef;width:40px;height:30px;color:#000;padding-top:5px"></i>
												  <input  type="text"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px;height:30px;width:90%" name="psw" placeholder=" Confirm Password" required>
	                                            </form>
                                               </div>
										     </div>
											 <div class="row w3-icon-grid-gap1" >
											 <label style="float:left;margin-top:10px">											 
											<input type="checkbox" name="remember"> I accept the <a style="color:#00aeef;">privacy policy</a> and <a style="color:#00aeef;">teams of service.</a></label>
											 </div>	
											<div class="row w3-icon-grid-gap1" >
					                           <div class="col-md-12 w3-icon-grid1">
													  <button style="margin-top:20px;-webkit-border-radius:40px; -moz-border-radius:40px;border-radius:40px;height:40px;width:90%;background-color:#00aeef;color:#fff" type="submit">Sign up</button>
													  
												</div>
										     </div>	 
                                             
										  
										</div>
										</div>
										
										</div>
									  </form>
									  
									</div>
																	
							 </div>
							 
							 
						  </ul>
               </div>
            </nav>				
		</div>
   </div>
         <!-- //Navigation -->

	</div>
	</section>
	</header>
	
	<!--upper image -->
	<img src="new/less_bac.png" >
	
	<!-- /news-->
<section class="w3-services">
	<div class="container">
			<div class="wthree_head_section">
				<h2 class="w3l_header" style="color:#2556cf;">Become Instructor</h2>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>-->
			</div>
			<div class="row w3-services-grids">
						
				<!--<div class="col-lg-4 w3-services-left-grid">
					<img src="images/1.jpg" class="img-fluid" alt="">
				</div>-->
				<div class="col-lg-12 w3-services-right-grid" style="margin-left: 3.5em;">
				<div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" Name"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div>
				<div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" Email"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div>
				<div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" University Name"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div>
				<div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" University Batch No"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div><div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" University ID"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div>
				<div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" Result(CGPA)"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div>
				<div class="row w3-icon-grid-gap1" style="">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						  
							<input type="text"  class="col-md-12 w3-icon-grid1"  style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px" name="s" placeholder=" Mobile Number"> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>-->
				</div>
				<!--<div class="row w3-icon-grid-gap1" style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color: #00aeef;border-style: solid;margin-bottom:10px">
					<div class="col-md-12 w3-icon-grid1">
						<!--<i class="fas fa-calendar-alt"></i>
						<div class="Supp">
						  
							<p>Which subject you can teach?* (You can choose multiple)</p> 
							 <br>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-book"></i>
						<div class="Supp">
							<h3>Full Day Session</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
					</div>
				</div>-->
				<div class="row w3-icon-grid-gap1" style="color:#000;">
					<div class="col-md-12 w3-icon-grid1" >
						
						<div class="Supp" >
						
							<b class="row w3-icon-grid-gap1" style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color:#32004b;border-style: solid;margin-bottom:10px;padding-left:10px">Which subject you can teach?&nbsp;<span style="color:red">*</span>&nbsp;(You can choose multiple)</b>
						
							<!--<b class="row w3-icon-grid-gap1" style="color:#000;padding-top5px">Which subject you can teach?&nbsp;<span style="color:red">*</span>&nbsp;(You can choose multiple)</b>
							<br>-->
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-calendar"></i>
						<div class="Supp">
							<h3>Events</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
						
					</div>-->
				</div>
					
				<div class="row w3-icon-grid-gap1">
					<div class="col-md-12 w3-icon-grid1" >
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						<select name="cars" class="col-md-12 w3-icon-grid1" style="color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 10px;padding-bottom: 5px;margin-bottom:10px">
						<option value="volvo">MATH 003 : Elementary Calculus </option>
						<option value="saab">SPL</option>
						<option value="fiat" selected>APL</option>
						<option value="audi">DBMS</option>
					  </select>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-calendar"></i>
						<div class="Supp">
							<h3>Events</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
						
					</div>-->
				</div>
				<div class="row w3-icon-grid-gap1" style="color:#000;">
					<div class="col-md-12 w3-icon-grid1" >
						
						<div class="Supp" >
						
						    
							<b class="row w3-icon-grid-gap1" style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color:#32004b;border-style: solid;margin-bottom:10px;padding-left:10px">Which subject you can assist project?</b>
						
							<!--<b class="row w3-icon-grid-gap1" style="color:#000;padding-top5px">Which subject you can assist project? (You can choose multiple) </b>
							<br>-->
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-calendar"></i>
						<div class="Supp">
							<h3>Events</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
						
					</div>-->
				</div>
					
				<div class="row w3-icon-grid-gap1">
					<div class="col-md-12 w3-icon-grid1" >
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						<select name="cars" class="col-md-12 w3-icon-grid1" style="color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 10px;padding-bottom: 5px;margin-bottom:10px">
						<option value="volvo">MATH 003 : Elementary Calculus </option>
						<option value="saab">SPL</option>
						<option value="fiat" selected>APL</option>
						<option value="audi">DBMS</option>
					  </select>
						</div>
					</div>
					<!--<div class="col-md-6 w3-icon-grid1">
						<i class="fas fa-calendar"></i>
						<div class="Supp">
							<h3>Events</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</p>
						</div>
						
					</div>-->
				</div>
				
				<div class="wrapper">
						<button class="button">Submit</button>
					</div>
							
							
		</div>
		
	</div>
	</div>
</section>
<!-- //news -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- Footer -->
	<footer>
	<section class="w3ls_address_mail_footer_grids">
		<div class="container">
		<div class="row">
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-head">About Us</h5>
				<p>REPTO - Education Center was launched with the
					purpose of helping you to learn valuable new 
					skills that will help you make the most out of your
					work environment and keep you updated with the
					most recent developments in the tech world. Each
					online course on REPTO - Education Center is 
					designed and reviewed by the REPTO Review 
					Team with special attention given to the quality 
					of the content.
					<!--<span>3842 Australia.</span>-->
				</p>
			</div>
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-head">Our Mission</h5>
				<p>REPTO - Education Center was launched with the
					purpose of helping you to learn valuable new 
					skills that will help you make the most out of your
					work environment and keep you updated with the
					most recent developments in the tech world. Each
					online course on REPTO - Education Center is 
					designed and reviewed by the REPTO Review 
					Team with special attention given to the quality 
					of the content.
					<!--<span>+(012) 678 3459</span>-->
				</p>
			</div>
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-head">Contact Us</h5>
				<p>27/2 Kabi Jashim Uddin Rd, North 
                    Kamalapur, Motijheel, Dhaka 1217
				
				<span>Mobile: +88 01959 534 499</span>
				<span>+88 01944 350 970</span>
				<span>+88 01766 680 834</span>
				<span>E-mail: info@educativeaid.com.bd</span>
								
				</p>
				<br>
				<div class="w3l-social">
				<ul>
					<li>
					<img src="new/facebook.png" style="background-color:#3399cc;" >
						<!--<a href="#" class="fab fa-facebook-f"></a>-->
					</li>
					<li>
						<a href="#" class="fab fa-twitter"></a>
					</li>
					<li>
						<a href="#" class="fab fa-google-plus-g"></a>
					</li>
					<li>
						<a href="#" class="fab fa-instagram"></a>
						<li>
							<li>
								<a href="#" class="fab fa-linkedin-in"></a>
								<li>
				</ul>
			</div>
				<!--<p>
					<a href="mailto:info@example.com">info@example1.com</a>
					<span>
						<a href="mailto:info@example.com">info@example2.com</a>
					</span>
				</p>-->
			</div>
			</div>
			
			<!-- Newsletter 
	<div class="w3layouts_newsletter_right">
		<div class="row">
			<div class="col-md-3 n-left">
				<h6>Newsletter</h6>
			</div>
			<div class="col-md-9 n-right">
				<form action="#" method="post">
					<div class="input-flds">
						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="input-flds">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="input-flds">
						<input type="submit" value="Subscribe">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //Newsletter -->
	
		</div>
	</section>
	</footer>
	<section class="copyright-wthree">
		<div class="container">
			<p><b>Copyright © 2018 Educaticeaid || All Rights Reserved.</b> </p>
			<br>
			<!--<div class="w3l-social">
				<ul>
					<li>
						<a href="#" class="fab fa-facebook-f"></a>
					</li>
					<li>
						<a href="#" class="fab fa-twitter"></a>
					</li>
					<li>
						<a href="#" class="fab fa-google-plus-g"></a>
					</li>
					<li>
						<a href="#" class="fab fa-instagram"></a>
						<li>
							<li>
								<a href="#" class="fab fa-linkedin-in"></a>
								<li>
				</ul>
			</div>-->
		</div>
	</section>
	<!-- //Footer -->


     <!--js working-->
      <script src="js/jquery.min.js"></script>
      <!--//js working-->
	  <!-- requried-jsfiles-for owl -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->


	  	<!-- Slider script -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter-agileits-w3layouts').countUp();
	</script>
	<!-- //stats -->

	<!-- smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- //smooth scrolling -->
<!-- scrolling script -->

<script>
	var a = document.getElementById('login');
	var b = document.getElementById('signup');
	var c = document.getElementById('logout');
	
	c.style.display = 'none';
	if(logged){
		a.style.display = 'none';
		b.style.display = 'none';
		c.style.display = 'block';
	}else{
		a.style.display = 'block';
		b.style.display = 'block';
		c.style.display = 'none';
	}
	
</script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!--bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
 <!-- //bootstrap working-->
   </body>
</html>