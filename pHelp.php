
<?php
	session_start();
	include("connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
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

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
::placeholder {
    color: white;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: white;
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
							 
                              <div class="col-md-6">							
                            <input type="text" class="search-text" name="s" placeholder=" Search..."> 
                                </div>							
                              <div class="col-md-6">							
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
							  <li class="nav-item">
							    <?php
							    if(!isset($_SESSION['userAccessInfo'])){
								
								    echo "<a href='logout.php'></a>";
								}
								else{
								
								   echo "<a href='logout.php'><img style='border-radius:10%' src='new/logout.png' ></a>";
								
								}
								
								?>
							 </li>
							 
						  </ul>
               </div>
            </nav>				
		</div>
   </div>
         <!-- //Navigation -->

	</div>
	</section>
	</header>
	
	<img src="new/less_bac.png" >
	
	<!-- /news-->
<section class="w3-services">
	<div class="container">
			<div class="wthree_head_section">
				<h2 class="w3l_header" style="color:#2556cf;">Project Help</h2>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>-->
			</div>
			<div class="row w3-services-grids">
						
				<!--<div class="col-lg-4 w3-services-left-grid">
					<img src="images/1.jpg" class="img-fluid" alt="">
				</div>-->
				<div class="col-lg-12 w3-services-right-grid" style="margin-left: 3.5em;">
				<div class="row w3-icon-grid-gap1" style="color:#000;">
					<div class="col-md-12 w3-icon-grid1" >
						
						<div class="Supp" >
						     
							   	<b class="row w3-icon-grid-gap1" style="margin:auto 0;padding-top: 5px;
    padding-bottom: 5px;border: 2px;border-color:#32004b;border-style: solid;margin-bottom:10px;padding-left:10px">Select the subject of your project&nbsp;<span style="color:red">*</span></b>
						
							 
							<!--<b class="row w3-icon-grid-gap1" style="color:#000;padding-top5px">Which subject you need Special Care?&nbsp;<span style="color:red">*</span></b>
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
    padding-bottom: 5px;border: 2px;border-color:#32004b;border-style: solid;margin-bottom:10px;padding-left:10px">What is your project tittle?&nbsp;<span style="color:red">*</span></b>
						
							<!--<b class="row w3-icon-grid-gap1" style="color:#000;padding-top5px">Your next mid team &amp; final exam date?&nbsp;<span style="color:red">*</span></b>
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
						
						<input type="text"  class="col-md-12 w3-icon-grid1" style="color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 5px;padding-bottom: 5px;margin-bottom:10px" name="s";
						placeholder=" example: RFID Based Door Access Control"> 
					 
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
    padding-bottom: 5px;border: 2px;border-color:#32004b;border-style: solid;margin-bottom:10px;padding-left:10px">Write the description of your project&nbsp;<span style="color:red">*</span></b>
						
							<!--<b class="row w3-icon-grid-gap1" style="color:#000;padding-top5px">Your next mid team &amp; final exam date?&nbsp;<span style="color:red">*</span></b>
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
						
						<textarea type="text"  class="col-md-12 w3-icon-grid1" style="height:auto;color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 5px;padding-bottom: 5px;margin-bottom:10px" name="s";
						 rows="10" placeholder="Write it in 100 words."></textarea>
					 
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
    padding-bottom: 5px;border: 2px;border-color:#32004b;border-style: solid;margin-bottom:10px;padding-left:10px">What is the date of your project submission?&nbsp;<span style="color:red">*</span></b>
						
							<!--<b class="row w3-icon-grid-gap1" style="color:#000;padding-top5px">Your next mid team &amp; final exam date?&nbsp;<span style="color:red">*</span></b>
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
						
						<input type="text"  class="col-md-12 w3-icon-grid1" style="color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 5px;padding-bottom: 5px;margin-bottom:10px" name="s";
						placeholder=" example: 07 Auguest 2018"> 
					 
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
						
						<div class="Supp">
						  
							<p class="row w3-icon-grid-gap1" style="box-shadow:inset 45em 0 25em -10em #cc0099,inset -55em 0 5em -5em #3399cc;
							margin:auto 0;padding-top: 5px;padding-bottom: 5px;margin-bottom:10px;padding-left:10px">  Do you want to attend our Special Care program or Model Test program to improve 
                                           your result ?</p>
							 
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
				<div class="row w3-icon-grid-gap1">
					<div class="col-md-12 w3-icon-grid1" >
						<!--<i class="fas fa-calendar-alt"></i>-->
						<div class="Supp">
						<div class="row">
						<div class="colum" style="width:400px;height:50px">
						<form>
						<div class="col-md-10 " style="color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 10px;padding-bottom: 5px;margin-bottom:10px">
						  <input type="radio" name="gender" value="male" checked> Yes<br>
						
						</div>
						</div>
						<div class="colum" style="width:400px;height:50px">
						<div class="col-md-10" style="color:#fff;background-color:#00aeef;margin:auto 0;padding-top: 10px;padding-bottom: 5px;margin-bottom:10px">
						  <input type="radio" name="gender" value="male" > No<br>
						
						</div>
						</div>
						</div>
						</div>
						
						</form>	
						
					</div>
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