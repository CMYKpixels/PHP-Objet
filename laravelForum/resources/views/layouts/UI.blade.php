<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Blog Experiment</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <!-- Styles -->
    <!-- Bootstrap CSS -->
{{--<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">--}}
<!-- Pretty Photo CSS -->
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Parallax slider -->
		<link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <!-- Flexslider -->
		<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <!-- Font awesome CSS -->
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
		<link href="{{asset('css/lblue.css')}}" rel="stylesheet">

    <!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/favicon/favicon.png')}}">

    {{--     <link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>

{{--@include('layouts.header')--}}

<body id="app-UI">
<!-- Header Starts -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
					<div class="logo">
					  <h1><a href="{{ url('/') }}">Metro <span class="color">Mania</span></a></h1>
					  <div class="hmeta">Responsive Metro Styled Theme</div>
					</div>
					</div>
					<div class="col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-2">

						<form class="form-inline" role="form">
						  <div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Type Something...">
						  </div>
						  <button type="submit" class="btn btn-default">Search</button>
						</form>

					</div>
				</div>
			</div>
		</header>

<!-- Navigation bar starts -->

            <div class="navbar bs-docs-nav" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".bs-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
					  <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                           <li><a href="index.html">Revolution Slider</a></li>
                           <li><a href="index1.html">Flex Slider</a></li>
                           <li><a href="index2.html">Parallax Slider</a></li>
                         </ul>
                      </li>
                        <!-- Refer Bootstrap navbar doc -->
                      <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages #1 <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                           <li><a href="landing-page.html">Landing Page</a></li>
                           <li><a href="pricing.html">Pricing Table</a></li>
                           <li><a href="service-3.html">Service</a></li>
                           <li><a href="support.html">Support</a></li>
                           <li><a href="sitemap.html">Sitemap</a></li>
                           <li><a href="timeline.html">Timeline</a></li>
                           <li><a href="404.html">404</a></li>
                           <li><a href="faq.html">FAQ</a></li>
                             @if (Auth::guest())
                                 <li><a href="{{url('register')}}">Register</a></li>
                                 <li><a href="{{url('login')}}">Login</a></li>
                             @else
                                 <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                             @endif
                         </ul>
                      </li>
                      <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages #2<b class="caret"></b></a>
                         <ul class="dropdown-menu">
                           <li><a href="coming-soon.html">Coming Soon</a></li>
                           <li><a href="features-4.html">Features</a></li>
                           <li><a href="statement.html">Statement</a></li>
                           <li><a href="tasks.html">Tasks</a></li>
                           <li><a href="resume.html">Resume</a></li>
                           <li><a href="projects.html">Projects</a></li>
                           <li><a href="make-post.html">Make Post</a></li>
                           <li><a href="events.html">Events</a></li>
                           <li><a href="error-log.html">Error Log</a></li>
                         </ul>
                      </li>
                      <li><a href="service.html">Service</a></li>
                      <li><a href="aboutus.html">About Us</a></li>
                      <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                           <li><a href="blog-2.html">Blog #1</a></li>
                           <li><a href="blog-4.html">Blog #1</a></li>
                           <li><a href="blog-single.html">Blog Single</a></li>
                         </ul>
                       </li>

                      <li><a href="portfolio.html">Portfolio</a></li>
                      <li><a href="contactus.html">Contact</a></li>
                    </ul>
                  </nav>
                </div>
            </div>

<!--/ Navigation bar ends -->

@yield('content')

{{--@include('layouts.footer')--}}

<!-- Social -->

<div class="social-links">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
				<p class="big"><span>Follow Us On</span> <a href="#"><i class="fa fa-facebook"></i>Facebook</a> <a
                            href="#"><i class="fa fa-twitter"></i>Twitter</a> <a href="#"><i
                                class="fa fa-google-plus"></i>Google Plus</a> <a href="#"><i class="fa fa-linkedin"></i>LinkedIn</a></p>
			  </div>
			</div>
		  </div>
		</div>


<!-- Footer -->
		<footer>
		  <div class="container">
			<div class="row">

			  <div class="widgets">
				<div class="col-md-4">
				  <div class="fwidget">

					<div class="col-l">
					  <h6>Downlaods</h6>
					  <ul>
						<li><a href="#">Condimentum</a></li>
						<li><a href="#">Etiam at</a></li>
						<li><a href="#">Fusce vel</a></li>
						<li><a href="#">Vivamus</a></li>
						<li><a href="#">Pellentesque</a></li>
					  </ul>
					</div>

					<div class="col-r">
					  <h6>Support</h6>
					  <ul>
						<li><a href="#">Condimentum</a></li>
						<li><a href="#">Etiam at</a></li>
						<li><a href="#">Fusce vel</a></li>
						<li><a href="#">Vivamus</a></li>
						<li><a href="#">Pellentesque</a></li>
					  </ul>
					</div>

				  </div>
				</div>

				<div class="col-md-4">
				  <div class="fwidget">
					<h6>Categories</h6>
					<ul>
					  <li><a href="#">Condimentum - Condimentum gravida</a></li>
					  <li><a href="#">Etiam at - Condimentum gravida</a></li>
					  <li><a href="#">Fusce vel - Condimentum gravida</a></li>
					  <li><a href="#">Vivamus - Condimentum gravida</a></li>
					  <li><a href="#">Pellentesque - Condimentum gravida</a></li>
					</ul>
				  </div>
				</div>

				<div class="col-md-4">
				  <div class="fwidget">
					<h6>Recent Posts</h6>
					<ul>
					  <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
					  <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
					  <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
					  <li><a href="#">Vivamus scelerisque dui in massa</a></li>
					  <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-12">
				  <div class="copy">
					<h6>Metro <span class="color">Mania</span></h6>
					<p>Copyright &copy; <a href="#">Your Site</a> - <a href="index.html">Home</a> | <a
                                href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a
                                href="contactus.html">Contact Us</a></p>
				  </div>
			  </div>
			</div>
		  <div class="clearfix"></div>
		  </div>
		</footer>

<!-- Javascript files -->
<!-- jQuery -->
		<script src="{{asset('js/jquery.js')}}"></script>
<!-- Bootstrap JS -->
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
<!-- Isotope for gallery -->
<script src="{{asset('js/jquery.isotope.js')}}"></script>
<!-- prettyPhoto for images -->
		<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<!-- Parallax slider -->
		<script src="{{asset('js/jquery.cslider.js')}}"></script>
		<script src="{{asset('js/modernizr.custom.28468.js')}}"></script>
<!-- Filter for support page -->
		<script src="{{asset('js/filter.js')}}"></script>
<!-- Cycle slider -->
		<script src="{{asset('js/cycle.js')}}"></script>
<!-- Flex slider -->
		<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Easing -->
		<script src="{{asset('js/easing.js')}}"></script>
<!-- Respond JS for IE8 -->
		<script src="{{asset('js/respond.min.js')}}"></script>
<!-- HTML5 Support for IE -->
		<script src="{{asset('js/html5shiv.js')}}"></script>
<!-- Custom JS -->
		<script src="{{asset('js/custom.js')}}"></script>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script>--}}

</body>
</html>
