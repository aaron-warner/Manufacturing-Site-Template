@extends('main')

@section('title', 'Your Dashboard')

@section('content')

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">

			<h2 class="section-title">Your Dashboard</h2>

			<div class="row">

				<div class="col-xs-2 dashboard-sidebar">

					<ul class="unstyled text-center">
						<a href="#" data-toggle="tooltip" data-placement="auto left" title="Manage News Articles">
							<li>
								<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							</li>
						</a>
						<a href="#" data-toggle="tooltip" data-placement="auto left" title="Manage Clients">
							<li>
								<i class="fa fa-handshake-o" aria-hidden="true"></i>
							</li>
						</a>
						<a href="#" data-toggle="tooltip" data-placement="auto left" title="Manage Users">
							<li>
								<i class="fa fa-user" aria-hidden="true"></i>
							</li>
						</a>
						<a href="#" data-toggle="tooltip" data-placement="auto left" title="Logout">
							<li>
								<i class="fa fa-sign-out" aria-hidden="true"></i>
							</li>
						</a>
					</ul>

				</div>

				<div class="col-xs-10 dashboard-content">

				</div>

			</div>

		</div>
	</div>

@endsection

@section('scripts')

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

@endsection