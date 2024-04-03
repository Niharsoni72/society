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
		<style>
			.default-header {
				background-color: black;
				/* Set background color to white */
				padding: 10px 0;
				/* Add padding for better spacing */
			}

			.navbar {
				background-color: white !important;
				/* Override default Bootstrap background color */
			}

			.navbar-nav .nav-link {
				color: white !important;
				/* Set text color to white */
			}

			.navbar-nav .nav-link:hover {
				color: whitesmoke !important;
				/* Set text color to blue on hover */
			}
		</style>



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
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contact.php">Contact US</a></li>

						</ul>
					</div>
				</div>
			</nav>


		</header>


		<style>
			* {
				box-sizing: border-box;
			}

			body {
				font-family: Verdana, sans-serif;
			}

			.mySlides {
				display: block;
				width: 100%;
				/* Set slide width to 100% */
			}

			img {
				vertical-align: middle;
			}

			.slideshow-container {
				max-width: 100%;
				overflow: hidden;
				/* Hide overflowing content */
			}

			.numbertext {
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}

			.fade {
				animation-name: fade;
				animation-duration: 1.5s;
			}

			@keyframes fade {
				from {
					opacity: .6
				}

				to {
					opacity: 3
				}
			}
		</style>
		</head>

		<body>



			<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="../sms/assets/images/HOMENEW.jpeg" style="width:100%">
					<div class="text"></div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="../sms/img/0993_f001.jpg" style="width:100%" height="750px;">
					<div class="text"></div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="../sms/assets/images/groupphoto.jpeg" style="width:100%">
					<div class="text"></div>
				</div>

			</div>
			<br>


			<script>
				let slideIndex = 0;
				showSlides();

				function showSlides() {
					let i;
					let slides = document.getElementsByClassName("mySlides");
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					}
					slideIndex++;
					if (slideIndex > slides.length) {
						slideIndex = 1
					}
					slides[slideIndex - 1].style.display = "block";
					setTimeout(showSlides, 2000);
				}
			</script>
			<!-- start footer Area -->
			<footer class="footer-area section-gap" style="background-color: #3b3d5c; padding: 40px 0;">
				<div class="container">
					<div class="row">
						<!-- Left Side: Contact Us Information -->
						<div class="col-lg-6" style="margin-bottom: 40px;">
							<a href="contact.php">
								<h3 style="color: white; font-size: 24px; font-weight: bold;">Contact Us</h3>
							</a>
							<p style="color: #ccc; border-bottom: 1px solid #ccc; padding-bottom: 10px;">Location: Your Address</p>
							<p style="color: #ccc; border-bottom: 1px solid #ccc; padding-bottom: 10px;">Email: example@example.com</p>
							<p style="color: #ccc; border-bottom: 1px solid #ccc; padding-bottom: 10px;">Phone: +1234567890</p>
						</div>

						<!-- Right Side: Social Media Links -->
						<div class="col-lg-6" style="text-align: right;"> <!-- Adjusted to align content to the right -->
							<div style="color: white;">
								<h3 style="color: white; font-size: 24px; font-weight: bold; margin-bottom: 1	lk0px;">Social Media</h3>
								<div style="display: flex; align-items: center;">
									<ul class="social-icons" style="list-style: none; padding: 0; margin-right: -315px;">
										<li style="margin-bottom: 10px;">
											<a href="https://www.facebook.com/">
												<svg xmlns="http://www.w3.org/2000/svg" width="700" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
													<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
												</svg>
											</a>
										</li>
									</ul>
									<p style="margin-right: 20px;">Facebook</p>
								</div>
								<div style="display: flex; align-items: center;">
									<ul class="social-icons" style="list-style: none; padding: 10; margin-right: -315px;">
										<li style="margin-bottom: 10px;">
											<a href="https://www.instagram.com/">
												<svg xmlns="http://www.w3.org/2000/svg" width="700" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
													<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
												</svg>
											</a>
										</li>
									</ul>
									<p style="margin-right: 20px;">Instagram</p>
								</div>
								<div style="display: flex; align-items: center;">
									<ul class="social-icons" style="list-style: none; padding: 0; margin-right: -315px;">
										<li style="margin-bottom: 10px;">
											<a href="https://twitter.com/i/flow/login">
												<svg xmlns="http://www.w3.org/2000/svg" width="700" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
													<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
												</svg>
											</a>
										</li>
									</ul>
									<p style="margin-right: 20px;">Twitter</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<footer class="footer-area section-gap" style="background-color: white; padding: 20px 0;">
				<div class="container">
					<div class="row">
						<!-- Content for the second footer -->
						<div class="col-lg-12 text-center">
							<h5 style="color: #333;">Developed by Riya Rojesara & Niral Parmar</h5>
						</div>
					</div>
				</div>
			</footer>


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