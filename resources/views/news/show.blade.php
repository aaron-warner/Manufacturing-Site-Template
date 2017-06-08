@extends('main')

@section('title', $news->title)

@section('content')

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">

			<div class="article-container">
			    <div class="article-image-container">
			        <a href="#">
			            <img src="{{ asset('uploaded-images/' .$news->image) }}" width="100%" height="100%" class="img-responsive" />
			        </a>
			    </div>
			    <div class="article-title-container">
			        <span class="article-title"><a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a></span>
			    </div>
			    <div class="article-content-container">
			        <p>
			        {{ $news->body }}
			        </p>
			    </div>
			    <div class="article-info-container">
			        <span class="published-by">Published by: <a href="/">{{ $news->postedBy }}</a></span>
			        <br>
			        <span class="published-on"><i class="fa fa-calendar" aria-hidden="true"></i>  {{ $news->created_at }}</span>
			    </div>
			</div>

		</div>
	</div>

@endsection