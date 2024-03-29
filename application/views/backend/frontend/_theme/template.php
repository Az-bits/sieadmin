<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themepush.com/demo/calypso/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 23:01:00 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>{pagetitle}</title>
<!-- Style -->
<link href="{theme_url}css/bootstrap.css" rel="stylesheet">
<link href="{theme_url}css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="{theme_url}css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="{theme_url}css/layout-semiboxed.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="{theme_url}css/skin-red.css" rel="stylesheet">
<!-- Demo -->
<link rel="stylesheet" id="main-color" href="{theme_url}css/skin-red.css" media="screen"/>
<!-- Favicon -->
<link rel="shortcut icon" href="{theme_url}img/favicon.ico">
<!-- IE -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>	   
    <![endif]-->
<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	 <![endif]-->
</head>
<body class="off">
<!-- /.wrapbox start-->
<div class="wrapbox">
	<!-- TOP AREA
================================================== -->
	<section class="toparea">
	<div class="container">
		<div class="row">
			<div class="col-md-6 top-text pull-left animated fadeInLeft">
				<i class="icon-phone"></i> Telefono: 444 8529 <span class="separator"></span><i class="icon-envelope"></i> Email: <a href="#">sistemas@upea.bo</a>
			</div>
			<div class="col-md-6 text-right animated fadeInRight">
				<div class="social-icons">
					<a class="icon icon-facebook" href="#"></a>
					<a class="icon icon-twitter" href="#"></a>
					<!--<a class="icon icon-linkedin" href="#"></a>
					<a class="icon icon-skype" href="#"></a>-->
					<a class="icon icon-google-plus" href="#"></a>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /.toparea end-->
	<!-- NAV
================================================== -->
	<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand logo-nav" href="index.html"><img src="{theme_url}img/logo.png" alt="logo"></a>
		</div>
		<ul id="nav" class="nav navbar-nav pull-right">
			<li class="active"><a href="">Inicio</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="home2.html">Home Alt</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="timeline.html">Timeline</a></li>
				<li><a href="landingpage.html">Landing Page</a></li>
				<li><a href="testimonials.html">Testimonials</a></li>
				<li><a href="faq.html">F.A.Q.</a></li>
				<li><a href="404.html">404 Not Found</a></li>
			</ul>
			</li>
			<!--
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="portfolio3.html">Three Columns</a></li>
				<li><a href="portfolio2.html">Two Columns</a></li>
				<li><a href="portfolio4.html">Four Columns</a></li>
				<li><a href="projectdetail.html">Single Project</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="blogindex.html">Home Blog</a></li>
				<li><a href="blogsinglepost.html">Single Post</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="icon-angle-down"></i></a>
			<ul class="dropdown-menu">
				<li><a href="elements.html">Elements</a></li>
				<li><a href="columns.html">Columns</a></li>
				<li><a href="icons.html">Icons</a></li>
				<li><a href="#">Masonry Grids +</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="masonry2.html">Masonry Two</a></li>
						<li><a href="masonry3.html">Masonry Three</a></li>
						<li><a href="masonry4.html">Masonry Four</a></li>
					</ul>
				</li>
			</ul>
			</li>-->
			<li><a href="contact.html">Contact</a></li>
		</ul>		
	</div>	
	</nav>
	<!-- /nav end-->
	<!-- CAROUSEL
================================================== -->
	<section class="carousel carousel-fade slide home-slider" id="c-slide" data-ride="carousel" data-interval="4500" data-pause="false">
	<ol class="carousel-indicators">
		<li data-target="#c-slide" data-slide-to="0" class="active"></li>
		<li data-target="#c-slide" data-slide-to="1" class=""></li>
		<li data-target="#c-slide" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active" style="background: url({theme_url}img/demo/bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-6 fadein scaleInv anim_1">
						<div class="fadein scaleInv anim_2">
							<h1 class="carouselText1 animated fadeInUpBig">Welcome to <span class="colortext">Calypso</span></h1>
						</div>
						<div class="fadein scaleInv anim_1">
							<p class="carouselText2 animated fadeInLeft">
								 MultiPurpose Template
							</p>
						</div>
						<div class="fadein scaleInv anim_2">
							<p class="carouselText3">
								<i class="icon-ok"></i> Bootstrap 3.0+ Compatible
							</p>
						</div>
						<div class="fadein scaleInv anim_3">
							<p class="carouselText3">
								<i class="icon-ok"></i> Responsive Layouts
							</p>
						</div>
						<div class="fadein scaleInv anim_4">
							<p class="carouselText3">
								<i class="icon-ok"></i> Beautiful Animation Effects
							</p>
						</div>
						<div class="fadein scaleInv anim_5">
							<p class="carouselText3">
								<i class="icon-ok"></i> Top Notch Support
							</p>
						</div>
					</div>
					<div class="col-md-6 text-center fadein scaleInv anim_2">
						<div class="text-center">
							<div class="fadein scaleInv anim_3">
								<img src="{theme_url}img/demo/slide1-3.png" alt="" class="slide1-3 animated rollIn">
							</div>
							<div class="fadein scaleInv anim_8">
								<img src="{theme_url}img/demo/slide1-1.png" alt="" class="slide1-1 animated rollIn">
							</div>
							<div class="fadein scaleInv anim_5">
								<img src="{theme_url}img/demo/slide1-2.png" alt="" class="slide1-2 animated rollIn">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background: url({theme_url}img/demo/slide1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-6 animated fadeInUp notransition">
						<img src="{theme_url}img/demo/desktop3.png" alt="" style="width:90%;">
					</div>
					<div class="col-md-6 animated fadeInDown  notransition topspace30 text-right">
						<div class="car-highlight1 animated fadeInLeftBig">
							 Add ANYTHING in Slider
						</div>
						<br>
						<div class="car-highlight2 animated fadeInRightBig notransition">
							 Powerful Options
						</div>
						<br>
						<div class="car-highlight3 animated fadeInUpBig notransition">
							 Video, Audio, Text, Iframes etc
						</div>
						<br>
						<div class="car-highlight4 animated flipInX notransition">
							 Any HTML5 code you wish
						</div>
						<br>
						<div class="car-highlight5 animated rollIn notransition">
							 Slider with <span class="font100">Total Control</span><br>
							<span class="font100" style="font-size:20px;">Embed Practically</span> Anything<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" style="background: url({theme_url}img/demo/slide3.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<br>
						<br>
						<div class="animated fadeInDownBig notransition">
							<span class="car-largetext">Vivid Skins <span class="font300">&amp; Three</span> Layouts</span><br>
						</div>
						<br>
						<br>
						<div class="car-widecircle animated fadeInLeftBig notransition">
							<span>Wide</span>
						</div>
						<div class="car-middlecircle animated fadeInUpBig notransition">
							<span>Boxed</span>
						</div>
						<div class="car-smallcircle animated fadeInRightBig notransition">
							<span>Narrow</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.carousel-inner -->
	<a class="left carousel-control animated fadeInLeft" href="#c-slide" data-slide="prev"><i class="icon-angle-left"></i></a>
	<a class="right carousel-control animated fadeInRight" href="#c-slide" data-slide="next"><i class="icon-angle-right"></i></a>
	</section>
	<!-- /.carousel end-->
	
	<!-- /.wrapsemibox start-->
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="{theme_url}img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- INTRO NOTE
================================================== -->
		<section class="intro-note topspace10">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Introducing Calypso, <span class="colortext">powerful</span> HTML5 template</h1>
					<p>
						 Highly-professional & modern website template created for you and your business prosperity. <br/>
						Calypso has all the flexibility and features needed for building a top-notch business website.
					</p>
				</div>
			</div>
		</div>
		</section>
		<!-- /.intro-note end-->
		<!-- SERVICE BOXES
================================================== -->
		<section class="service-box topspace30">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animated fadeInLeftNow notransition">
					<div class="icon-box-top">
						<i class="fontawesome-icon medium circle-white center icon-rocket"></i>
						<h1>Powerful & Beautiful</h1>
						<p>
							 Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus.
						</p>
						<p class="fontupper">
							<a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-center animated fadeInLeftNow notransition">
					<div class="icon-box-top">
						<i class="fontawesome-icon medium circle-white center icon-cogs"></i>
						<h1>Fresh & Modern</h1>
						<p>
							 Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus.
						</p>
						<p class="fontupper">
							<a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-center animated fadeInRightNow notransition">
					<div class="icon-box-top active">
						<i class="fontawesome-icon medium circle-white center icon-microphone"></i>
						<h1>Clean Coded</h1>
						<p>
							 Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus.
						</p>
						<p class="fontupper">
							<a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
				<div class="col-md-3 text-center animated fadeInRightNow notransition">
					<div class="icon-box-top">
						<i class="fontawesome-icon medium circle-white center icon-trophy"></i>
						<h1>Winning Theme</h1>
						<p>
							 Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus.
						</p>
						<p class="fontupper">
							<a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.service-box end-->
		<!-- RECENT WORK
================================================== -->
		<section class="home-portfolio bgarea topspace30">
		<div class="bgarea-semitransparent">
			<div class="container">
				<h1 class="small text-center animated fadeInLeftNow notransition">FEATURED WORK</h1>
				<p class="animated fadeInRightNow notransition text-center topspace20">
					 Calypso offers multiple layouts and ways of displaying your content in a manner that best suits for you and <br>
					 your customer. Make beautiful and eye catching site with Calypso today!
				</p>
				<br/>
				<div class="row">
					<div class="col-md-6 animated fadeInLeftNow notransition">
						<div class="carousel carousel-fade slide carousel-featuredwork" id="carousel-featuredwork">
							<ol class="carousel-indicators">
								<li data-target="#carousel-featuredwork" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-featuredwork" data-slide-to="1" class=""></li>
								<li data-target="#carousel-featuredwork" data-slide-to="2" class=""></li>
							</ol>
							<div class="carousel-inner" style="margin-top:-20px;">
								<div class="item active">
									<img src="img/demo/desktop3.png" alt="">
								</div>
								<div class="item">
									<img src="img/demo/slide1-1.png" alt="">
								</div>
								<div class="item">
									<img src="img/demo/desktop2.png" alt="">
								</div>
							</div>
							<!-- /.carousel-inner -->
						</div>
					</div>
					<div class="col-md-6 animated fadeInRightNow notransition">
						<ul class="icons">
							<li>
							<h4><i class="icon-magic"></i>Winning Template Awards</h4>
							<p>
								 Suspendisse nisl sapien, mattis ut libero ut, placerat eleifend urna. Quisque commodo.
							</p>
							</li>
							<li>
							<h4><i class="icon-heart"></i>Love at first sight with App</h4>
							<p>
								 Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis consectetur venenatis ante in adipiscing.
							</p>
							</li>
							<li>
							<h4><i class="icon-twitter"></i>Top Social Media</h4>
							<p>
								 Maecenas tempus purus vitae magna posuere tempor. Aliquam sed augue justo. Etiam pellentesque purus sed tincidunt dignissim.
							</p>
							</li>
							<li>
							<h4><i class="icon-leaf"></i>Professional modern Theme</h4>
							<p>
								 Donec commodo euismod sem, eu vehicula dui malesuada rutrum. Cras lobortis.
							</p>
							</li>
							<li>
							<h4><i class="icon-cog"></i>Best choice for your Web</h4>
							<p>
								 Quisque tempor convallis est ac viverra. Cras dictum arcu leo, commodo rhoncus turpis convallis ac. Praesent sapien nulla lobortis quis sapien eu.
							</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.recent-work end-->
		<!-- FEATURES
================================================== -->
		<section class="home-features topspace30">
		<div class="container animated fadeInUpNow notransition">
			<h1 class="small text-center">WHAT THEY SAY</h1>
			<div class="br-hr type_short">
				<span class="br-hr-h">
				<i class="icon-pencil"></i>
				</span>
			</div>
			<div id="cbp-qtrotator" class="cbp-qtrotator">
				<div class="cbp-qtcontent">
					<img src="https://www.themepush.com/demo/biscaya/img/demo/avatar.jpg" alt="">
					<blockquote>
						<p class="bigquote">
							<i class="icon-quote-left colortext quoteicon"></i> Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus. Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus. Praesent dignissim sem sapien, a vulputate enim auctor vitae. Duis non lorem porta, adipiscing eros sit amet, tempor sem.
						</p>
						<footer>John Doe / Owner of <a href="#">calypso.com</a></footer>
					</blockquote>
				</div>
				<div class="cbp-qtcontent">
					<img src="https://www.themepush.com/demo/biscaya/img/demo/avatar.jpg" alt="">
					<blockquote>
						<p class="bigquote">
							<i class="icon-quote-left colortext quoteicon"></i> Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus. Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus. Praesent dignissim sem sapien, a vulputate enim auctor vitae. Duis non lorem porta, adipiscing eros sit amet, tempor sem.
						</p>
						<footer>Pino Caruso / Director of <a href="#">hisweb.com</a></footer>
					</blockquote>
				</div>
			</div>
			<br/>
			<div class="col-md-10 col-md-offset-1 animated slidea notransition">
				<div class="row">
					<div class="col-md-4">
						<h4><i class="icon icon-microphone">
						</i> A Playground for Web</h4>
						<div class="bottomspace30">
							 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more.
						</div>
					</div>
					<div class="col-md-4">
						<h4><i class="icon icon-anchor">
						</i> Great Project for Clients</h4>
						<div class="bottomspace30">
							 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more.
						</div>
					</div>
					<div class="col-md-4">
						<h4><i class="icon icon-user">
						</i> Ready to Use Template</h4>
						 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more. <br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><i class="icon icon-pushpin">
						</i> New Modern Functions</h4>
						 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more. <br>
					</div>
					<div class="col-md-4">
						<h4><i class="icon icon-cogs">
						</i> Top Notch Support</h4>
						 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more. <br>
					</div>
					<div class="col-md-4">
						<h4><i class="icon icon-leaf">
						</i> Awesome Animations</h4>
						<div class="bottomspace30">
							 Trigger ideas: quickly experiment with site colors &amp; patterns, try out web typography and much more.
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.home-features end-->
		<section class="grayarea recent-projects-home topspace30 animated fadeInUpNow notransition">
		<div class="container">
			<div class="row">
				<h1 class="small text-center topspace0">LATEST PROJECTS</h1>
				<p class="animated fadeInRightNow notransition text-center topspace20">
					 Calypso offers multiple layouts and ways of displaying your content in a manner that best suits for you and <br>
					 your customer. Make beautiful and eye catching site with Calypso today!
				</p>
				<div class="text-center smalltitle">
				</div>
				<div class="col-md-12">
					<div class="list_carousel text-center">
						<div class="carousel_nav">
							<a class="prev" id="car_prev" href="#"><span>prev</span></a>
							<a class="next" id="car_next" href="#"><span>next</span></a>
						</div>
						<div class="clearfix">
						</div>
						<ul id="carousel-projects">
							<!--featured-projects 1-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase1.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase1.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">Trains</a></h1>
								<p>
									 Lore ipsum
								</p>
							</div>
							</li>
							<!--featured-projects 2-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase2.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase2.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">Automobiles</a></h1>
								<p>
									 Jura mountains
								</p>
							</div>
							</li>
							<!--featured-projects 3-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase3.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase3.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">Biscaya</a></h1>
								<p>
									 Clio sorevins
								</p>
							</div>
							</li>
							<!--featured-projects 4-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase4.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase4.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">Serenity</a></h1>
								<p>
									 Tabiscum rocens
								</p>
							</div>
							</li>
							<!--featured-projects 5-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase1.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase1.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">BizLeaders</a></h1>
								<p>
									 Larius trano
								</p>
							</div>
							</li>
							<!--featured-projects 6-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase2.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase2.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">Salma</a></h1>
								<p>
									 Vobiscum atens
								</p>
							</div>
							</li>
							<!--featured-projects 7-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase3.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase3.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">RetroDoe</a></h1>
								<p>
									 Oliya verder
								</p>
							</div>
							</li>
							<!--featured-projects 8-->
							<li>
							<div class="boxcontainer">
								<img src="img/demo/showcase4.jpg" alt="">
								<div class="roll">
									<div class="wrapcaption">
										<a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
										<a data-gal="prettyPhoto[gallery1]" href="img/demo/showcase4.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
									</div>
								</div>
								<h1><a href="projectdetail.html">Chaux Fonds</a></h1>
								<p>
									 Diva menthol
								</p>
							</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- /.recent-projects-home end-->
		<!-- BEGIN CALL TO ACTION PANEL
================================================== -->
		<section class="container animated fadeInDownNow notransition topspace40">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<p class="bigtext">
						 Praesent <span class="fontpacifico colortext">WowThemes</span> sapien, a vulputate enim auctor vitae
					</p>
					<p>
						 Duis non lorem porta, adipiscing eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat
					</p>
				</div>
				<div class="text-center topspace20">
					<a href="#" class="buttonblack"><i class="icon-shopping-cart"></i>&nbsp; get theme</a>
					<a href="#" class="buttoncolor"><i class="icon-link"></i>&nbsp; learn more</a>
				</div>
			</div>
		</div>
		</section>
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
	<!-- BEGIN FOOTER
================================================== -->
	<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				<div class="col-md-3">
					<h1 class="footerbrand">Calypso</h1>
					<p>
						 Introducing a premium HTML5 & CSS3 template for multipurpose use.
					</p>
					<p>
						 Three awesome layouts, beautiful modern design, lots of features and skins.
					</p>
					<p>
						 Made with &nbsp;<i class="icon-heart"></i>&nbsp; by WowThemes.net.
					</p>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> No.42 - 54816 Inc Calypso
						</p>
						<p>
							<strong>Phone: </strong> + 1 (280) 482 9537
						</p>
						<p>
							<strong>Fax: </strong> + 1 (372) 742 9532
						</p>
						<p>
							<strong>Email: </strong> wowthemesnet@gmail.com
						</p>
						<ul class="social-icons list-soc">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">C</span>lients' <span class="font100">Voice</span></h1>
					<div id="quotes">
						<div class="textItem">
							<div class="avatar">
								<img src="https://www.themepush.com/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "Before turning to those moral and mental aspects of the matter which present the greatest difficulties, let the inquirer begin by mastering more elementary problems.<span style="font-family:arial;">"</span><br/><b> Jesse T, Los Angeles </b>
						</div>
						<div class="textItem">
							<div class="avatar">
								<img src="https://www.themepush.com/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "How often have I said to you that when you have eliminated the impossible, whatever remains, however improbable, must be the truth?<span style="font-family:arial;">"</span><br/><b>Ralph G. Flowers </b>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="http://www.themepush.com/demo/calypso/contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<textarea class="col-md-12" name="comment" rows="4" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright WowThemes.net
					</p>
				</div>
				<div class="col-md-8">
					<ul class="footermenu pull-right">
						<li><a href="#">Home</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">Pages</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /footer section end-->
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->

<script src="{theme_url}js/jquery.js"></script>
<script src="{theme_url}js/bootstrap.js"></script>
<script src="{theme_url}js/plugins.js"></script>
<script src="{theme_url}js/common.js"></script>
<script>
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$(window).load(function(){			
		$('#carousel-projects').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
        height      : 295,
        visible     : {
            min         : 1,
            max         : 4
        }
    },
		width: '200px',
		height: '295px',
		auto: true,
		circular	: true,
		infinite	: false,
		prev : {
			button		: "#car_prev",
			key			: "left",
				},
		next : {
			button		: "#car_next",
			key			: "right",
					},
		swipe: {
			onMouse: true,
			onTouch: true
			},
		scroll: {
        easing: "",
        duration: 1200
    }
	});
		});
</script>
<script>
	//CALL TESTIMONIAL ROTATOR
	$( function() {
		/*
		- how to call the plugin:
		$( selector ).cbpQTRotator( [options] );
		- options:
		{
			// default transition speed (ms)
			speed : 700,
			// default transition easing
			easing : 'ease',
			// rotator interval (ms)
			interval : 8000
		}
		- destroy:
		$( selector ).cbpQTRotator( 'destroy' );
		*/
		$( '#cbp-qtrotator' ).cbpQTRotator();
	} );
</script>
<script>
	//CALL PRETTY PHOTO
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
</script>
<script>
	//MASONRY
	$(document).ready(function(){
	var $container = $('#content');
	  $container.imagesLoaded( function(){
		$container.isotope({
		filter: '*',	
		animationOptions: {
		 duration: 750,
		 easing: 'linear',
		 queue: false,	 
	   }
	});
	});
	$('#filter a').click(function (event) {
		$('a.selected').removeClass('selected');
		var $this = $(this);
		$this.addClass('selected');
		var selector = $this.attr('data-filter');
		$container.isotope({
			 filter: selector
		});
		return false;
	});
	});
</script>
<script>
//ROLL ON HOVER
	$(function() {
	$(".roll").css("opacity","0");
	$(".roll").hover(function () {
	$(this).stop().animate({
	opacity: .8
	}, "slow");
	},
	function () {
	$(this).stop().animate({
	opacity: 0
	}, "slow");
	});
	});
</script>
<!--BEGIN DEMO PANEL
================================================== -->
<link rel="stylesheet" href="{theme_url}demo/css/style-switcher.css" media="screen"/>
<link rel="stylesheet" href="{theme_url}demo/css/colorpicker.css" media="screen"/>
<script type="text/javascript" src="{theme_url}demo/js/jquery.cookie.js"></script>
<script type="text/javascript" src="{theme_url}demo/js/styleswitch.js"></script>
<script type="text/javascript" src="{theme_url}demo/js/colorpicker.js"></script>
<script type="text/javascript" src="{theme_url}demo/js/switcher.js"></script>
<div class="demobutton">
	<i class="icon-cogs"></i>
</div>
<div id="style-switcher">
	<div id="switcher-header">
		<p>
			 Theme Options
		</p>
	</div>
	<div id="switcher-body">
		<p>
			<strong>Layout Styles</strong>
		</p>
		<p>
			<a href="#" class="color-box" style="width:auto;color:#888;font-weight:700;" data-rel="boxed">BOXED</a><br/>
			<a href="#" class="color-box" data-rel="semiboxed" style="width:auto;color:#888;font-weight:700;">SEMIBOXED</a><br/>
			<a href="#" class="color-box" data-rel="wide" style="width:auto;color:#888;font-weight:700;">WIDE</a><br/>
		</p>
		<p>
			<strong>Color Schemes</strong>
		</p>
		<div class="colors-holder">
			<a href="#" class="color-box" data-rel="2ac4ea"></a>
			<a href="#" class="color-box" data-rel="be9869"></a>
			<a href="#" class="color-box" data-rel="7f8c8d"></a>
			<a href="#" class="color-box" data-rel="1abc9c"></a>
			<a href="#" class="color-box" data-rel="b4ad7f"></a>
			<a href="#" class="color-box" data-rel="ff8100"></a>
			<a href="#" class="color-box" data-rel="f54828"></a>
			<a href="#" class="color-box" data-rel="00aaaa"></a>
			<a href="#" class="color-box" data-rel="f0b70c"></a>
		</div>
	</div>
	<div id="switcher-footer">
		<p>
			<a href="https://www.wowthemes.net/premium-themes-templates/" target="_blank"><img src="{theme_url}demo/images/logowowthemes.png"></a>
		</p>
	</div>
</div>
<!--END DEMO PANEL
================================================== -->
</body>

<!-- Mirrored from www.themepush.com/demo/calypso/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 23:02:30 GMT -->
</html>
