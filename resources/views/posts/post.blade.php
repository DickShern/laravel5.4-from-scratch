<div class="blog-post">
	<h1 class="blog-post-title"> 
		<a href="/posts/{{ $post->id }}">
			{{ $post->title }}
		</a>

	</h1>

	<p class="blog-post-meta"> 
	{{ $post->user->name }}
		{{ $post->created_at->toFormattedDateString() }}

		
	</p>

	{{ $post->body }}


</div>