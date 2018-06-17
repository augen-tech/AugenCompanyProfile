<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/swiper.css')}}" type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('material/demos/business/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/demos/business/business.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('material/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('material/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('material/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href="{{ asset('material/demos/business/css/colors.css')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Ayaide</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header page-section">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('material/tmg/logoayaideblack.png')}}"><img src="{{ asset('material/tmg/logoayaideblack.png')}}" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('material/tmg/logoayaideblack2.png')}}"><img src="{{ asset('material/tmg/logoayaideblack2.png')}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li class="current"><a href="#" data-href="#header"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About Us</div></a></li>
							<li><a href="#" data-href="#section-service"><div>Services</div></a></li>
							{{-- <li><a href="#" data-href="#"><div>Career</div></a></li> --}}
							<li><a href="#" data-href="#section-portfolio"><div>Portfolio</div></a></li>
							<li><a href="#" data-href="#section-testimonial"><div>Testimonial</div></a></li>
							{{-- <li><a href="#" data-href="#"><div>Blog</div></a></li> --}}
							
						</ul>

						<!-- Top Search
						============================================= -->
						{{-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end --> --}}

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix" data-loop="true">

			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image: url('{{ asset('material/tmg/slider/1.jpg')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary nott">Creative Work.</h2>
									<p class="t600 font-primary d-none d-sm-block">Better way to solve your problem.</p>
									{{-- <a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a> --}}
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('{{ asset('material/tmg/slider/2.jpg')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 class="font-primary">Amazing Prospects.</h2>
									<p class="t600 font-primary d-none d-sm-block">Deliver good prospects to you.</p>
									{{-- <a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a> --}}
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('{{ asset('material/tmg/slider/3.jpg')}}'); background-size: cover">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 class="font-primary">Flexible Works.</h2>
									<p class="t600 font-primary d-none d-sm-block">Our Creativity is limitless.</p>
									{{-- <a href="#" class="button button-rounded button-large nott ls0 font-primary">Get Started</a> --}}
								</div>
							</div>
						</div>
					</div>
					<!-- Slider Arrows
					============================================= -->
					<div class="slider-arrow-left" class="nobg"><i class="icon-line-arrow-left"></i></div>
					<div class="slider-arrow-right" class="nobg"><i class="icon-line-arrow-right"></i></div>
				</div>

				<!-- Slider Mouse Icon
				============================================= -->
				<a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="{{ asset('material/demos/business/images/mouse.svg')}}" alt="" ></a>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding" style="z-index: 1;">

				<!-- About Us Sections
				============================================= -->

				<section id="section-about" class="page-section">

					<div class="container clearfix">
		
						<div class="heading-block center noborder" data-heading="T">
							<h3>Welcome to Ayaide</h3>
						</div>

						<div class="center col-lg-8 offset-lg-2 bottommargin">
							<h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight" data-speed="3500">Ayaide is a creative content development startup based technology. Dedicated to create world-class interactive experiences.</h3>
						</div>

						<div class="clear"></div>
		
						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box fbox-bg">
								<div class="fbox-media">
									<img src="{{ asset('material/demos/business/images/featured/1.jpg')}}" alt="Kenapa memilih kami?">
								</div>
								<div class="fbox-desc">
									<h3>Best Choice<span class="subtitle">Build your app with us</span></h3>
									<p>We bring new hope for you who always dream to build your own app. Mobile or web, we can make it nicely. </p>
								</div>
							</div>
						</div>
		
						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box fbox-bg">
								<div class="fbox-media">
									<img src="{{ asset('material/demos/business/images/featured/2.jpg')}}" alt="Kenapa memilih kami?">
								</div>
								<div class="fbox-desc">
									<h3>Lot of idea<span class="subtitle">Ask us what you want</span></h3>
									<p>Hard to decide? Ask us questions to define what kind of app do you want to build. Don't hesitate to ask what's better for you, we'll help.</p>
								</div>
							</div>
						</div>
		
						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box media-box fbox-bg">
								<div class="fbox-media">
									<img src="{{ asset('material/demos/business/images/featured/3.jpg')}}" alt="Kenapa memilih kami?">
								</div>
								<div class="fbox-desc">
									<h3>Good Team<span class="subtitle">Feel like us are your family</span></h3>
									<p>We believe that good communication is the one of the best ways to keep our teamwork swiftly. Deliver our team into The best software house in the world.</p>
								</div>
							</div>
						</div>
		
						<div class="clear"></div>
		
					</div>
					
				</section>

								
				<!-- How We Work
				============================================= -->
				<section id="section-service" class="page-section">
					<div class="section nobg clearfix">
						<div class="container clearfix">
							<div class="heading-block bottommargin-lg center noborder" data-heading="T">
								<h3 class="nott ls0">How We Work</h3>
							</div>
						</div>

						<!-- How We Work - Carousel
						============================================= -->
						<div id="oc-features" class="owl-carousel owl-carousel-full image-carousel carousel-widget">
							<div class="oc-item">
								<div class="row cleafix">
									<div class="col-xl-8">
										<img src="{{ asset('material/demos/business/images/carousel/3.jpg')}}" alt="">
									</div>
									<div class="col-xl-4" style="padding: 20px 0 0 20px;">
										<h3>Agile</h3>
										<p>We create good websites for our customers. With a new desain, we deliver information with a new way. Good choice for your site!</p>
										{{-- <a href="#" class="button-link">Read More</a> --}}
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="row cleafix">
									<div class="col-xl-8">
										<img src="{{ asset('material/demos/business/images/carousel/2.jpg')}}" alt="">
									</div>
									<div class="col-xl-4" style="padding: 20px 0 0 20px;">
										<h3>Design Thingking</h3>
										<p>Track your world at anytime you want! Feel like the rest of the world is in your hand. Mobile apps is the solution for all of you need. </p>
										{{-- <a href="#" class="button-link">Read More</a> --}}
									</div>
								</div>
							</div>
							<div class="oc-item">
								<div class="row cleafix">
									<div class="col-xl-8">
										<img src="{{ asset('material/demos/business/images/carousel/1.jpg')}}" alt="">
									</div>
									<div class="col-xl-4" style="padding: 20px 0 0 20px;">
										<h3>Tech Consultant</h3>
										<p>Have a problem about your project? We can help you to build your own application the way you want it.</p>
										{{-- <a href="#" class="button-link">Read More</a> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Carreer
				{{-- ============================================= -->
				<div class="section nopadding notopmargin nobg clearfix" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
					<div class="row common-height clearfix">
						<div class="col-lg-6 center col-padding" style="background: url('{{ asset('material/demos/business/images/sections/1.jpg')}}') center center no-repeat; background-size: cover;">
							<div>&nbsp;</div>
						</div>

						<div class="col-lg-6 col-padding">
							<div>
								<div style="position: relative;">
									<div class="heading-block noborder" data-heading="T">
										<h3 class="nott ls0">About Us</h3>
									</div>
								</div>

								<!-- About Us Featured Boxes
								============================================= -->
								<div class="row clearfix">
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-globe"></i></a>
											</div>
											<h3>Ready Worldwide</h3>
											<p>We are preparing to be the one of the best software house company in the world.</p>
										</div>
									</div>
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<h3>Fully Technically</h3>
											<p>Created by experienced developer across the world. Help you to bring new digital era.</p>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-document"></i></a>
											</div>
											<h3>Great Documentation</h3>
											<p>Make it easier to rebuild your project, or improvement your project quickly.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div> --}}

				<!-- Our Works
				============================================= -->
				<section id="section-portfolio" class="page-section">
					<div id="portfolio-container" class="section nobg nobottommargin clearfix">
						<div class="container clearfix" >
							<div class="heading-block center noborder" data-heading="T">
								<h3 class="nott ls0">Portfolio</h3>
							</div>

							<!-- Portfolio Filter
							============================================= -->
							<ul class="portfolio-filter style-2 center clearfix" data-container="#portfolio">

								<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
								<li><a href="#" data-filter=".pf-own">Own Project</a></li>
								<li><a href="#" data-filter=".pf-client">Client Project</a></li>
								<li><a href="#" data-filter=".pf-graphic">Graphic Design</a></li>
								<li><a href="#" data-filter=".pf-photo">Photography</a></li>
								<li><a href="#" data-filter=".pf-video">Video</a></li>

							</ul><!-- #portfolio-filter end -->
						</div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

							<article class="portfolio-item pf-own pf-graphic">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/5.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<div class="portfolio-desc">
											<h3><a >Light Path</a></h3>
											<span><a >Own Project</a>, <a href="#">Graphic Design</a></span>
										</div>
									</div>
								</div>
							</article>

							<article class="portfolio-item pf-own">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/2.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<div class="portfolio-desc">
											<h3><a >Snatch Steal</a></h3>
											<span><a >Own Project</a></span>
										</div>
									</div>
								</div>
							</article>

							<article class="portfolio-item pf-client">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/16.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<div class="portfolio-desc">
											<h3><a >Bermain dan Belajar Buah-Sayur</a></h3>
											<span><a >Client</a></span>
										</div>
									</div>
								</div>
							</article>

							<article class="portfolio-item pf-own pf-graphic">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/24.jpg')}}" alt="Open Imagination">
									</a>
									{{-- <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#"><img src="{{ asset('material/tmg/portfolio/4.jpg')}}" alt="Open Imagination"></a></div>
												<div class="slide"><a href="#"><img src="{{ asset('material/tmg/portfolio/5.jpg')}}" alt="Open Imagination"></a></div>
											</div>
										</div>
									</div> --}}
									<div class="portfolio-overlay">
									{{-- <div class="portfolio-overlay" data-lightbox="gallery"> --}}
										<div class="portfolio-desc">
											<h3><a >Street Watcher Poster</a></h3>
											<span><a >Own Project</a>, <a href="#">Graphic Designer</a></span>
										</div>
									</div>
								</div>
							</article>

							<article class="portfolio-item pf-own pf-video">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/39.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<div class="portfolio-desc">
											<h3><a >To-Do Diet</a></h3>
											<span><a >Own Project</a>, <a href="#">Video</a></span>
										</div>
									</div>
								</div>
							</article>						

							<article class="portfolio-item pf-own">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/26.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<div class="portfolio-desc">
											<h3><a >To-Do Diet App</a></h3>
											<span><a >Own Project</a></span>
										</div>
									</div>
								</div>
							</article>

							<article class="portfolio-item pf-client">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/tmg/portfolio/12.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<div class="portfolio-desc">
											<h3><a >Kiddo Puzzle Game</a></h3>
											<span><a >Client Project</a></span>
										</div>
									</div>
								</div>
							</article>

						</div><!-- #portfolio end -->
					</div>
				</section>
				
				<!-- Video Sections
				============================================= -->
				<div class="section nobg notopmargin clearfix">
					<div class="container clearfix">

						
						<div class="heading-block bottommargin-lg center noborder" data-heading="T">
							<h3 class="nott ls0">Services</h3>
						</div>
						

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{ asset('material/images/services/s1.png')}}" alt=""></a>
											</div>
								<h3 class="nott t600 ls0">Software Development</h3>
								<p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/images/services/s2.png')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Game Development</h3>
								<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/images/services/s3.png')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">AR/VR Development</h3>
								<p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/images/services/s4.png')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">IT Camp</h3>
								<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/images/services/s5.png')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Multimedia & Graphic Design</h3>
								<p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('material/images/services/s6.png')}}" alt=""></a>
								</div>
								<h3 class="nott t600 ls0">Technology Consultancy</h3>
								<p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
							</div>
						</div>

						<div class="clear"></div>						

						<div class="clear line"></div>

						
						<div class="row topmargin-lg clearfix">
							<div class="col-lg-6 nopadding">
								<!-- Youtube Video Link
								============================================= -->
								<a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
									<img src="{{ asset('material/demos/business/images/sections/video.jpg')}}" alt="Youtube Video" class="image_fade" style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
									<i class="icon-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
								</a>
							</div>
							<!-- Video Texts
							============================================= -->
							<div class="col-lg-6" style="padding-left: 60px;">
								<div class="heading-block topmargin-sm bottommargin-sm noborder">
									<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A small Video from us.</h3>
								</div>
								<p class="t400">Interactively facilitate.<br>Tactical systems with compelling materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
								<h5 class="nobottommargin t600">&middot; Ayaide Video. <a href="#"><img src="demos/business/images/tf-logo.png" height="18" alt="" style="margin-left: 4px"></a></h5>
								{{-- <a href="#" class="button-link bottommargin">Read More</a> --}}
							</div>
						</div>
					</div>
				</div> 

				<!-- Team Content
				============================================= -->
				<section id="content">
					<div class="content-wrap">
						<div class="container clearfix">
							<div class="fancy-title title-border title-center">
								<h3>Our Team</h3>
							</div>
																	
							<div id="oc-team" class="owl-carousel team-carousel bottommargin carousel-widget" data-margin="30" data-pagi="false" data-items-sm="2" data-items-md="2" data-items-xl="5">
			
								<div class="oc-item">
									<div class="team">
										<div class="team-image">
											<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
										</div>
										<div class="team-desc">
											<div class="team-title"><h4>Januar Elsan</h4><span>CEO</span></div>
											<a target="_blank" href="https://www.facebook.com/januartriandy.nurelsan" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a target="_blank" href="https://twitter.com/JanuarTriandy" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a target="_blank" href="https://www.instagram.com/januarelsan/" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-instagram"></i>
												<i class="icon-instagram"></i>
											</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="team">
										<div class="team-image">
											<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
										</div>
										<div class="team-desc">
											<div class="team-title"><h4>Ashari Fachrizal</h4><span>CTO</span></div>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-instagram"></i>
												<i class="icon-instagram"></i>
											</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="team">
										<div class="team-image">
											<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
										</div>
										<div class="team-desc">
											<div class="team-title"><h4>Zidni Fahmi</h4><span>Web Developer</span></div>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-instagram"></i>
												<i class="icon-instagram"></i>
											</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="team">
										<div class="team-image">
											<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
										</div>
										<div class="team-desc">
											<div class="team-title"><h4>Akbar Maulana</h4><span>Web Developer</span></div>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-instagram"></i>
												<i class="icon-instagram"></i>
											</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="team">
										<div class="team-image">
											<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
										</div>
										<div class="team-desc">
											<div class="team-title"><h4>Rafi Al Farizi</h4><span>Web Developer</span></div>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-instagram"></i>
												<i class="icon-instagram"></i>
											</a>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="team">
										<div class="team-image">
											<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
										</div>
										<div class="team-desc">
											<div class="team-title"><h4>Ervira Wulandari</h4><span>Media Content Creator</span></div>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a target="_blank" href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-instagram"></i>
												<i class="icon-instagram"></i>
											</a>
										</div>
									</div>
								</div>
									
			
							</div>
				
							<div class="clear"></div>							
						</div>

					</div>
				</section><!-- #content end -->

				<!-- Client Sections
				============================================= -->

				<div class="container clearfix">

						<div class="clear"></div>
	
						<div class="heading-block center">
							<h4>Our Clients</h4>
						</div>
	
						<ul class="clients-grid grid-6 nobottommargin clearfix">
							<li><a href="#"><img src="{{ asset('material/images/clients/KPK.png')}}" alt="Clients"></a></li>
							<li><a href="#"><img src="{{ asset('material/images/clients/Telkom-University.png')}}" alt="Clients"></a></li>
                            <li><a href="#"><img src="{{ asset('material/images/clients/UPI.png')}}" alt="Clients"></a></li>
                            <li><a href="#"><img src="{{ asset('material/images/clients/Radio-Angkasa.png')}}" alt="Clients"></a></li>
                            <li><a href="#"><img src="{{ asset('material/images/clients/BUMIMANIRA.png')}}" alt="Clients"></a></li>
                            <li><a href="#"><img src="{{ asset('material/images/clients/gubugdogja.png')}}" alt="Clients"></a></li>
                            <li><a href="#"><img src="{{ asset('material/images/clients/pilarjuanda.png')}}" alt="Clients"></a></li>
							
						</ul>
	
					</div>
	

				<!-- Testimonial Sections
				============================================= -->
				<section id="section-testimonial" class="page-section">
					<div class="section parallax nobottommargin notopborder clearfix" style="background-image: url('{{ asset('material/demos/business/images/sections/2.jpg')}}'); background-size: cover;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
						<div class="container clearfix">

							<div class="row cleafix">
								<div class="col-md-6 dark" style="padding-left: 60px;">
									<div class="heading-block bottommargin-sm noborder">
										<h3 class="nott" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">Testimonials from Our Customers</h3>
									</div>
									<p>Here are several reviews from our customers! what they said, what they felt. It's amazing to work with you guys. We always do our best to finish our projects.</p>
									{{-- <a href="#" class="button-link noleftmargin">Read More</a> --}}
								</div>

								<div class="topmargin d-block d-lg-none d-xl-block"></div>

								<!-- Testimonials slider
								============================================= -->
								<div class="col-md-5 offset-md-1">
									<h4 class="dark">Testimonials Scroller</h4>
									<div class="fslider testimonial" data-animation="slide" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide">
													<div class="testimonial noborder noshadow">
														<div class="testi-content">
															<p class="bottommargin-sm font-primary">Proses pengerjaan aplikasi nya cepat dan tepat waktu. Sesuai dengan keinginan klien dan ketika aplikasi dijalankan tidak ada kendala dan lancar. Ayaide penyelamat DEADLINE KU!</p>
															<div class="testi-meta">
																Lola Astri Nadita
																<span>Education Application Project</span>
																<div class="testimonials-rating">
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="slide">
													<div class="testimonial noborder noshadow">
														<div class="testi-content">
															<p class="bottommargin-sm font-primary">Pengerjaan project dengan Ayaide bisa dibilang sangat cepat. Pada awalnya saya mengira pengerjaan akan memakan waktu 3 minggu, karena sebelumnya saya pernah meminta project serupa ke orang lain memakan waktu hampir 1 bulan. Pengerjaan project dengan Ayaide hanya memakan waktu 1 minggu. Sangat cepat!.</p>
															<div class="testi-meta">
																Hafidz Noor Fauzi
																<span>Game Project</span>
																<div class="testimonials-rating">
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																</div>
															</div>
														</div>
													</div>
												</div>

												{{-- <div class="slide">
													<div class="testimonial noborder noshadow">
														<div class="testi-content">
															<p class="bottommargin-sm font-primary">Bang Januar itu punya jiwa organisasi dan kepemimpinan, yang pasti tau cara untuk ngatur dan ngasih semangat timnya, dan tau banget apa yang harus dilakuin dalam jobdesknya dengan maksimal.</p>
															<div class="testi-meta">
																Asya Leztizia
																<span>KnocKnock Team Member - Graphic Designer</span>
																<div class="testimonials-rating">
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																</div>
															</div>
														</div>
													</div>
												</div> --}}

												<div class="slide">
													<div class="testimonial noborder noshadow">
														<div class="testi-content">
															<p class="bottommargin-sm font-primary">Ayaide merupakan rekan kerja yang ambisius, bekerja dengan efisien dan cerdas, permintaan bisa langsung dipenuhi dengan kemampuan teknis dan komunikasinya. Waktu pengerjaan? Bisa ditunggu ditempat.</p>
															<div class="testi-meta">
																Muhammad Hilmy A.N.
																<span>KnocKnock Team Member - UI/UX Designer</span>
																<div class="testimonials-rating">
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																</div>
															</div>
														</div>
													</div>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>

				

			</div>

		</section>
		<!-- #content end -->

		<!-- 5 : #section-contact -->																					
		<section id="section-contact" class="page-section section dark nomargin" style="background: url(' {{ asset('material/demos/business/images/sections/3.jpg')}}') no-repeat center center; background-size: cover;">

			<div class="container clearfix">

				<div class="row">
					<div class="col-lg-6 offset-lg-6">
						<div class="heading-block nobottomborder">
							<span class="before-heading color">Connect with Us</span>
							<h3>Get In Touch</h3>
						</div>
						<div class="row">
							<div class="col-lg-15 center">
								{{-- <p class="tleft text-muted"><strong>Headquarters</strong></p>
								<p class="tleft text-muted">Jl. Terusan Buah Batu, Gang Pak Uweng No. 7, Ds. Lengkong Bojong Soang Kab. Bandung, Jawa Barat 40287 Indonesia</p> --}}
								<p class="tleft text-muted"></p> 								
								<p class="tleft text-muted"><strong>Ready to Collaborate?</strong> <br>Give us a call or send an email and We will get back to you as soon as possible!</p> 								
								<p class="tleft text-muted"><strong>Phone: </strong> +62 81242652956 <br> <strong>Email: </strong> halo@ayaide.com</p>

							</div>
							{{-- <div class="col-lg-6 center">
								
								<p class="tleft text-muted"></p>
							</div> --}}
							{{-- <div class="col-lg-12">

								<div class="contact-widget">

									<div class="contact-form-result"></div>

									<form class="nobottommargin row" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

										<div class="form-process"></div>

										<div class="col-lg-12">
											<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" placeholder="Full Name*" />
										</div>

										<div class="col-lg-12">
											<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" placeholder="Email Address*" />
										</div>

										<div class="col-lg-12">
											<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"placeholder="Message*" ></textarea>
										</div>

										<div class="col-lg-12 hidden">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col-lg-12">
											<button class="button button-border button-rounded button-black fright" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										</div>

									</form>
								</div>

							</div> --}}
						</div>
					</div>
				</div>

			</div>

		</section> <!-- .section end -->






		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half" style="color: rgb(31, 31, 31)">
						<img src="{{asset('material/tmg/footer-logo.png')}}" alt="Footer Logo" class="footer-logo">
						

						Copyrights &copy; 2018 All Rights Reserved by Ayaide
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							
							{{-- <a href="#">Home</a>/
							<a href="#">About Us</a>/
							<a href="#">Services</a>/
							<a href="#">Portfolio</a>/
							<a href="#">Testimonial</a> --}}
						</div>
						<div class="fright clearfix">
							
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('material/js/jquery.js')}}"></script>
	<script src="{{ asset('material/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('material/js/functions.js')}}"></script>

	<script>
		// Owl Carousel Scripts
		$('#oc-features').owlCarousel({
			items: 1,
			margin: 60,
		    nav: true,
		    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
		    dots: false,
		    stagePadding: 30,
		    responsive:{
				768: { items: 2 },
				1200: { stagePadding: 200 }
			},
		});
	</script>

	
	

</body>
</html>