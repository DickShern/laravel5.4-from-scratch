@extends('layout.master')

@section('content')

	<div class="col-sm-8 blog-main">
		<h1>
			{{ $post->title }}
		</h1>
		{{ $post->body }}

		<hr>

		<div class="comments">
		@foreach($post->comments as $comment)
			<ul class="list-group">
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }}
					</strong>
					{{ $comment->body }}
				</li>
			</ul>
			
		@endforeach
			
		</div>

		<!-- Add a comment here -->
		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your comment here." class="form-control" required=""></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add comment</button>
					</div>
				</form>
				@include('layout.errors')
			</div>
		</div>

	</div>

@endsection