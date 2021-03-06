<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- header -->
		<div id="home" class="head-bg">
			<div class="header">
				<!-- container -->
				<div class="container">
					<div class="header-logo">
						<!-- <a href="#"><img src="images/logo.png" alt="" /></a> -->
						<span>Panada</span>
					</div>
					<div class="top-nav">
						<span class="menu">MENU</span>
						<ul class="nav1">
							<li><a href="#home" class="scroll">Home</a></li>                                                  
							<li><a href="#services" class="scroll">Services</a></li>  
							<li><a href="#about" class="scroll">About</a></li>  
							<li><a href="#portfolio" class="scroll">Portfolio</a></li>  
							<!-- <li><a href="#blog" class="scroll">Blog</a></li>  -->
							<!-- <li><a href="#testimonials" class="scroll">Testimonials</a></li> -->
							<li><a href="mailto:chensw10@lenovo.com"><img src="images/msg.png" alt="" /></a></li>  
						</ul>
						<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
			<div class="container">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="head-info">
									<h1>Creative Agency <span>For Your Design Needs</span></h1>
									<p>Web Development - APP Developer - UI design - Your Freelance</p>
									<button class="button btn-1 btn-1e">Read More </button>
								</div>
							</li>
							<li>
								<div class="head-info">
									<h1>Develope Premium  <span>For Your Business Needs</span></h1>
									<p>Web Development - app Developer - Internet Marketer - Your Freelance</p>
									<button class="button btn-1 btn-1e">Read More </button>
								</div>
							</li>
							<li>
								<div class="head-info">
									<h1>People Behind <span>To deliver quality output</span></h1>
									<p>Web Development - IOS Developer - Internet Marketer - Your Freelance</p>
									<button class="button btn-1 btn-1e">Read More</button>
								</div>
							</li>
						</ul>
					</div>
				</div>
		</div>
		<!-- //header -->
		<!-- agency -->
		<div id="about" class="agency">
			<div class="agency-left">
				<h2>i<span>panada</span> Agency</h2>
				<h4>We Develope <span>Premium</span> & Mobile 
					<span>Responsive</span> website template for any type of business!
				</h4>
				<p>Professional development team, to provide you with the website you need, enterprise station, product browsing, company introduction and so on. At the same time, providing responsive website development, the mobile terminal, the computer, and the tablet can all adapt to the screen.</p>
				<button class="button-red">More About Us </button>
			</div>
			<div class="agency-right">
				<img src="images/device.png" alt="" />
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //agency -->

		<!-- services -->
		<div id="services" class="services">
			<!-- container -->
			<div class="container">
				<div class="services-info">
					<h3>Our <span>Services</span></h3>
					<p>Website development, app development. We focus on writing code, and our mission is to help your business embark on the Internet highway. We firmly believe that our cooperation will take your career to the next level..</p>
				</div>
				<div class="services-grids">
					<div class="service-grid">
						<div class="service-grid-bg">
							<div class="service-grid-text">
								<img src="images/mobile.png" alt="" />
								<div class="border"> </div>
								<h5>Retina ready & Responsive</h5>
								<p>Design is a response to a specific problem.</p>
							</div>
						</div>
					</div>
					<div class="service-grid">
						<div class="service-grid-bg red">
							<div class="service-grid-text">
								<img src="images/setting.png" alt="" />
								<div class="border"> </div>
								<h5>fully customizable</h5>
								<p>Design is a response to a specific problem.</p>
							</div>
						</div>
					</div>
					<div class="service-grid">
						<div class="service-grid-bg">
							<div class="service-grid-text">
								<img src="images/hart.png" alt="" />
								<div class="border"> </div>
								<h5>Built With Love</h5>
								<p>Design is a response to a specific problem.</p>
							</div>
						</div>
					</div>
					<div class="service-grid">
						<div class="service-grid-bg red">
							<div class="service-grid-text">
								<img src="images/lamp.png" alt="" />
								<div class="border"> </div>
								<h5>Great Technical Support</h5>
								<p>Design is a response to a specific problem.</p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //services -->
		<!-- services-bottom -->
		<div class="services-bottom">
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 4
				  $("#slider4").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						 $('.events').append("<li>before event fired.</li>");
					},
					after: function () {
							$('.events').append("<li>after event fired.</li>");
					}
				 });
					
				});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="services-bottom-text">
							<h3>"People Behind <span>panada</span> are advanced art enthusiasts, 
							cleaver in shaping and type of design you need."</h3>
							<div class="sub-text">
								<span class="line"></span>
								<span class="line-anchor">OUR VISION</span>
								<span class="line"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="services-bottom-text another">
							<h3>"To deliver <span>quality output</span> - 
								<label>unique, affordable and professional"</label></h3>
							<div class="sub-text">
								<span class="line"></span>
								<span class="line-anchor">OUR VISION</span>
								<span class="line"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="services-bottom-text">
							<h3>"People Behind <span>panada</span> are advanced art enthusiasts, 
							cleaver in shaping and type of design you need."</h3>
							<div class="sub-text">
								<span class="line"></span>
								<span class="line-anchor">OUR VISION</span>
								<span class="line"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="services-bottom-text another">
							<h3>"To deliver <span>quality output</span> - 
								<label>unique, affordable and professional"</label></h3>
							<div class="sub-text">
								<span class="line"></span>
								<span class="line-anchor">OUR VISION</span>
								<span class="line"></span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //services-bottom -->
		<!-- work -->
		<div id="portfolio" class="work">
			<!-- container -->
			<div class="container">
				<div class="work-info">
					<h3>Recent <span>Works</span></h3>
					<p>We have served many customers and it is our pleasure to choose us..</p>
				</div>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider2").responsiveSlides({
						auto: true,
						pager: false,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							 $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
								$('.events').append("<li>after event fired.</li>");
						}
					 });
						
					});
				</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider2">
						<li>
							<div class="work-info-grids">
								<div class="work-info-grid">
									<img src="images/food.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="work-info-grid">
									<img src="images/card.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="work-info-grid">
									<img src="images/phone.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="work-info-grids">
								<div class="work-info-grid">
									<img src="images/card.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="work-info-grid">
									<img src="images/phone.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="work-info-grid">
									<img src="images/food.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="work-info-grids">
								<div class="work-info-grid">
									<img src="images/phone.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="work-info-grid">
									<img src="images/food.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="work-info-grid">
									<img src="images/card.jpg" alt="" />
									<div class="caption">
										<span> </span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
					</ul>
				</div>
				<button class="button-red view">View More </button>
			</div>
			<!-- //container -->
		</div>
		<!-- //work -->
		<!-- blog -->
		<div id="blog" class="blog">
			<!-- container -->
			<!-- <div class="container">
				<div class="blog-info">
					<h3>Blog <span>Posts</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider1").responsiveSlides({
						auto: true,
						pager: false,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							 $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
								$('.events').append("<li>after event fired.</li>");
						}
					 });
						
					});
				</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider1">
						<li>
							<div class="work-info-grids">
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/tag.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text">
										<label>Jan. 5, 2014</label>
										<h5>Why Hire Us For Your Business?</h5>
										<p>Temporibus autem quibusdam et aut off-iciis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>25 comments <img src="images/red-hart.png" alt="" />10</span>
									</div>
								</div>
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/phone1.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text gray">
										<label>Apr. 1, 2014</label>
										<h5>Mobile Apps for Everyone</h5>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>55 comments <img src="images/red-hart.png" alt="" />89</span>
									</div>
								</div>
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/dimond.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text">
										<label>Apr. 4, 2014</label>
										<h5>Best Flat Icons for Web</h5>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>13 comments <img src="images/red-hart.png" alt="" />15</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="work-info-grids">
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/phone1.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text">
										<label>Apr. 1, 2014</label>
										<h5>Mobile Apps for Everyone</h5>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>55 comments <img src="images/red-hart.png" alt="" />89</span>
									</div>
								</div>
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/dimond.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text gray">
										<label>Apr. 4, 2014</label>
										<h5>Best Flat Icons for Web</h5>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>13 comments <img src="images/red-hart.png" alt="" />15</span>
									</div>
								</div>
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/tag.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text">
										<label>Jan. 5, 2014</label>
										<h5>Why Hire Us For Your Business?</h5>
										<p>Temporibus autem quibusdam et aut off-iciis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>25 comments <img src="images/red-hart.png" alt="" />10</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="work-info-grids">
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/dimond.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text">
										<label>Apr. 4, 2014</label>
										<h5>Best Flat Icons for Web</h5>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>13 comments <img src="images/red-hart.png" alt="" />15</span>
									</div>
								</div>
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/tag.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text gray">
										<label>Jan. 5, 2014</label>
										<h5>Why Hire Us For Your Business?</h5>
										<p>Temporibus autem quibusdam et aut off-iciis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>25 comments <img src="images/red-hart.png" alt="" />10</span>
									</div>
								</div>
								<div class="blog-info-grid">
									<div class="work-info-grid first">
										<img src="images/phone1.jpg" alt="" />
										<div class="caption">
											<span> </span>
										</div>
									</div>
									<div class="blog-info-grid-text">
										<label>Apr. 1, 2014</label>
										<h5>Mobile Apps for Everyone</h5>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<span>55 comments <img src="images/red-hart.png" alt="" />89</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
					</ul>
				</div>
				<button class="button-red view">View More </button>
			</div> -->


			<!-- //container -->
		</div>

		<!-- //blog -->


		<!-- partners -->
		<div id="testimonials" class="partners">
			<!-- container -->
			<div class="container">
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider5").responsiveSlides({
						auto: true,
						pager: false,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							 $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
								$('.events').append("<li>after event fired.</li>");
						}
					 });
						
					});
				</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider5">
						<li>
							<div class="slid">
								<div class="slid-grid">
									<a href="#"><img src="images/company1.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company2.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company3.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company4.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company5.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company6.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="slid">
								<div class="slid-grid">
									<a href="#"><img src="images/company2.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company3.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company4.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company5.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company6.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company1.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="slid">
								<div class="slid-grid">
									<a href="#"><img src="images/company3.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company4.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company5.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company6.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company1.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company2.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="slid">
								<div class="slid-grid">
									<a href="#"><img src="images/company4.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company5.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company6.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company1.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company2.png" alt="" /></a>
								</div>
								<div class="slid-grid">
									<a href="#"><img src="images/company3.png" alt="" /></a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //partners -->
		<!-- address -->
		<div class="address">
			<!-- container -->
			<div class="container">
				<ul>
					<li><span>LOCATION</span>: BASAK KAGUDOY LAPU-LAPU CITY</li>
					<li class="p-number"><span>PHONE</span>: 09217035927</li>
					<li><span>EMAIL</span>:<a href="mailto:info@example.com">chensw10@lenovo.com</a></li>
				</ul>
			</div>
			<!-- //container -->
		</div>
		<!-- //address -->
		<!-- description -->
		<div class="description">
			<!-- //container -->
			<div class="container">
				<div class="col-md-6 description-left">
					<ul>
						<li><a href="#"><img width="150px"  src="images/par.jpg" alt="ALMANETO T. LIBRON " /></a></li>
						<li class="para">ALMANETO T. LIBRON, General Manager of Cebu City, if you have any needs and questions, please contact our manager. If you have any questions about the technology, you can send an email to our email address. Choose us and make yourself. Contact us to open your Internet age.</li>
					</ul>
				</div>
<!--  -->


	<div class="col-md-6 description-left">
					<ul>
						<li><a href="#"><img width="150px"  src="images/par1.jpg" alt="ALMANETO T. LIBRON " /></a></li>
						<li class="para">Siwei, a senior software development engineer, specializes in website development and app development. For PHP, Python has 5 years of R&D experience. Now serving the lenovo data analysis team. Good at developing enterprise stations, dynamic websites, data analysis, e-commerce websites, linux platforms..</li>
					</ul>
				</div>









				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //description -->
		<!-- quote -->

		<!-- //quote -->
		<!-- footer -->
		<div class="footer">
			<!-- footer-top -->
			<div class="footer-top">
				<div class="icons">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="instagram"> </a></li>
						<li><a href="#" class="behance"> </a></li>
						<li><a href="#" class="chrome"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="dribble"> </a></li>
					</ul>
				</div>
			</div>
			<!-- //footer-top -->
			<!-- footer-bottom -->
			<div class="footer-bottom">
				<!-- container -->
				<div class="container">
					<div class="footer-bottom-left">
						<p>Copyright &copy; <?php echo date('Y',time())?>.Panada team All rights reserved.</p>
					</div>
					<div class="footer-bottom-right">

					</div>
				</div>
				<!-- //container -->
			</div>
			<!-- //footer-bottom -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->

</body>
</html>