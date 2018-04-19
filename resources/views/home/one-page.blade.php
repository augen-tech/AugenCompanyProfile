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

	{{-- <!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('material/demos/business/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('material/demos/business/business.css')}}" type="text/css" />
	<!-- / --> --}}

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
	<title>Tekindo</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->

    <div id="wrapper" class="clearfix">
        <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>
        
        <!-- Header
		============================================= -->
		<header id="header" class="full-header page-section">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="{{ asset('material/tmg/logotekindo.png')}}"><img src="{{ asset('material/tmg/logotekindo.png')}}" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="{{ asset('material/tmg/logotekindo@2x.png')}}"><img src="{{ asset('material/tmg/logotekindo@2x.png')}}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                            <li class="current"><a href="#" data-href="#header"><div>Home</div></a></li>
                            <li><a href="#" data-href="#section-about"><div>About Us</div></a></li>
                            <li><a href="#" data-href="#section-service"><div>Services</div></a></li>
                            <li><a href="#" data-href="#section-portfolio"><div>Portfolio</div></a></li>
                            <li><a href="#" data-href="#"><div>Blog</div></a></li>
                            <li><a href="#" data-href="#"><div>Career</div></a></li>
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
    </div>

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


    