
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('material/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Tekindo</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		<section id="slider" class="slider-element slider-parallax full-screen with-header swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('{{ asset('material/images/slider/swiper/1.jpg')}}');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome to Tekindo</h2>
									<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Projects. Anything you can do in here.</p>
								</div>
							</div>
						</div>
						
						<div class="swiper-slide" style="background-image: url('{{ asset('material/images/slider/swiper/3.jpg')}}'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>

						<div class="swiper-slide" style="background-image: url('{{ asset('material/images/slider/swiper/5.jpg')}}'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Professional Team</h2>
									<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Work with professional team to reach your goals. No doubt with our works.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>

		</section>

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ route ('test.home')}}" class="standard-logo" data-dark-logo="{{ asset('material/tmg/logotekindo.png')}}"><img src="{{ asset('material/tmg/logotekindo.png')}}" alt="Canvas Logo"></a>
						<a href="{{ route ('test.home')}}" class="retina-logo" data-dark-logo="{{ asset('material/tmg/logotekindo@2x.png')}}"><img src="{{ asset('material/tmg/logotekindo@2x.png')}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li><a href="#" data-href="#home"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-work"><div>Work</div></a></li>
							{{-- <li><a href="#" data-href="#section-team"><div>Team</div></a></li> --}}
							<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
							<li><a href="{{ route('test.blog')}}"><div>Blog</div></a></li>
							<li><a href="{{ route('test.career')}}"><div>Career</div></a></li>
							{{-- <li><a href="#" data-href="#section-testimonials" data-offset="60"><div>Testimonials</div></a></li> --}}
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<section id="section-about" class="page-section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>We are <span>Tekindo</span></h2>
							<span>We are Creative Content Development Startup based technology. Dedicated to create world-class interactive experiences.</span>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="{{ asset('material/images/services/1.jpg')}}" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>History of Us.<span class="subtitle">Know with Us closer.</span></h3>
									<p>Created with passion and love. We come to you to bring new experiences in digital era. We have developed many projects with our clients since 2016</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="{{ asset('material/images/services/2.jpg')}}" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Vision &amp; Mission.<span class="subtitle">To solve your IT problems.</span></h3>
									<p>Our vision mission is to develop and manage good application and bring the technology directly to your hand. </p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="{{ asset('material/images/services/3.jpg')}}" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
									<p>We create software based on our client's want. There are more features that we can do to you. We're connecting you to new digital era.</p>
								</div>
							</div>
						</div>

						<div class="clear"></div>

					</div>

				</section>

				<section id="section-work" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2>Our Works</h2>
						<span>Some of the Awesome Projects we've worked on.</span>
					</div>

					<div class="container clearfix center">

						<!-- Portfolio Items
						============================================= 
						own-project, client-project, design, photography, video
						-->
						<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

							<!-- single photo -->
							<article class="portfolio-item pf-own-project">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/2.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/2.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Snatch Steal</a></h3>
									<span><a href="#">Own Project</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-own-project pf-design">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/5.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/5.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Light Path</a></h3>
									<span><a href="#">Own Project</a>, <a href="#">Design</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-own-project pf-design">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/6.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/6.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Indonesia Space Missions</a></h3>
									<span><a href="#">Own Project</a>, <a href="#">Design</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-own-project">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/11.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/11.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Cultural Last Frontier</a></h3>
									<span><a href="#">Own Project</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-client-project">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/16.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/16.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bermain Buah dan Sayur</a></h3>
									<span><a href="#">Client Project</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-client-project">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/15.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/15.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Tulung</a></h3>
									<span><a href="#">Client Project</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-own-project pf-design">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/21.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/21.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Buah Batu ID Card</a></h3>
									<span><a href="#">Own Project</a>, <a href="#">Design</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-client-project">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="{{ asset('material/tmg/portfolio/14.jpg')}}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="{{ asset('material/tmg/portfolio/full/14.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Kepo</a></h3>
									<span><a href="#">Client Project</a></span>
								</div>
							</article>

							<!-- video -->
							{{-- <article class="portfolio-item pf-graphics pf-uielements">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/images/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay">
										<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
							</article> --}}

							<!-- multiple photos -->
							{{-- <article class="portfolio-item pf-icons pf-illustrations">
								<div class="portfolio-image">
									<a href="#">
										<img src="{{ asset('material/images/portfolio/4/4.jpg')}}" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="{{ asset('material/images/portfolio/full/4.jpg')}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="{{ asset('material/images/portfolio/full/4-1.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</article> --}}

						</div><!-- #portfolio end -->

					</div>

				</section>

				{{-- team section --}}
				{{-- <section id="section-team" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2>Our Team</h2>
						<span>People who have contributed enormously to our Company.</span>
					</div>

					<div class="container clearfix">
						
						<div class="row">
							<div class="col-lg-6 bottommargin">

								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="{{ asset('material/images/team/3.jpg')}}" alt="John Doe">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
										<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia.</div>
										<a href="#" class="social-icon si-rounded si-small si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>

							</div>

							<div class="col-lg-6 bottommargin">

								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="{{ asset('material/images/team/4.jpg')}}" alt="Nix Maxwell">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Nix Maxwell</h4><span>Co-Founder</span></div>
										<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia.</div>
										<a href="#" class="social-icon si-rounded si-small si-forrst">
											<i class="icon-forrst"></i>
											<i class="icon-forrst"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-skype">
											<i class="icon-skype"></i>
											<i class="icon-skype"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-flickr">
											<i class="icon-flickr"></i>
											<i class="icon-flickr"></i>
										</a>
									</div>
								</div>

							</div>

							<div class="w-100"></div>

							<div class="col-lg-6 bottommargin">

								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="{{ asset('material/images/team/2.jpg')}}" alt="Josh Clark">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Josh Clark</h4><span>Developer</span></div>
										<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia.</div>
										<a href="#" class="social-icon si-rounded si-small si-dribbble">
											<i class="icon-dribbble"></i>
											<i class="icon-dribbble"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-github">
											<i class="icon-github"></i>
											<i class="icon-github"></i>
										</a>
									</div>
								</div>

							</div>

							<div class="col-lg-6 bottommargin">

								<div class="team team-list clearfix">
									<div class="team-image">
										<img src="{{ asset('material/images/team/8.jpg')}}" alt="Mary Jane">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Mary Jane</h4><span>Support</span></div>
										<div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat assumenda similique unde mollitia.</div>
										<a href="#" class="social-icon si-rounded si-small si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-linkedin">
											<i class="icon-linkedin"></i>
											<i class="icon-linkedin"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
									</div>
								</div>

							</div>
						</div>

						<div class="clear"></div>

						<div class="fancy-title title-border title-center topmargin-sm">
							<h4>Skills we are Perfect in</h4>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<div class="rounded-skill" data-color="#D01C1C" data-size="150" data-percent="90" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="90" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5>HTML5</h5>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<div class="rounded-skill" data-color="#1770A4" data-size="150" data-percent="75" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="75" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5>CSS3</h5>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<div class="rounded-skill" data-color="#6A89AA" data-size="150" data-percent="85" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5>PHP</h5>
						</div>

						<div class="col_one_fourth nobottommargin center col_last">
							<div class="rounded-skill" data-color="#248673" data-size="150" data-percent="80" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="80" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5>jQuery</h5>
						</div>

					</div>

					<div class="section parallax" style="background-image: url('images/parallax/3.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
						<div class="heading-block center nobottomborder nobottommargin">
							<h2>"Everything is designed, but some things are designed well."</h2>
						</div>
					</div>

				</section> --}}

				<section id="section-services" class="page-section topmargin-lg">

					<div class="heading-block center bottommargin-lg">
						<h2>Services</h2>
						<span>List of some features included in Canvas.</span>
					</div>

					<div class="container clearfix">

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-note"></i></a>
								</div>
								<h3>Technology Consultancy</h3>
								<p>For you who felt hard and stuck when develop your IT project. You can consultate your problem with Us.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Multimedia &amp; Graphic Design</h3>
								<p>You need a great design for your application? Or for your media project? Contact Us!</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-book2"></i></a>
								</div>
								<h3>IT Camp</h3>
								<p>Want to study how to be developer? We're ready for sharing our sources to you.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-video"></i></a>
								</div>
								<h3>AR/VR App Development</h3>
								<p>Support your AR/VR projects and develop it for you. We help you to see other world through digital.</p>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<a href="#"><i class="icon-play"></i></a>
								</div>
								<h3>Game Development</h3>
								<p>You want to create your own games? We know how to build game nicely and bring you to new experiences.</p>
							</div>
						</div>

						<div class="col_one_third  nobottommargin col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1000">
								<div class="fbox-icon">
									<a href="#"><i class="icon-bulb"></i></a>
								</div>
								<h3>Software Development</h3>
								<p>Have trouble to develop your website, mobile app and desktop? We can help you to solve your problem.</p>
							</div>
						</div>

						{{-- <div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-video"></i></a>
								</div>
								<h3>Website Development</h3>
								<p>We create good websites for our customers. With a new desain, we deliver information with a new way. Good choice for your site!</p>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<a href="#"><i class="icon-play"></i></a>
								</div>
								<h3>Mobile Development</h3>
								<p>Track your world at anytime you want! Feel like the rest of the world is in your hand. Mobile apps is the solution for all of you need. </p>
							</div>
						</div>

						<div class="col_one_third  nobottommargin col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1000">
								<div class="fbox-icon">
									<a href="#"><i class="icon-bulb"></i></a>
								</div>
								<h3>SEO</h3>
								<p>Have a problem about your project? We can help you to build your own application the way you want it.</p>
							</div>
						</div> --}}



						<div class="clear"></div>

					</div>

					<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>

				</section>

				{{-- <section id="section-testimonials" class="page-section section parallax dark" style="background-image: url('{{ asset('material/images/about/me-parallax.jpg')}}'); padding: 200px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

					<div class="container clearfix">

						<div class="col_half nobottommargin">&nbsp;</div>

						<div class="col_half nobottommargin col_last">

							<div class="heading-block center">
								<h4>What Clients say?</h4>
								<span>Some of our Clients love us &amp; so we do!</span>
							</div>

							<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
											<div class="testi-content">
												<p>Proses pengerjaan aplikasi nya cepat dan tepat waktu. Sesuai dengan keinginan klien dan ketika aplikasi dijalankan tidak ada kendala dan lancar. Tekindo penyelamat DEADLINE KU!</p>
												<div class="testi-meta">
													Lola Astri Nadita
													<span>Education Application Project</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-content">
												<p>Pengerjaan project dengan Tekindo bisa dibilang sangat cepat. Pada awalnya saya mengira pengerjaan akan memakan waktu 3 minggu, karena sebelumnya saya pernah meminta project serupa ke orang lain memakan waktu hampir 1 bulan. Pengerjaan project dengan Tekindo hanya memakan waktu 1 minggu. Sangat cepat!.</p>
												<div class="testi-meta">
													Hafidz Noor Fauzi
													<span>Game Project</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-content">
												<p>Tekindo merupakan rekan kerja yang ambisius, bekerja dengan efisien dan cerdas, permintaan bisa langsung dipenuhi dengan kemampuan teknis dan komunikasinya. Waktu pengerjaan? Bisa ditunggu ditempat.</p>
												<div class="testi-meta">
													Muhammad Hilmy A.N.
													<span>KnocKnock Team Member - UI/UX Designer</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</section> --}}

				<section id="section-contact" class="page-section">

					<div class="heading-block title-center">
						<h2>Get in Touch with us</h2>
						<span>Still have Questions? Contact Us using the Form below.</span>
					</div>

					<div class="container clearfix">

						<!-- Contact Form
						============================================= -->
						<div class="col_half">

							<div class="fancy-title title-dotted-border">
								<h3>Send us an Email</h3>
							</div>

							<div class="contact-widget">

								<div class="contact-form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Technology Consultancy">Technology Consultancy</option>
										<option value="Multimedia Graphic Design">Multimedia &amp; Graphic Design</option>
										<option value="IT Camp">IT Camp</option>
										<option value="AR/VR App Development">AR/VR App Development</option>
										<option value="Game Development">Game Development</option>
										<option value="Software Development">Software Development</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

							</form>

						</div>


						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col_half col_last">

							<section id="google-map" class="gmap" style="height: 410px;"></section>


						</div><!-- Google Map End -->

						<!-- Contact Info
						============================================= -->
						<div class="col_full nobottommargin clearfix">

							<div class="col_one_fourth">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-map-marker2"></i></a>
									</div>
									<h3>Our Headquarters<span class="subtitle">Bandung, Indonesia</span></h3>
								</div>
							</div>

							<div class="col_one_fourth">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-phone3"></i></a>
									</div>
									<h3>Speak to Us<span class="subtitle">(62) 456 7890</span></h3>
								</div>
							</div>

							<div class="col_one_fourth">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-skype2"></i></a>
									</div>
									<h3>Make a Video Call<span class="subtitle">AyaideTech</span></h3>
								</div>
							</div>

							<div class="col_one_fourth col_last">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-instagram2"></i></a>
									</div>
									<h3>Follow on Ig<span class="subtitle">567 Followers</span></h3>
								</div>
							</div>

						</div><!-- Contact Info End -->

					</div>

				</section>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="{{ asset('material/tmg/footer-logo.png')}}" alt="Footer Logo" class="footer-logo">

						Copyrights &copy; 2018 All Rights Reserved by Tekindo
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Work</a>/<a href="#">Services</a>/<a href="#">Blog</a>/<a href="#">Career</a>/<a href="#">Testimonials</a>/<a href="#">Contact</a>
						</div>
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


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

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script src="{{ asset('material/js/jquery.gmap.js')}}"></script>

	<script>

		jQuery('#google-map').gMap({

			address: 'Bandung, Indonesia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Bandung, Indonesia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>

</body>
</html>