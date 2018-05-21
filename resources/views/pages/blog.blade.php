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
	<link rel="stylesheet" href="{{ asset('material/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('material/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Tekindo - Blog</title>

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
						<a href="{{ route ('test.home')}}" class="standard-logo" data-dark-logo="{{ asset('material/tmg/logotekindo.png')}}"><img src="{{ asset('material/tmg/logotekindo.png')}}" alt="Canvas Logo"></a>
						<a href="{{ route ('test.home')}}" class="retina-logo" data-dark-logo="{{ asset('material/tmg/logotekindo@2x.png')}}"><img src="{{ asset('material/tmg/logotekindo@2x.png')}}" alt="Canvas Logo"></a>
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
							<li class="current"><a href="{{ route('test.blog')}}"><div>Blog</div></a></li>
							<li><a href="{{ route('test.career')}}"><div>Career</div></a></li>
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
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('material/images/about/parallax.jpg')}}'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Blog</h1>
				<span>Deliver our news to you</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts">

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="{{ asset('material/tmg/blog/1.jpg')}}" data-lightbox="image"><img class="image_fade" src="{{ asset('material/tmg/blog/1.jpg')}}" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">Framework PHP yang Mana yang Harus Saya Gunakan</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th February 2018</li>
								<li><a href="#"><i class="icon-user"></i> admin</a></li>
								<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 5 Comments</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>PHP adalaha bahasa pemrograman script server-side yang di desain untuk pengembangan web. Rasmus Lerdorf, mengembangkan PHP pada tahun 1995 dengan official site: http://www.php.net.  Cukup untuk pengantar sejarahnya, sebab jika kamu sudah tertarik untuk menggunakan Framework maka pasti kamu telah memiliki basic bahasa pemrogramannya, tapi jika belum sebaiknya kamu belajar dulu fundamental dari bahasa pemrograman tersebut, oh iya dan jangan lupakan sejarah kata bung karno.</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="{{ asset('material/tmg/blog/3.png')}}" data-lightbox="image"><img class="image_fade" src="{{ asset('material/tmg/blog/3.png')}}" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">Cara Meng-<i>install</i> Node.js</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 20th March 2018</li>
								<li><a href="#"><i class="icon-user"></i> admin</a></li>
								<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Ada yang belum tau Node.js? Ada yang sudah tau JavaScript? Kalo selama ini kita mengenal JavaScript sebagai client side scripting, sekarang JavaScript sudah ada untuk server side scriptingnya juga. Dialah Node.js. Artinya sekarang Kamu bisa membangun layanan web menggunakan bahasa JavaScript.</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					<div class="row mb-3">
						<div class="col-12">
							<a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
							<a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
						</div>
					</div>
				<!-- .pager end -->

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

</body>
</html>

				