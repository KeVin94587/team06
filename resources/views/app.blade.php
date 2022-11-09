

<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>TEAMS06</strong> <span>皇帝查詢系統</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="emperors">皇帝</a></li>
							<li><a href="dynasties">朝代</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">備用</a></li>
							<li><a href="#" class="button fit">備用</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>@yield('team06_theme')</h1>
							</header>
							<div class="content">

								<ul class="actions">

                                    <li><a href="{{ route('emperors.index') }}" class="button next">所有皇帝</a></li>
                                        <li><a href="{{ route('dynasties.index') }}" class="button next">所有朝代</a></li>
								</ul>
							</div>
						</div>
					</section>


						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>@yield('team06_theme')</h2>
									</header>
									<p>@yield('team06_contents')</p>
									<ul class="actions">
										<li><a href="{{ route('emperors.index') }}" class="button next">所有皇帝</a></li>
                                        <li><a href="{{ route('dynasties.index') }}" class="button next">所有朝代</a></li>
									</ul>
								</div>
							</section>

					</div>


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">

							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="#">@include('footer')</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>