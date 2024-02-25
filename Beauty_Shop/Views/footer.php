<!-- footer -->
<div class="footer pt-lg-10 text-center col-12">
	<div class="container">

		<ul class="list-agileits py-4 border-bottom">
			<li>
				<a href="home">
					<h5> Home
					</h5>
				</a>
			</li>
			<li class="my-3">
				<a href="about" class="mx-4">
					<h5> About Us
					</h5>
				</a>
			</li>

			<li>
				<a href="contact">
					<h5>Contact Us
					</h5>
				</a>
			</li>
		</ul>
		<!-- <div class="footerv2-w3ls pt-4">
				<h3 class="w3f_title">Socialize with Us</h3>
				<ul class="social-iconsv2 agileinfo pt-3">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
			</div> -->

	</div>
	<div class="p-sm-5 px-3 py-5">
		<!-- footer right -->
		<div class="col-md-8 mx-auto">
			<h3 class="mb-3 w3f_title">Contact Us</h3>
			<div class="row">
				<div class="col-lg-4 fv3-contact">
					<span class="fas fa-envelope-open mr-2 my-3"></span>
					<p>
						ABC@gmail.com
					</p>
					<p>
						XYZ@gmail.com
					</p>
				</div>
				<div class="col-lg-4 fv3-contact my-lg-0 my-4">
					<span class="fas fa-phone-volume mr-2 my-3"></span>
					<p>+91 984 456 7896</p>
					<p>+91 956 786 2456</p>
				</div>
				<div class="col-lg-4 fv3-contact">
					<span class="fas fa-home mr-2 my-3"></span>
					<address>A-102 Saligram, vishwakarma temple,chandlodiya Ahmedabad.</address>
				</div>
			</div>
			<!-- //footer right -->
		</div>
		<!-- //footer row -->
	</div>
	<!-- copyright -->
	<!-- <div class="cpy-right text-center py-3 bg-theme">
			<p class="text-white">© 2018 Beauty Blog. All rights reserved | Design by
				<a href="http://w3layouts.com" class="text-white"> W3layouts.</a>
			</p>
		</div> -->
	<!-- //copyright -->
	<!-- //footer container -->
</div>
<!-- //footer -->
<!-- js-->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/jquery-2.2.3.min.js"></script>
<!-- menu -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/menu.js"></script>
<!-- //menu -->
<!-- banner responsiveslides -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		// Slideshow 4
		$("#slider3").responsiveSlides({
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
<!-- //banner responsiveslides -->
<!-- side nav js -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/SidebarNav.min.js"></script>
<script>
	$('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->
<!-- search-bar -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/main.js"></script>
<!-- //search-bar-->
<!-- flexisel -->
<script>
	$(window).load(function () {
		$("#flexiselDemo1").flexisel({
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});
	});
</script>
<script>
	$(window).load(function () {
		$("#flexiselDemo2").flexisel({
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 736,
					visibleItems: 2
				}
			}
		});

	});
</script>
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/jquery.flexisel.js"></script>
<!-- move-top -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/move-top.js"></script>
<!-- easing -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/easing.js"></script>
<!--  necessary snippets for few javascript files -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/Beautyblog.js"></script>
<!-- smooth scroll -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/SmoothScroll.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="<?php echo $this->base_url; ?>js/bootstrap.js "></script>
</body>

</html>

