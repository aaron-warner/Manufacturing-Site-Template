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
		        	@if (Auth::check())
		        		<a href="#" class="btn btn-primary" onclick="openDashboardNav()">Dashboard</a>
		        		<a href="{{ route('logout') }}" class="btn btn-default" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
		        	@else
			        	<a href="/login" class="btn btn-default">Login</a>
				        <a href="/register" class="btn btn-primary">Register</a>
			        @endif
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
		<a href="/news">News</a>
		<a href="/services">Services</a>
		<a href="#">Products</a>
		<a href="/contact">Contact</a>
		@if (Auth::check())
		<a href="#" onclick="openDashboardNav()">Admin Dashboard</a>
		@endif
	</div>

</div>

@if (Auth::check())

<!-- The overlay -->
<div id="dashboard-nav" class="overlay">

	<!-- Button to close the dashboard navigation -->
	<a href="javascript:void(0)" class="closebtn" onclick="closeDashboardNav()">&times;</a>

	<!-- dashboard content -->
	<div class="dashboard-nav-content">
		<a href="/dashboard/manage-news"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  Manage News</a>
		<a href="/dashboard/manage-clients"><i class="fa fa-handshake-o" aria-hidden="true"></i>  Manage Clients</a>
		<a href="/dashboard/manage-users"><i class="fa fa-user" aria-hidden="true"></i>  Manage Users</a>
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a>
	</div>

</div>

@endif

