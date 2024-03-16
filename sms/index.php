	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<title>Society Management System !! Home Page</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
		    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
		    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
		

				<nav class="navbar navbar-expand-lg  navbar-light bg-light">
					<div class="container">
						  <a class="navbar-brand" href="index.php">
						  	<h3 style="color: red">Society Management System</h3>
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="index.php">Home</a></li>
								<!-- <li><a href="admin/login.php">Admin</a></li>  -->
								<li><a href="user/login.php">User</a></li>
								<li><a href="user/gallery.php">Gallery</a></li>
								<li><a href="user/contact.php">Contact US</a></li>
								
						    </ul>
						  </div>						
					</div>
				</nav>


			</header>
		

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1300px;
  position: relative;
  margin: auto;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .6} 
  to {opacity: 2}
}

</style>
</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../sms/assets/images/HomeSMS.JPG" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../sms/img/header-bg.jpg" style="width:100%" height="750px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../sms/assets/images/groupphoto.jpeg" style="width:100%">
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
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 2000); 
}
</script>


		 <!-- <section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="height: 800px;">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								Society Management System
							</h1>
						
						</div>
					</div>
				</div>
			</section> 		 -->

		
				
			<!-- Start city Area -->
			<section class="city-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <img class="content-image img-fluid d-block mx-auto" src="img/p1.jpg" alt="">
						   
						  </div>
						</div>
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="content">
							   
							  		 <img class="content-image img-fluid d-block mx-auto" src="img/p2.jpg" alt="">
							     
							    </a>
						  	</div>
							<div class="row city-bottom">
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									  
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/p3.jpg" alt="">
									     
									    </a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									   	 <img class="content-image img-fluid d-block mx-auto" src="img/p4.jpg" alt="">
									   
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End city Area -->
	

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<h2 class="footer-text m-0" style="color: red">Society Management System </h2>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/ion.rangeSlider.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>	
		</body>
	</html>