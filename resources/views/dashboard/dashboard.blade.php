@extends('main')

@section('title', 'Your Dashboard')

@section('content')

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">

			<h2 class="section-title">Your Dashboard</h2>

			<div class="row">

				<div class="col-sm-4 text-center">
					<i class="fa fa-newspaper-o" aria-hidden="true"></i>
					<h3>Manage News</h3>
				</div>

				<div class="col-sm-4 text-center">
					<i class="fa fa-handshake-o" aria-hidden="true"></i>
					<h3>Manage Clients</h3>
				</div>

				<div class="col-sm-4 text-center">
					<i class="fa fa-user" aria-hidden="true"></i>
					<h3>Manage Users</h3>
				</div>

			</div>

		</div>
	</div>

@endsection