@extends('main')

@section('title', 'Create News Article')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">

		<div class="col-xs-10 col-xs-offset-1">

			<h2 class="section-title">Create News Article</h2>

			<hr>

			{!! Form::open(['route' => 'news.store', 'data-parsley-validate' => '', 'files' => true]) !!}

				{{ Form::label('image', 'Image Upload:') }}
				{{ Form::file('image') }}
			
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('body', 'Article Body:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::label('postedBy', 'Company Name:') }}
				{{ Form::text('postedBy', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

			{!! Form::close() !!}

		</div>

	</div>


@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection