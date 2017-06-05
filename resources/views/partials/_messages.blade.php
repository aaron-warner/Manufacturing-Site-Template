@if ( Session::has('success') )

	<br><br>

	<div class="alert alert-success">

		<strong>Success:</strong> {{ Session::get('success') }}

	</div>

@endif

@if ( count($errors) > 0 )

	<br><br>

	<div class="alert alert-danger">
		
		<strong>Errors:</strong>

		<ul>

			@foreach ($errors->all() as $error)

				<li>{{ $error }}</li>

			@endforeach

		</ul>

	</div>

@endif