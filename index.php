<?php 
      
      include "config.php";
      // get all data from DB
      $query  = "SELECT * FROM portfolioSh.portfolio_IbrahimElankib";
      $result = mysqli_query($connection, $query);

      if(!$result) {
        die("DB query failed.");
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>DevFolio Bootstrap Portfolio Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: DevFolio - v4.7.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank">SHENKAR</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#about">About</a></li>
					<li><a class="nav-link scrollto" href="#services">Services</a></li>
					<li><a class="nav-link scrollto " href="#work">Work</a></li>
					<!-- <li><a class="nav-link scrollto " href="#blog">Blog</a></li> -->
					<li><a href="cv.html"><span>CV</span></a></li>
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<div id="hero" class="hero route stars">
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>
		<div class="overlay-itro"></div>
		<div class="hero-content display-table">
			<div class="table-cell">
				<div class="container">
					<!--<p class="display-6 color-d">Hello, world!</p>-->
					<h1 class="hero-title mb-4">Ibrahim Elankib</h1>
					<p class="hero-subtitle">I am a <span class="typed" data-typed-items="Student, Software Engineer, Developer"></span></p>
					<!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
				</div>
			</div>
		</div>
	</div><!-- End Hero Section -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="box-shadow-full">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div class="about-img">
												<img src="assets/img/profile.jpg"
													class="img-fluid rounded b-shadow-a" alt="">
											</div>
										</div>
										<div class="col-sm-6 col-md-7">
											<div class="about-info">
												<p><span class="title-s">Name: </span> <span>Ibrahim Elankib</span></p>
												<p><span class="title-s">Profile: </span> <span>Software engineering student</span></p>
												<p><span class="title-s">Email: </span> <span>abrahem.elnakeeb@stu.shenkar.ac.il</span>
												</p>
												<p><span class="title-s">Phone: </span> <span>+972 54-266882</span></p>
											</div>
										</div>
									</div>
									<div class="skill-mf">
										<p class="title-s">Skill</p>
										<span>HTML</span> <span class="pull-right">95%</span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 95%;"
												aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span>CSS3</span> <span class="pull-right">75%</span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 75%"
												aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span>PHP</span> <span class="pull-right">87%</span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 87%"
												aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span>JAVASCRIPT</span> <span class="pull-right">91%</span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 91%"
												aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span>C/C++</span> <span class="pull-right">98%</span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" style="width: 98%"
												aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="about-me pt-4 pt-md-0">
										<div class="title-box-2">
											<h5 class="title-left">
												About me
											</h5>
										</div>
										<p class="lead">
											I am a hard working, honest individual. I am a good timekeeper, always willing to learn new skills. I am friendly, helpful and polite, have a good sense of humour. I am able to work independently in busy environments and also within a team setting. I am outgoing and tactful, and able to listen effectively when solving problems.
										</p>
										<p class="lead">
											I am a flexible and experienced insurance administrator with excellent time management skills. I am a good communicator with proven inter personal skills and am used to working in a team whilst also being capable of using own initiative. I am skilled In dealing with problems in a resourceful manner and negotiating to achieve beneficial agreement. I am always enthusiastic to learn and undertake new challenges.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End About Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services-mf pt-5 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
							<h3 class="title-a">
								Professional
							</h3>
							<p class="subtitle-a">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
							</p>
							<div class="line-mf"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-briefcase"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">Web Design</h2>
								<!-- <p class="s-description text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem
									fugiat! Quia,
									provident vitae! Magni
									tempora perferendis eum non provident.
								</p> -->
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">Web Development</h2>
								<!-- <p class="s-description text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem
									fugiat! Quia,
									provident vitae! Magni
									tempora perferendis eum non provident.
								</p> -->
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-camera""></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">photographer</h2>
								<!-- <p class="s-description text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem
									fugiat! Quia,
									provident vitae! Magni
									tempora perferendis eum non provident.
								</p> -->
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section><!-- End Services Section -->

		<!-- ======= Counter Section ======= -->
		<div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/workstation.webp)">
			<div class="overlay-mf"></div>
			<div class="container position-relative">
				<div class="row">
					<div class="col-sm-3 col-lg-3">
						<div class="counter-box counter-box pt-4 pt-md-0">
							<div class="counter-ico">
								<span class="ico-circle"><i class="bi bi-check"></i></span>
							</div>
							<div class="counter-num">
								<p data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1"
									class="counter purecounter"></p>
								<span class="counter-text">WORKS COMPLETED</span>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="counter-box pt-4 pt-md-0">
							<div class="counter-ico">
								<span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
							</div>
							<div class="counter-num">
								<p data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
									class="counter purecounter"></p>
								<span class="counter-text">YEARS OF EXPERIENCE</span>
							</div>
						</div>
					</div>
					<!-- <div class="col-sm-3 col-lg-3">
						<div class="counter-box pt-4 pt-md-0">
							<div class="counter-ico">
								<span class="ico-circle"><i class="bi bi-people"></i></span>
							</div>
							<div class="counter-num">
								<p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1"
									class="counter purecounter"></p>
								<span class="counter-text">TOTAL CLIENTS</span>
							</div>
						</div>
					</div> -->
					<div class="col-sm-3 col-lg-3">
						<div class="counter-box pt-4 pt-md-0">
							<div class="counter-ico">
								<span class="ico-circle"><i class="bi bi-award"></i></span>
							</div>
							<div class="counter-num">
								<p data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
									class="counter purecounter"></p>
								<span class="counter-text">AWARD WON</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Counter Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="work" class="portfolio-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
							<h3 class="title-a">
								Portfolio
							</h3>
							<p class="subtitle-a">
								As part of the college and its courses, I try and create complex projects.
							</p>
							<div class="line-mf"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php while($row = mysqli_fetch_assoc($result)) : ?>
						<div class='col-md-4'>
							<div class="work-box">
								<a href="<?php echo $row["proj_img"];?>" data-gallery='portfolioGallery' class='portfolio-lightbox'>
									<div class='work-img'>
										<img src="<?php echo $row["proj_img"]; ?>" alt="" class='img-fluid'>
									</div>
								</a>
								<div class='work-content'>
									<div class='row'>
										<div class='col-sm-8'>
											<h2 class='w-title'><?php echo $row["proj_name"]; ?></h2>
											<div class="w-more">
												<span class="w-ctegory">"<?php echo $row["proj_title"]; ?>"</span> / <span class="w-date"><?php echo $row["proj_date"]; ?></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="w-like">
												<a href="<?php echo $row["proj_url"]; ?>"> <span
														class="bi bi-plus-circle"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section><!-- End Portfolio Section -->

		<!-- ======= Testimonials Section ======= -->
		<!-- <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpeg)">
			<div class="overlay-mf"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
							<div class="swiper-wrapper">

								<div class="swiper-slide">
									<div class="testimonial-box">
										<div class="author-test">
											<img src="assets/img/testimonial-2.jpg" alt=""
												class="rounded-circle b-shadow-a">
											<span class="author">Xavi Alonso</span>
										</div>
										<div class="content-test">
											<p class="description lead">
												Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem
												ipsum dolor sit amet,
												consectetur adipiscing elit.
											</p>
										</div>
									</div>
								</div> -->
								<!-- End testimonial item -->
<!-- 
								<div class="swiper-slide">
									<div class="testimonial-box">
										<div class="author-test">
											<img src="assets/img/testimonial-4.jpg" alt=""
												class="rounded-circle b-shadow-a">
											<span class="author">Marta Socrate</span>
										</div>
										<div class="content-test">
											<p class="description lead">
												Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem
												ipsum dolor sit amet,
												consectetur adipiscing elit.
											</p>
										</div>
									</div>
								</div> -->
								<!-- End testimonial item -->
							<!-- </div>
							<div class="swiper-pagination"></div>
						</div> -->

						<!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
					<!-- </div>
				</div>
			</div>
		</div> -->
		<!-- End Testimonials Section -->

		<!-- ======= Blog Section ======= -->
		<!-- <section id="blog" class="blog-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
							<h3 class="title-a">
								Blog
							</h3>
							<p class="subtitle-a">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
							</p>
							<div class="line-mf"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card card-blog">
							<div class="card-img">
								<a href="blog-single.html"><img src="assets/img/post-1.jpg" alt=""
										class="img-fluid"></a>
							</div>
							<div class="card-body">
								<div class="card-category-box">
									<div class="card-category">
										<h6 class="category">Travel</h6>
									</div>
								</div>
								<h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
								<p class="card-description">
									Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
									sapien massa, convallis
									a pellentesque nec,
									egestas non nisi.
								</p>
							</div>
							<div class="card-footer">
								<div class="post-author">
									<a href="#">
										<img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
										<span class="author">Morgan Freeman</span>
									</a>
								</div>
								<div class="post-date">
									<span class="bi bi-clock"></span> 10 min
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-blog">
							<div class="card-img">
								<a href="blog-single.html"><img src="assets/img/post-2.jpg" alt=""
										class="img-fluid"></a>
							</div>
							<div class="card-body">
								<div class="card-category-box">
									<div class="card-category">
										<h6 class="category">Web Design</h6>
									</div>
								</div>
								<h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
								<p class="card-description">
									Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
									sapien massa, convallis
									a pellentesque nec,
									egestas non nisi.
								</p>
							</div>
							<div class="card-footer">
								<div class="post-author">
									<a href="#">
										<img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
										<span class="author">Morgan Freeman</span>
									</a>
								</div>
								<div class="post-date">
									<span class="bi bi-clock"></span> 10 min
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-blog">
							<div class="card-img">
								<a href="blog-single.html"><img src="assets/img/post-3.jpg" alt=""
										class="img-fluid"></a>
							</div>
							<div class="card-body">
								<div class="card-category-box">
									<div class="card-category">
										<h6 class="category">Web Design</h6>
									</div>
								</div>
								<h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
								<p class="card-description">
									Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
									sapien massa, convallis
									a pellentesque nec,
									egestas non nisi.
								</p>
							</div>
							<div class="card-footer">
								<div class="post-author">
									<a href="#">
										<img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
										<span class="author">Morgan Freeman</span>
									</a>
								</div>
								<div class="post-date">
									<span class="bi bi-clock"></span> 10 min
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Blog Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
			style="background-image: url(assets/img/overlay-bg.jpeg)">
			<div class="overlay-mf"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="contact-mf">
							<div id="contact" class="box-shadow-full">
								<div class="row">
									<div class="col-md-6">
										<div class="title-box-2">
											<h5 class="title-left">
												Send a Message
											</h5>
										</div>
										<div>
											<form action="/forms/contact.php" method="post" role="form" 
												class="php-email-form">
												<div class="row">
													<div class="col-md-12 mb-3">
														<div class="form-group">
															<input type="text" name="name" class="form-control"
																id="name" placeholder="Your Name" required>
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<div class="form-group">
															<input type="email" class="form-control" name="email"
																id="email" placeholder="Your Email" required>
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<div class="form-group">
															<input type="text" class="form-control" name="subject"
																id="subject" placeholder="Subject" required>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" name="message" rows="5"
																placeholder="Message" required></textarea>
														</div>
													</div>
													<div class="col-md-12 text-center my-3">
														<div class="loading">Loading</div>
														<div class="error-message"></div>
														<div class="sent-message">Your message has been sent. Thank you!
														</div>
													</div>
													<div class="col-md-12 text-center">
														<button type="submit"
															class="button button-a button-big button-rouded">Send
															Message</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-md-6">
										<div class="title-box-2 pt-4 pt-md-0">
											<h5 class="title-left">
												Get in Touch
											</h5>
										</div>
										<div class="more-info">
											<ul class="list-ico">
												<li><span class="bi bi-geo-alt"></span> Lod, Isreal</li>
												<li><span class="bi bi-phone"></span> +972 542668852</li>
												<li><span class="bi bi-envelope"></span> abrahem.elnakeeb@stu.shenkar.ac.il</li>
											</ul>
										</div>
										<div class="socials">
											<ul>
												<li><a href="https://www.facebook.com/profile.php?id=100008312422111"><span class="ico-circle"><i
																class="bi bi-facebook"></i></span></a></li>
												<li><a href="https://www.instagram.com/avraham.bke/"><span class="ico-circle"><i
																class="bi bi-instagram"></i></span></a></li>
												<li><a href="https://github.com/abrahhem"><span class="ico-circle"><i
																class="bi bi-github"></i></span></a></li>
												<li><a href="https://www.linkedin.com/in/abrahem-elnkeeb-31a506232"><span class="ico-circle"><i
																class="bi bi-linkedin"></i></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="copyright-box">
						<div class="credits">
							<a href=https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה בשנקר</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End  Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/purecounter/purecounter.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/typed.js/typed.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>
<?php
//close DB connection
mysqli_free_result($result);
mysqli_close($connection);
?>
