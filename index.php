<!DOCTYPE html>
<html lang="en">

<head>

	<?php	
		include('assets/Partials/headerfile.php');
	?>

</head>

<body>

	<!-- Header -->
	<?php 
		$navdesign = 0;
		///$menulinks[0] = "#hero-section";
		include('assets/Partials/home-menu.php'); 
	?>
	<!-- /Header -->


	<!--Hero/Home Area-->
	<section id="hero-section">
		<div id="carouselExample" class="carousel slide image-shade" data-bs-ride="carousel">
			<div class="carousel-inner">
				
				<div class="carousel-item active c-item" data-bs-interval="3000">
					<img src="assets/img/c2.JPG" class="d-block w-100 c-img overlay" alt="...">
				</div>
				<div class="carousel-item c-item" data-bs-interval="3000">
					<img src="assets/img/c1.JPG" class="d-block w-100 c-img" alt="...">
				</div>
				<div class="carousel-item c-item" data-bs-interval="3000">
					<img src="assets/img/c3.JPG" class="d-block w-100 c-img" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1 class="white-text" style="font-size: 3rem">Department of</h1>
						<h1 class="white-text" style="font-size: 5rem; font-weight: bold;">Computer Science and Engineering</h1>
						
						<!--<a class="main-button icon-button" href="#">Get Started!</a>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Hero/Home Area-->






	<!-- About -->
	<div id="about" class="section">

		<!-- container -->
		<div class="container" id="about-2">

			<!-- row -->
			<div class="row">

				<div class="col-md-7 swap-border-shadow" id="about-div" style="position: relative;">
					<div class="section-header">
						<h2>About Department of Computer Science and Engineering</h2>
					</div>
					<hr>

					<p id="about-description">
						Welcome to the Computer Science and Engineering (CSE) Department at Bangabandhu Sheikh Mujibur Rahman University, Kishoreganj! This department started its academic journey in 2022, offering bachelor's degrees. Here, the focus is on nurturing problem-solving abilities and fostering skills in competitive programming of the students.<br><br>

In a remarkable start to its competitive programming journey, the CSE Department secured the 69th spot in the BUET IUPC 2023, a national competition that draws participants from all over Bangladesh. The department boasts well-equipped computer and hardware labs, providing students with hands-on experience and cutting-edge tools.<br><br>

But that's not all. The CSE Department also encourages the exciting world of robotics, sparking the imaginations of budding engineers. Moreover, it consistently motivates students to develop practical systems that find real-world applications, bridging the gap between theory and practice.<br><br>

At Bangabandhu Sheikh Mujibur Rahman University, the CSE Department aims to create an inclusive and supportive community where students can pursue their academic dreams while contributing to the ever-evolving fields of computer science and engineering. Join this exciting journey and be a part of shaping the future!

					</p>
					

				</div>
				<div class="col-1"></div>
				<div class="col-md-4">
					<div class="section-header">
						<h2>Notices</h2>
					</div>
					<hr>
					

					<!--Notice1-->
					<div class="feature">
						
						<div class="feature-icon"><p><b>
							<!--Date-->
							27 Sep 2023
						</b></p></div>
						<div class="feature-content">
							<h4><a href=
								"assets/Files/midroutine.pdf"
								>
								Mid Term Examination Schedule, Session 2021-22
							</a></h4>
							<p>
								<!--Date-->
								27 Sep 2023
							</p><br>
						</div>
					</div>


					



					<!--Notice3-->
					<div class="feature">
						
						<div class="feature-icon"><p><b>
							<!--Date-->
							12 Aug 2023
						</b></p></div>
						<div class="feature-content">
							<h4><a href=
								"assets/Files/routineprevious.pdf"
								>
								Class Routine, 2nd Semester
							</a></h4>
							<p>
								<!--Date-->
								12 Aug 2023
							</p><br>
						</div>
					</div>

					<button type="button" class="btn btn-warning view-all">View all</button>
			
				</div>

			</div>
			<!-- row -->

		</div>
		<!-- container -->
	</div>
	<!-- /About -->







	<!-- Events -->
	<div id="courses" class="section">

		<!-- container -->
		<div class="container" style="margin-top: 30px;">

			<!-- row -->
			<div class="row">
				<div class="section-header text-center">
					<h2>News and Events</h2>
				</div>
			</div>
			<!-- /row -->

			<!-- courses -->
			<div id="courses-wrapper">

				<!-- row -->
				<div class="row">

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="assets/img/Event Photos/e1.jpeg" alt="">
								<i class="course-link-icon fa fa-link"></i>
							</a>
							<a class="course-title" href="#">Participation in CoU IUPC 2023</a>
							<div class="course-details">
								<span class="course-category">27 Aug 2023</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="assets/img/Event Photos/e2.JPG" alt="">
								<i class="course-link-icon fa fa-link"></i>
							</a>
							<a class="course-title" href="#">Participation in BUET IUPC 2023</a>
							<div class="course-details">
								<!--
								<span class="course-category">Web Development</span>
								<span class="course-price course-free">Free</span>
								-->
								<span class="course-category">27 Aug 2023</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="assets/img/Event Photos/e3.JPG" alt="">
								<i class="course-link-icon fa fa-link"></i>
							</a>
							<a class="course-title" href="#">BSMRU Intra University Programming Camp 2023</a>
							<div class="course-details">
								<span class="course-category">27 Aug 2023</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="assets/img/Event Photos/e4.JPG" alt="">
								<i class="course-link-icon fa fa-link"></i>
							</a>
							<a class="course-title" href="#">Inter Department Cricket Tournament 2023</a>
							<div class="course-details">
								<span class="course-category">27 Aug 2023</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

				</div>
				<!-- /row -->

			</div>
			<!-- /courses -->

			<div class="row">
				<div class="center-btn">
					<a class="main-button icon-button" href="#">View More</a>
				</div>
			</div>

		</div>
		<!-- container -->

	</div>
	<!-- /Courses -->


	
	<!-- preloader -->
	<div id='preloader'>
		<div class='preloader'></div>
	</div>
	<!-- /preloader -->

	<h1>Dev Test</h1>

	<!--Footer-->
	<footer>
		<div class="container">
			<h3>Address</h3>
			<p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d857.1010392673982!2d90.77435997671783!3d24.441498442197354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375693bff2e9b0c5%3A0x948309aeb6bfb1d5!2sBangabandhu%20Sheikh%20Mujibur%20Rahman%20University%2C%20Kishoreganj!5e0!3m2!1sen!2sbd!4v1696286973879!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</p>
		</div>
	</footer>


	<!--Bootstrap JS-->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

	<script>
		var nav = document.querySelector('header');
		window.addEventListener('scroll', function () {
			if (window.pageYOffset > 110) {
				nav.classList.remove('transparent-nav');
				nav.classList.add('scrolled-nav', 'shadow');
			}
			else {
				nav.classList.remove('scrolled-nav');
				nav.classList.add('transparent-nav');
			}
		});
	</script>

</body>

</html>