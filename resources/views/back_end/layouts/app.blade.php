<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
	<title>Dr. Inventory</title>

	<!-- Meta Data Description -->
	<meta name="author" 		content="{{ config('app.developer') }}" />
	<meta name="designer" 		content="{{ config('app.developer') }}" />
	<meta name="copyright" 		content="{{ config('app.developer') }}" />
	<meta name="reply-to" 		content="{{ config('app.developer_email') }}" />
	<meta name="support" 		content="{{ config('app.developer_support') }}" />
	<meta name="language" 		content="{{ app()->getLocale() }}" />
	<meta name="classification" content="Dr Inventory Management System" />
	<meta name="url" 			content="{{ url()->current() }}" />
	<meta name="identifier-url" content="{{ url('/') }}" />
	<meta name="category" 		content="Web application or software " />
	<meta name="description" 	content="This is serve from the private home." />

	
	<!-- ------------------------------------------------------------
	-																-
	-		All Style Sheets are available within this scope		-
	-																-
	- ----------------------------------------------------------- -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	
</head>
<body>
	<!-- Hold The Full Application Started-->

	<div id="app" class="app">
		<!-- Top Navigation Bar Section Scope Started Here -->
		<nav class="dr-navbar" id="">
			
			
			<!-- Logged in user Name or E-mail secrion started -->
			<span class="mr-3">Dr. Mamun</span>
			<!-- Navigation item scope started -->
			<div class="dr-user-wrapper" id="">
				<figure class="dr-circle-profile">
					<figcaption>Dr.</figcaption>
					<span style="background-image: url('/img/Dr.jpg');"></span>
				</figure>
				<div class="dropdown">
						<div class="dropout">
							<div class="triangle"></div>
							<ul>
								<li><a href="">Setting</a></li>
								<li><a href="">Logout</a></li>
							</ul>
						</div>
					</div>
			</div>
			<!-- Navigation item scope end -->
		</nav>
		<!-- Top Navigation Bar Section Scope End Here -->

		<!-- Include Scope -->




		<!-- All dynamic content holding scope here -->
		@yield('content')



		<!-- Footer Section started from here -->
		<footer>
			<span class="text-uppercase">design and developed by Dr. Mamun</span>
		</footer>
		<!-- Footer Section end from here -->
	</div>

	<!-- Hold The Full Application End -->

	<!-- -------------------------------------------------------------------
	-																	   -
	-		All JavaScript file and plugins available within this scope    -
	-																	   -
	- ---------------------------------------------------------------------- -->
	<script src="/js/app.js"></script>
</body>
</html>