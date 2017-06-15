@extends('main')

@section('title', 'Manage news Articles')

@section('content')

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">

			<h2 class="section-title">Manage News Articles</h2>

			<div class="row">

				<div class="table-resppnsive">
					<table class="table table-striped table-hover">

						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Article Body</th>
							<th>Posted By</th>
							<th>Actions</th>
						</tr>

						@foreach ($news as $article)

							<tr>
								<td>{{ $article->id }}</td>
								<td>{{ $article->title }}</td>
								<td>
									{{ substr($article->body, 0, 100) }}
                                	{{ strlen($article->body) > 100 ? "..." : "" }}
                                </td>
								<td>{{ $article->postedBy }}</td>
								<td>
									<a href="#" class="btn btn-default">View</a>
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>

						@endforeach

					</table>
				</div>

			</div>

			{{ $news->links() }}

		</div>
	</div>

@endsection