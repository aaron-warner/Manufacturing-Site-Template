<div class="container-fluid">

	<div class="row header-container">
		<div class="col-xs-10 col-xs-offset-1">

			<div class="info-container">
				<ul class="unstyled inline">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>  7 Pendeford Place, Wolverhampton</li>
					<li><i class="fa fa-clock-o" aria-hidden="true"></i>  Mon - Fri | 9:00 - 5:00</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>  0330 088 9618</li>
				</ul>
			</div>

			<div class="social-container">
				<ul class="unstyled inline">
					<li><i class="fa fa-envelope" aria-hidden="true"></i>  <a href="mailto:example@domain.com">example@domain.com</a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>
	</div>

	<div class="row menu-container">
		<div class="col-xs-10 col-xs-offset-1">

			<div class="row nav-container">

		        <div class="col-xs-3">

		            <span id="menu-btn" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>

		        </div>

		        <div class="col-xs-6 text-center">
		            <a href="/">
		            	<img src="{{ asset('img/main-logo.png') }}" width="300" height="100" class="img-responsive img-center" />
		            </a>
		        </div>

		        <div class="col-xs-3 text-center">
		        	<a href="/login" class="btn btn-default">Login</a>
			        <a href="/register" class="btn btn-primary">Register</a>
		        </div>

		    </div>

		</div>
	</div>

</div>

<!-- The overlay -->
<div id="overlay-nav" class="overlay">

	<!-- Button to close the overlay navigation -->
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<!-- Overlay content -->
	<div class="overlay-nav-content">
		<a href="/">Home</a>
		<a href="#">News</a>
		<a href="#">Services</a>
		<a href="#">Products</a>
		<a href="#">Contact</a>
	</div>

</div>

