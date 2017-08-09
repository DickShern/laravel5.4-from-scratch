@extends('layout.master')

@section ('content')

<div class="col-sm-8 blog-main">
	<h1> Create a post</h1>

	<form method="POST" action="/posts">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name ="title" placeholder="Title here">
	  </div>
	  <div class="form-group">
	    <label for="body">Body:</label>
	    <textarea id="body" name="body" class="form-control"></textarea>
	  </div>
	 
	 <div class="form-group">
	 	<button type="submit" class="btn btn-primary">Publish</button>
	 </div>
	  
	</form>

	@include('layout.errors')
	
</div>

@endsection