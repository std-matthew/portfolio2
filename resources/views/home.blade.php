@extends('master')

@section('content')
<div id="page-wrapper">

	<!-- Header -->
	<header id="header">
		<h1 id="logo"><a href="{{ route('home') }}">Stateless</a></h1>
		<nav id="nav">
			<ul>
				<li><a href="#" class="button primary">Read Me</a></li>
			</ul>
		</nav>
	</header>

	<!-- Banner -->
	<section id="banner">
		<div class="content">
			<header>
				<h2>No state. No boundaries.</h2>
				<p>Achive anything by being in between.<br />
				No form. No end. Infinite Possibilities.</p>
			</header>
			<span class="image"><img src="images/pic01.jpg" alt="" /></span>
		</div>
		<a href="#one" class="goto-next scrolly">Next</a>
	</section>

	<!-- One -->
	<section id="one" class="spotlight style1 bottom">
		<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-4 col-12-medium">
						<header>
							<h2>About Me</h2>
							<p>The states I have been</p>
						</header>
					</div>
					<div class="col-4 col-12-medium">
						<p class="align-justify">
							I have been passionate about Programming ever since, and it has morphed into Web Development. Which led me to handle wide-ranged of projects that includes Websites, Web Applications, Ecommerce and Mobile Apps.</p>
					</div>
					<div class="col-4 col-12-medium">
						<p class="align-justify">
							My passion for programming doesn't end on Web Development, I am always curious about learning more, I believe that in this field of work I will have never ending learning which always excites me.
						</p>
					</div>
				</div>
			</div>
		</div>
		<a href="#two" class="goto-next scrolly">Next</a>
	</section>

	<!-- Two -->
	<section id="two" class="spotlight style2 right">
		<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
		<div class="content">
			<header>
				<h2>Web Developer</h2>
				<p>PRAXXYS Solutions Inc.<br />May 2017 - Current</p>
			</header>
			<p>
				Creates System Process Documentations and Wireframes, developes wide-ranged of fast, seamless and elegant Websites, complex Systems such as E-commerce, Booking, and Reporting Systems and Mobile Apps for Android and iOS. Also conductes end to end quality assurances and unit testing, manage and handles server vulnerabilities.
			</p>
			<ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul>
		</div>
		<a href="#three" class="goto-next scrolly">Next</a>
	</section>

	<!-- Three -->
	<section id="three" class="spotlight style3 left">
		<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
		<div class="content">
			<header>
				<h2>Bachelor's in Computer Science</h2>
				<p>Asian Institute of Computer Studies<br />2012 - 2017</p>
			</header>
			<p>Learned the basics of programming such as HTML, CSS, JavaScript, PHP, Java, MySQL and Programming fundamentals.</p>
			<ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul>
		</div>
		<a href="#four" class="goto-next scrolly">Next</a>
	</section>

	<!-- Four -->
	<section id="four" class="wrapper style1 special fade-up">
		<div class="container">
			<header class="major">
				<h2>What I do</h2>
				<p>See the possibilities that I can create</p>
			</header>
			<div class="box alt">
				<div class="row gtr-uniform">
					<section class="col-4 col-6-medium col-12-xsmall">
						<span class="icon alt major">
							<i class="fa fa-code"></i>
						</span>
						<h3>Web Developer</h3>
						<p>A programmer who specializes in, or is specifically engaged in, the development of World Wide Web applications.</p>
					</section>
					
					<section class="col-4 col-6-medium col-12-xsmall">
						<span class="icon alt major">
							<i class="fab fa-laravel"></i>
						</span>
						<h3>Laravel and PHP</h3>
						<p>PHP web framework, intended for the development of web applications following the MVC architectural pattern.</p>
					</section>
					<section class="col-4 col-6-medium col-12-xsmall">
						<span class="icon alt major">
							<i class="fab fa-vuejs"></i>
						</span>
						<h3>Vue JS and JavaScript</h3>
						<p>A progressive framework for building user interfaces and designed from the ground up to be incrementally adoptable</p>
					</section>
					<section class="col-4 col-6-medium col-12-xsmall">
						<span class="icon alt major">
							<i class="fa fa-mobile"></i>
						</span>
						<h3>Cordova Apache</h3>
						<p>Enables software programmers to build applications for mobile devices using CSS3, HTML5, and JavaScript instead of relying on platform-specific APIs</p>
					</section>
					<section class="col-4 col-6-medium col-12-xsmall">
						<span class="icon alt major">
							<i class="fab fa-linux"></i>
						</span>
						<h3>LAMP Stack</h3>
						<p>An archetypal model of web service stacks, used for building dynamic web sites and web applications.</p>
					</section>
					<section class="col-4 col-6-medium col-12-xsmall">
						<span class="icon alt major">
							<i class="fab fa-html5"></i>
						</span>
						<h3>HTML &amp; CSS</h3>
						<p>Standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.</p>
					</section>
				</div>
			</div>
			<footer class="major">
				<ul class="actions special">
					<li><a href="#" class="button">Learn More</a></li>
				</ul>
			</footer>
		</div>
	</section>

	<!-- Five -->
	<section id="five" class="wrapper style2 special fade">
		<div class="container">
			<header>
				<h2>Get it touch</h2>
				<p>Tell me more about how I can help you</p>
			</header>
			<div class="row">
				<div class="col-8 col-12-xsmall a-margin-lr">
					<form method="post" action="#">
						<div class="row gtr-uniform gtr-50">
							<div class="col-6 col-12-xsmall">
								<input type="text" name="name" id="name" value="" placeholder="Name" />
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="email" name="email" id="email" value="" placeholder="Email" />
							</div>
							<div class="col-12">
								<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
							</div>
							<div class="col-12 pull-right right">
								<ul class="actions">
									<li class="a-margin-l">
										<button type="submit" class="button primary">
											<i class="fa fa-paper-plane"></i>
											Send Message
										</button>
									</li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<ul class="icons">
			<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
			<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Stateless. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>

</div>
@endsection