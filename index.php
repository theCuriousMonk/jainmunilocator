<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<?php include 'meta.php'; ?>
		<meta name="description" content="Jain Muni Locator is about building a global database to locate all the Digambar Jain Muni-shris in world, freely accessible to all the Jainism followers.">
		<!-- Meta Keywords should be 8 only for optimum SEO results as suggested by http://www.seoworkers.com/tools/analyzer.html -->
		<meta name="keywords" content="Jain Muni Locator, Jainism, Jain Sadhu, Jain Acharya, Jain Guru, Meaning of 108, Mahagun, list of all digamabar jain munis">
		
		<title>Jain Muni Locator | Digambara monks &amp; nuns</title>
		
		<?php include 'stylesheets.php'; ?>
		
	</head>
	
	<body id="home" itemscope itemtype="http://schema.org/WebPage">
		<!-- Navigation -->
		<?php
$navLinks = '<li><a href="#about">About us</a></li>
                                <li><a href="#services">Explore</a></li>
                                <li><a href="#products">Mobile App</a></li>
                                <li><a href="#portfolio">Good Reads</a></li>
                                <li><a href="#contact">Contact us</a></li>';
include 'nav.php';
		?>
		
		
		<!-- Intro Header -->
		<!-- Full Page Image Background Carousel Header -->
		<header id="intro-carousel" class="carousel slide">
			<!-- Optional Indicators -->
			<!-- <ol class="carousel-indicators">
<li data-target="#intro-carousel" data-slide-to="0" class="active"></li>
<li data-target="#intro-carousel" data-slide-to="1"></li>
<li data-target="#intro-carousel" data-slide-to="2"></li>
</ol> -->
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url('assets/images/mataji.jpg');"></div>
					<div class="carousel-caption">
						<h1 class="wow animated slideInDown"><span itemprop="name">Jain Muni <span class="highlight">Locator</span></span></h1>
						<p class="intro-text wow animated slideInUp">One-stop online destination for Digambara Jains. Know about Jainism and its glory.</p>
						<a href="map.php" class="btn btn-default btn-lg">Locate</a>
					</div>
					<div class="overlay-detail"></div>
				</div><!-- /.item -->
				
				<div class="item">
					<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url('assets/images/vidyasagar.jpg');"></div>
					<div class="carousel-caption">
						<h1 class="wow animated slideInDown"><span class="highlight">Monks &amp; Nuns</span> <span itemprop="keywords">Biography</span></h1>,
						<p class="intro-text wow animated slideInUp">Find out about the <span itemprop="keywords">life events</span> and <span itemprop="keywords">disciples</span> of <span itemprop="keywords">Digambara</span> Monks &amp; Nuns.</p>
						<a href="munis.php" class="btn btn-default btn-lg">Monks &amp; Nuns</a>
					</div>
					<div class="overlay-detail"></div>
				</div><!-- /.item -->
				
				<div class="item">
					<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url('assets/images/muni.jpg');"></div>
					<div class="carousel-caption">
						<h1 class="wow animated slideInDown">Jain Muni Locator <span class="highlight">Facebook</span> Page</h1>
						<p class="intro-text wow animated slideInUp">Get up to date information about Digambara monks &amp; Nuns and our initiatives.</p>
						<a href="https://www.facebook.com/jainmunilocator/" class="btn btn-default btn-lg">Go to Facebook</a>
					</div>
					<div class="overlay-detail"></div>
				</div><!-- /.item -->
				
			</div>
			<!-- Controls -->
			<a class="left carousel-control squared" href="#intro-carousel" data-slide="prev">
				<i class="fa fa-angle-left fa-2x"></i>
			</a>
			<a class="right carousel-control squared" href="#intro-carousel" data-slide="next">
				<i class="fa fa-angle-right fa-2x"></i>
			</a>
			<div class="mouse"></div>
		</header>
		
		
		
		<!-- About Section -->
		<section id="about" class="about content-section alt-bg-light wow fadeInUp" data-wow-offset="10">
			<div class="container" itemscope itemtype="http://schema.org/AboutPage">
				<div class="row">
					<div class="col-md-6">
						<h2>Excited about <span itemprop="name">Jain Muni Locator</span></h2>
						<p><strong>Guess where does our information come from?</strong></p>
						<p>That's right, it's <strong>"YOU"</strong>. You are the one who have contributed in building this website.&nbsp;
							It's you who let us know, where <span itemprop="keywords">monks</span> &amp; <span itemprop="keywords">nuns</span> currently are.</p>
						
						<blockquote>
							There is no enemy out of your soul. The real enemies live inside yourself, they are anger, proud, curvedness, greed, attachmentes and hate.
							<span><strong>Lord Mahavira</strong></span>
						</blockquote>
						
						<p>Thanks a lot for your continuous support. We would do our best to make your <span itemprop="keywords">Jain</span> <span itemprop="keywords">Muni</span> <span itemprop="keywords">Locator</span> experience better than what it is today.</p>
						
					</div><!-- /.col-md-6 -->
					
					<div class="col-md-6">
						<div class="fb-page sidebar" data-href="https://www.facebook.com/jainmunilocator" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/jainmunilocator" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/jainmunilocator">Jain Muni Locator</a>
							</blockquote>
						</div>
					</div><!-- /.col-md-6 -->
					
					<div class="col-md-6">
						<?php include 'adsense.php'; ?>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.section -->
		
		
		
		<!-- Services Section -->
		<section id="services" class="services content-section">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<h2>Explore</h2>
						<p><strong>What would you like to do today?</strong></p>
					</div><!-- /.col-md-12 -->
					
					<div class="container">
						<div class="row text-center">
							<a href="munis.php">
								<div class="col-md-4">
									<div class="row services-item text-center wow flipInX" data-wow-offset="10">
										<i class="fa fa-male fa-3x"></i>
										<h4><span itemprop="keywords">Monks</span> &amp; <span itemprop="keywords">Nuns</span></h4>
										<p>Check out profile and disciples.</p>
									</div><!-- /.row -->
								</div><!-- /.col-md-4 -->
							</a>
							
							<a href="map.php">
								<div class="col-md-4">
									<div class="row services-item text-center wow flipInX" data-wow-offset="10">
										<i class="fa fa-globe fa-3x"></i>
										<h4>Map</h4>
										<p>Locate <span itemprop="keywords">Jain</span> <span itemprop="keywords">Saints</span> and Nuns on a <span itemprop="keywords">single map</span>.</p>
									</div><!-- /.row -->
								</div><!-- /.col-md-4 -->
							</a>
							
							<a href="">
								<div class="col-md-4">
									<div class="row services-item text-center wow flipInX" data-wow-offset="10">
										<i class="fa fa-street-view fa-3x"></i>
										<h4><span itemprop="keywords">Tirthankara</span></h4>
										<p>Check <span itemprop="keywords">biographies</span> of Jain Tirthankaras.</p>
									</div><!-- /.row -->
								</div><!-- /.col-md-4 -->
							</a>
							
							<a href="events.php">
								<div class="col-md-4">
									<div class="row services-item text-center wow flipInX" data-wow-offset="20">
										<i class="fa fa-calendar fa-3x"></i>
										<h4>Events</h4>
										<p>Find out whats special about today.</p>
									</div><!-- /.row -->
								</div><!-- /.col-md-4 -->
							</a>
							
							<a href="chaturmas.php">
								<div class="col-md-4">
									<div class="row services-item text-center wow flipInX" data-wow-offset="20">
										<i class="fa fa-bullhorn fa-3x"></i>
										<h4><span itemprop="keywords">Chaturmas</span></h4>
										<p>Know about the current and previous chaturmas places.</p>
									</div><!-- /.row -->
								</div><!-- /.col-md-4 -->
							</a>
							
							<a href="temples.php">
								<div class="col-md-4">
									<div class="row services-item text-center wow flipInX" data-wow-offset="20">
										<i class="fa fa-fort-awesome fa-3x"></i>
										<h4>Temples</h4>
										<p>Know about <span itemprop="keywords">Digambara Jain Temples</span>.</p>
									</div><!-- /.row -->
								</div><!-- /.col-md-4 -->
							</a>
							
						</div><!-- /.row -->
					</div><!-- /.container -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.section -->
		
		
		
		<!-- Products Section -->
		<section id="products" class="products content-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="https://play.google.com/store/apps/details?id=com.architjn.jainmunilocator">
							<img src="assets/images/jmlapp.png" class="center-block img-responsive">
						</a>
					</div><!-- /.col-md-4 -->
					
					<div class="col-md-8">
						<div class="products-container">
							
							<div class="col-md-12">
								<h2><a href="https://play.google.com/store/apps/details?id=com.architjn.jainmunilocator">Try our new android app!</a></h2>
								<h3 class="caption white"><a href="https://play.google.com/store/apps/details?id=com.architjn.jainmunilocator">
									You can know about Jainism from a tap on your smartphone screen. Isn't that simply awesome?
									</a></h3>
							</div><!-- /.col-md-12 -->
							
							<div class="col-md-6 product-item wow fadeIn" data-wow-offset="10">
								<div class="media-left">
									<span class="icon"><i class="fa fa-globe fa-3x"></i></span>
								</div><!-- /.media-left -->
								<div class="media-body">
									<h3 class="media-heading">Map</h3>
									<p>An interactive and responsive map to assist you.</p>
								</div><!-- /.media-body -->
							</div><!-- /.col-md-6 -->
							
							<div class="col-md-6 product-item wow fadeIn" data-wow-offset="10">
								<div class="media-left">
									<span class="icon"><i class="fa fa-search fa-3x"></i></span>
								</div><!-- /.media-left -->
								<div class="media-body">
									<h3 class="media-heading">Search Places</h3>
									<p>Search for any location and find out who all are there at present.</p>
								</div><!-- /.media-body -->
							</div><!-- /.col-md-6 -->
							
							<div class="col-md-6 product-item wow fadeIn" data-wow-offset="10">
								<div class="media-left">
									<span class="icon"><i class="fa fa-male fa-3x"></i></span>
								</div><!-- /.media-left -->
								<div class="media-body">
									<h3 class="media-heading">Search</h3>
									<p>Monks &amp; Nuns on the map.</p>
								</div><!-- /.media-body -->
							</div><!-- /.col-md-6 -->
							
							<div class="col-md-6 product-item wow fadeIn" data-wow-offset="10">
								<div class="media-left">
									<span class="icon"><i class="fa fa-sign-in fa-3x"></i></span>
								</div><!-- /.media-left -->
								<div class="media-body">
									<h3 class="media-heading">One Click Login</h3>
									<p>Login using facebook or google plus.</p>
								</div><!-- /.media-body -->
							</div><!-- /.col-md-6 -->
							
							<div class="col-md-6 product-item wow fadeIn" data-wow-offset="10">
								<div class="media-left">
									<span class="icon"><i class="fa fa-toggle-on fa-3x"></i></span>
								</div><!-- /.media-left -->
								<div class="media-body">
									<h3 class="media-heading">Colors</h3>
									<p>Choose a color that suits you with just one CSS file.</p>
								</div><!-- /.media-body -->
							</div><!-- /.col-md-6 -->
							
							<div class="col-md-6 product-item wow fadeIn" data-wow-offset="10">
								<div class="media-left">
									<span class="icon"><i class="fa fa-envelope-o fa-3x"></i></span>
								</div><!-- /.media-left -->
								<div class="media-body">
									<h3 class="media-heading">Contact form</h3>
									<p>Fully functional PHP contact form, with user input validation.</p>
								</div><!-- /.media-body -->
							</div><!-- /.col-md-6 -->
							
						</div><!-- /.products-container -->
					</div><!-- /.col-md-8 -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.products -->
		
		<?php
include 'goodreads.php';		
include 'contact.php';
include 'footer2.php';
include 'scripts.php';
		?>
		
	</body>
	
</html>
