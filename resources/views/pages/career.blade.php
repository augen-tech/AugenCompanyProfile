
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/material/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/material/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/material/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/material/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/material/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/material/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('public/material/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Tekindo - Career</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ route ('test.home')}}" class="standard-logo" data-dark-logo="{{ asset('public/material/tmg/logotekindo.png')}}"><img src="{{ asset('public/material/tmg/logotekindo.png')}}" alt="Canvas Logo"></a>
						<a href="{{ route ('test.home')}}" class="retina-logo" data-dark-logo="{{ asset('public/material/tmg/logotekindo@2x.png')}}"><img src="{{ asset('public/material/tmg/logotekindo@2x.png')}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="{{ route('test.home')}}" ><div>Home</div></a></li>
							<li><a href="{{ route('test.home')}}" data-href="#section-about"><div>About</div></a></li>
							<li><a href="{{ route('test.home')}}" data-href="#section-work"><div>Work</div></a></li>
							<li><a href="{{ route('test.home')}}" data-href="#section-team"><div>Team</div></a></li>
							<li><a href="{{ route('test.home')}}" data-href="#section-services"><div>Services</div></a></li>
							<li><a href="{{ route('test.blog')}}"><div>Blog</div></a></li>
							<li class="current"><a href="{{ route('test.career')}}"><div>Career</div></a></li>
							{{-- <li><a href="{{ route('test.home')}}" data-href="#section-testimonials" data-offset="60"><div>Testimonials</div></a></li> --}}
							<li><a href="{{ route('test.home')}}" data-href="#section-contact"><div>Contact</div></a></li>
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

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('public/material/images/about/parallax.jpg')}}'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Career Openings</h1>
				<span>Join our Fabulous Team of Intelligent Individuals</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Career</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_three_fifth nobottommargin">

						<div class="fancy-title title-bottom-border">
							<h3>Senior Python Developer</h3>
						</div>

						<p>We're looking for talented python develpoer. We're open for you to sign with us. Feel free to apply.</p>

						<div class="accordion accordion-bg clearfix">

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Requirements</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-ok"></i>B.Tech./ B.E / MCA degree in Computer Science, Engineering or a related stream.</li>
									<li><i class="icon-ok"></i>3+ years of software development experience.</li>
									<li><i class="icon-ok"></i>3+ years of Python / Java development projects experience.</li>
									<li><i class="icon-ok"></i>Minimum of 4 live project roll outs.</li>
									<li><i class="icon-ok"></i>Experience with third-party libraries and APIs.</li>
									<li><i class="icon-ok"></i>In depth understanding and experience  of either SDLC or PDLC.</li>
									<li><i class="icon-ok"></i>Good Communication Skills</li>
									<li><i class="icon-ok"></i>Team Player</li>
								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Expect from you?</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-plus-sign"></i>Design and build applications/ components using open source technology.</li>
									<li><i class="icon-plus-sign"></i>Taking complete ownership of the deliveries assigned.</li>
									<li><i class="icon-plus-sign"></i>Collaborate with cross-functional teams to define, design, and ship new features.</li>
									<li><i class="icon-plus-sign"></i>Work with outside data sources and API's.</li>
									<li><i class="icon-plus-sign"></i>Unit-test code for robustness, including edge cases, usability, and general reliability.</li>
									<li><i class="icon-plus-sign"></i>Work on bug fixing and improving application performance.</li>
								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What you've got?</div>
							<div class="acc_content clearfix">You'll be familiar with agile practices and have a highly technical background, comfortable discussing detailed technical aspects of system design and implementation, whilst remaining business driven. With 5+ years of systems analysis, technical analysis or business analysis experience, you'll have an expansive toolkit of communication techniques to enable shared, deep understanding of financial and technical concepts by diverse stakeholders with varying backgrounds and needs. In addition, you will have exposure to financial systems or accounting knowledge.</div>

						</div>

						<div class="divider divider-short"><i class="icon-star3"></i></div>

						<div class="fancy-title title-bottom-border">
							<h3>Design Analyst</h3>
						</div>

						<p>We're looking for talented design analyst. We're open for you to sign with us. Feel free to apply.</p>

						<div class="accordion accordion-bg clearfix">

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Requirements</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-ok"></i>B.Tech./ B.E / MCA degree in Computer Science, Engineering or a related stream.</li>
									<li><i class="icon-ok"></i>3+ years of software development experience.</li>
									<li><i class="icon-ok"></i>3+ years of Python / Java development projects experience.</li>
									<li><i class="icon-ok"></i>Minimum of 4 live project roll outs.</li>
									<li><i class="icon-ok"></i>Experience with third-party libraries and APIs.</li>
									<li><i class="icon-ok"></i>In depth understanding and experience  of either SDLC or PDLC.</li>
									<li><i class="icon-ok"></i>Good Communication Skills</li>
									<li><i class="icon-ok"></i>Team Player</li>
								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Expect from you?</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-plus-sign"></i>Design and build applications/ components using open source technology.</li>
									<li><i class="icon-plus-sign"></i>Taking complete ownership of the deliveries assigned.</li>
									<li><i class="icon-plus-sign"></i>Collaborate with cross-functional teams to define, design, and ship new features.</li>
									<li><i class="icon-plus-sign"></i>Work with outside data sources and API's.</li>
									<li><i class="icon-plus-sign"></i>Unit-test code for robustness, including edge cases, usability, and general reliability.</li>
									<li><i class="icon-plus-sign"></i>Work on bug fixing and improving application performance.</li>
								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What you've got?</div>
							<div class="acc_content clearfix">You'll be familiar with agile practices and have a highly technical background, comfortable discussing detailed technical aspects of system design and implementation, whilst remaining business driven. With 5+ years of systems analysis, technical analysis or business analysis experience, you'll have an expansive toolkit of communication techniques to enable shared, deep understanding of financial and technical concepts by diverse stakeholders with varying backgrounds and needs. In addition, you will have exposure to financial systems or accounting knowledge.</div>

						</div>

						<div class="divider divider-short"><i class="icon-star3"></i></div>

						

					</div>

					<div class="col_two_fifth nobottommargin col_last">

						<div id="job-apply" class="heading-block highlight-me">
							<h2>Apply Now</h2>
							<span>And we'll get back to you within 48 hours.</span>
						</div>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form action="include/jobs.php" id="template-jobform" name="template-jobform" method="post" role="form">

								<div class="form-process"></div>

								<div class="col_half">
									<label for="template-jobform-fname">First Name <small>*</small></label>
									<input type="text" id="template-jobform-fname" name="template-jobform-fname" value="" class="sm-form-control required" />
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-lname">Last Name <small>*</small></label>
									<input type="text" id="template-jobform-lname" name="template-jobform-lname" value="" class="sm-form-control required" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-jobform-email">Email <small>*</small></label>
									<input type="email" id="template-jobform-email" name="template-jobform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_half">
									<label for="template-jobform-age">Age <small>*</small></label>
									<input type="text" name="template-jobform-age" id="template-jobform-age" value="" size="22" tabindex="4" class="sm-form-control required" />
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-city">City <small>*</small></label>
									<input type="text" name="template-jobform-city" id="template-jobform-city" value="" size="22" tabindex="5" class="sm-form-control required" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-jobform-service">Position <small>*</small></label>
									<select name="template-jobform-position" id="template-jobform-position"  tabindex="9" class="sm-form-control required">
										<option value="">-- Select Position --</option>
										<option value="Senior Python Developer">Senior Python Developer</option>
										<option value="Design Analyst">Design Analyst</option>
									</select>
								</div>

								<div class="col_half">
									<label for="template-jobform-salary">Expected Salary</label>
									<input type="text" name="template-jobform-salary" id="template-jobform-salary" value="" size="22" tabindex="6" class="sm-form-control" />
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-time">Start Date</label>
									<input type="text" name="template-jobform-start" id="template-jobform-start" value="" size="22" tabindex="7" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-jobform-website">Website (if any)</label>
									<input type="text" name="template-jobform-website" id="template-jobform-website" value="" size="22" tabindex="8" class="sm-form-control" />
								</div>

								<div class="col_full">
									<label for="template-jobform-experience">Experience (optional)</label>
									<textarea name="template-jobform-experience" id="template-jobform-experience" rows="3" tabindex="10" class="sm-form-control"></textarea>
								</div>

								<div class="col_full">
									<label for="template-jobform-application">Application <small>*</small></label>
									<textarea name="template-jobform-application" id="template-jobform-application" rows="6" tabindex="11" class="sm-form-control required"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">Send Application</button>
								</div>

							</form>

						</div>

					</div>

				</div>

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
						<img src="{{ asset('public/material/tmg/footer-logo.png')}}" alt="Footer Logo" class="footer-logo">

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
	<script src="{{ asset('public/material/js/jquery.js')}}"></script>
	<script src="{{ asset('public/material/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('public/material/js/functions.js')}}"></script>

</body>
</html>